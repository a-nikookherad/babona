<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CategoryResource\Pages;
use App\Filament\Admin\Resources\CategoryResource\RelationManagers;
use App\Filament\Enums\CategoryStatusEnum;
use App\Infrastructure\Helpers\PersianSlug;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 1;

    public static function getModelLabel(): string
    {
        return trans("category.label");
    }

    public static function getPluralModelLabel(): string
    {
        return trans("category.plural_label");
    }

    public static function getNavigationGroup(): ?string
    {
        return trans("general.product_management");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->hidden()
                    ->dehydratedWhenHidden()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->label(trans("category.name"))
                    ->maxLength(255),
                Forms\Components\TextInput::make('fa_name')
                    ->label(trans("category.fa_name"))
                    ->afterStateUpdated(function (Forms\Set $set, $state) {
                        $set("slug", PersianSlug::make($state));
                    })
                    ->maxLength(255),

                Forms\Components\Select::make('status')
                    ->label(trans("category.status"))
                    ->options(CategoryStatusEnum::class)
                    ->required(),
//                Forms\Components\TextInput::make('jsonld'),
                Forms\Components\Select::make('parent_id')
                    ->label(trans("category.parent_id"))
                    ->relationship('parent', 'name'),
                Forms\Components\Textarea::make('description')
                    ->label(trans("category.description"))
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->label(trans("category.slug"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label(trans("category.name"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('fa_name')
                    ->label(trans("category.fa_name"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label(trans("category.description"))
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status')
                    ->label(trans("category.status"))
                    ->options(CategoryStatusEnum::class)
                    ->disabled(),
                Tables\Columns\TextColumn::make('parent.name')
                    ->label(trans("category.parent_id"))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label(trans("category.deleted_at"))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(trans("category.created_at"))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(trans("category.updated_at"))
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'view' => Pages\ViewCategory::route('/{record}'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
