<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;
use App\Filament\Enums\ProductStatusEnum;
use App\Infrastructure\Helpers\PersianSlug;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 4;

    public static function getModelLabel(): string
    {
        return trans("product.label");
    }

    public static function getPluralModelLabel(): string
    {
        return trans("product.plural_label");
    }

    public static function getNavigationGroup(): ?string
    {
        return trans("general.product_management");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make(trans("product.seo_section"))
                    ->tabs(
                        [
                            Forms\Components\Tabs\Tab::make(trans("product.image_section"))
                                ->schema(self::productImageSection()),

                            Forms\Components\Tabs\Tab::make(trans("product.product_section"))
                                ->schema(self::productSection()),

                            Forms\Components\Tabs\Tab::make(trans("product.product_details_section"))
                                ->schema(self::productDetailsSection()),

                            /*                            Forms\Components\Tabs\Tab::make(trans("product.product_inventory_section"))
                                                            ->schema(self::inventorySection()),*/

                            Forms\Components\Tabs\Tab::make(trans("product.seo_section"))
                                ->schema(self::productSeoSection())

                        ]
                    )
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make("thumbnail.path")
                    ->disk("public")
                    ->height(50)
                    ->width(50)
//                    ->getStateUsing(fn ($record) => $record->thumbnail?->path),
                    ->getStateUsing(fn($record) => Storage::disk('public')->url($record->thumbnail?->path)),
//                    ->getStateUsing(fn($record) => dd($record->toArray())),
                Tables\Columns\TextColumn::make('fa_name')
                    ->label(trans("product.fa_name"))
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                /*                Tables\Columns\TextColumn::make('material')
                                    ->label(trans("product.material"))
                                    ->searchable(),

                                Tables\Columns\TextColumn::make('style')
                                    ->label(trans("product.style"))
                                    ->searchable(),

                                Tables\Columns\TextColumn::make('code')
                                    ->label(trans("product.code"))
                                    ->searchable(),

                                Tables\Columns\TextColumn::make('barcode')
                                    ->label(trans("product.barcode"))
                                    ->searchable(),*/
                Tables\Columns\TextColumn::make('status')
                    ->label(trans("product.status")),
                /*                Tables\Columns\TextColumn::make('brief')
                                    ->label(trans("product.brief"))
                                    ->searchable(),
                                Tables\Columns\TextColumn::make('meta_tag_title')
                                    ->searchable(),
                                Tables\Columns\TextColumn::make('meta_tag_description')
                                    ->searchable(),
                                Tables\Columns\TextColumn::make('meta_tag_keywords')
                                    ->searchable(),
                                Tables\Columns\TextColumn::make('category.name')
                                    ->numeric()
                                    ->sortable(),*/
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    private static function productImageSection(): array
    {
        return [
            FileUpload::make('thumbnail')
                ->label(trans('product.thumbnail'))
                ->disk("public")
                ->directory(config("filesystems.product_thumbnail_path"))
                ->visibility("public")
                ->avatar()
                ->required()
                ->columnSpanFull()
                ->afterStateHydrated(function ($component, $state) {
                    if ($state) {
                        $component->state($state);
                    } elseif ($component->getRecord()?->thumbnail) {
                        $component->state([$component->getRecord()->thumbnail->path]);
                    }
                }),
            Forms\Components\Section::make()
                ->schema([
                    FileUpload::make('attachments')
                        ->label(trans('product.attachments'))
                        ->disk("public")
                        ->directory(config("filesystems.product_attachments_path"))
                        ->visibility('public')
                        ->required()
                        ->multiple()
                        ->afterStateHydrated(function ($component) {
                            $paths = $component->getRecord()?->attachments?->pluck('path')?->toArray() ?? [];
                            $component->state($paths);
                        })
                ])
                ->icon("heroicon-o-rectangle-stack"),
        ];
    }

    private static function productSection(): array
    {
        return [
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label(trans("product.name"))
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->dehydratedWhenHidden(true)
                        ->hidden(),
                    Forms\Components\TextInput::make('fa_name')
                        ->label(trans("product.fa_name"))
                        ->maxLength(255)
                        ->required()
                        ->afterStateUpdated(function (Set $set, $state) {
                            $set('slug', PersianSlug::make($state));
                        }),
                    Forms\Components\Select::make('category_id')
                        ->label(trans("product.category_id"))
                        ->relationship('category', 'fa_name'),
                    Forms\Components\TextInput::make('style')
                        ->label(trans("product.style"))
                        ->maxLength(255),
                    Forms\Components\TextInput::make('material')
                        ->label(trans("product.material"))
                        ->maxLength(255),

                    Forms\Components\TextInput::make('code')
                        ->label(trans("product.code"))
                        ->maxLength(255),
                    /*                    Forms\Components\TextInput::make('barcode')
                                            ->label(trans("product.barcode"))
                                            ->maxLength(255),*/
                    Forms\Components\Select::make('status')
                        ->label(trans("product.status"))
                        ->enum(ProductStatusEnum::class)
                        ->options(ProductStatusEnum::class),
                    Forms\Components\Textarea::make('brief')
                        ->label(trans("product.brief"))
                        ->maxLength(255)
                        ->columnSpanFull(),
                    Forms\Components\RichEditor::make('description')
                        ->label(trans("product.description"))
                        ->columnSpanFull(),
                ]),
        ];
    }

    private static function productDetailsSection(): array
    {
        return [
            Forms\Components\Grid::make(1)
                ->schema([
                    Forms\Components\Repeater::make("inventory")
                        ->label(trans("product.product_details_section"))
                        ->schema([
                            Forms\Components\TextInput::make('size')
                                ->label(trans("product.size"))
                                ->inlineLabel()
                                ->datalist([
                                    "small",
                                    "medium",
                                    "large",
                                    "x-large",
                                    "xx-large",
                                    "xxx-large",
                                    "xxxx-large",
                                ])
                                ->maxLength(255),
                            Forms\Components\ColorPicker::make("color")
                                ->label(trans("product.color"))
                                ->inlineLabel(),
                            Forms\Components\TextInput::make("price")
                                ->label(trans("product.price"))
                                ->inlineLabel()
                                ->numeric()
                                ->required(),
                            Forms\Components\TextInput::make("discount")
                                ->label(trans("product.discount"))
                                ->inlineLabel()
                                ->maxValue(99)
                                ->maxLength(99)
                                ->numeric(),
                            Forms\Components\DatePicker::make("discount_expired_at")
                                ->label(trans("product.discount_expired_at"))
                                ->inlineLabel()
                                ->format("Y-m-d"),
                            Forms\Components\Section::make(trans("product.inventory"))
                                ->schema([
                                    Forms\Components\TextInput::make('stock')
                                        ->label(trans("product.stock"))
                                        ->inlineLabel()
                                        ->maxLength(255)
                                        ->numeric(),
                                    Forms\Components\TextInput::make("price")
                                        ->label(trans("product.gross_price"))
                                        ->inlineLabel()
                                        ->numeric()
                                        ->required(),
                                ])

                        ])

                ]),
        ];
    }


    private static function productSeoSection(): array
    {
        return [
            Forms\Components\Grid::make()
                ->schema([

                    Forms\Components\TextInput::make('meta_tag_title')
                        ->label(trans("product.meta_tag_title"))
                        ->inlineLabel()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Forms\Components\TextInput::make('jsonld')
                        ->label(trans("product.jsonld"))
                        ->hidden(),

                    Forms\Components\Textarea::make('meta_tag_keywords')
                        ->label(trans("product.meta_tag_keywords"))
                        ->inlineLabel()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('meta_tag_description')
                        ->label(trans("product.meta_tag_description"))
                        ->inlineLabel()
                        ->maxLength(255)
                        ->columnSpanFull(),
                ])
        ];
    }
}
