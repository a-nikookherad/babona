<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MerchantResource\Pages;
use App\Filament\Admin\Resources\MerchantResource\RelationManagers;
use App\Filament\Enums\MerchantRoleEnum;
use App\Models\Merchant;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MerchantResource extends Resource
{
    protected static ?string $model = Merchant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;

    public static function getModelLabel(): string
    {
        return trans("merchant.label");
    }

    public static function getPluralModelLabel(): string
    {
        return trans("merchant.plural_label");
    }

    public static function getNavigationGroup(): ?string
    {
        return trans("general.merchant_management");
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make("image")
                    ->label(trans("merchant.image"))
                    ->disk("public")
                    ->directory(config("filesystems.merchant_image_path"))
                    ->image()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('fa_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('brand')
                    ->maxLength(255),

                Forms\Components\Repeater::make('users')
                    ->relationship('users')
                    ->label(trans("merchant.user_with_role"))
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label(trans("users.label"))
                            ->getSearchResultsUsing(
                                fn(string $search) => \App\Models\User::query()
                                    ->where('name', 'like', "%{$search}%")
                                    ->limit(50)
                                    ->pluck('name', 'id')
                            )
                            ->getOptionLabelUsing(
                                fn($value) => \App\Models\User::find($value)?->name
                            )
                            ->searchable()
                            ->inlineLabel()
                            ->required(),

                        Forms\Components\Select::make('role')
                            ->label(trans("users.role"))
                            ->options(MerchantRoleEnum::class)
                            ->inlineLabel()
                            ->required(),
                    ])
                    ->dehydrated()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fa_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand')
                    ->searchable(),
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
            'index' => Pages\ListMerchants::route('/'),
            'create' => Pages\CreateMerchant::route('/create'),
            'view' => Pages\ViewMerchant::route('/{record}'),
            'edit' => Pages\EditMerchant::route('/{record}/edit'),
        ];
    }
}
