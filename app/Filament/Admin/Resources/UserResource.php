<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Filament\Admin\Resources\UserResource\RelationManagers;
use App\Filament\Enums\UsersRoleEnum;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return trans("general.user_management");
    }

    public static function getLabel(): ?string
    {
        return trans("users.label");
    }

    public static function getPluralLabel(): ?string
    {
        return trans("users.plural_label");
    }

    public static function getNavigationLabel(): string
    {
        return trans("users.navigation_label");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make("avatar")
                    ->label(trans("users.avatar"))
                    ->disk("public")
                    ->directory(config("filesystems.user_avatar_path"))
                    ->image()
                    ->avatar()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('name')
                    ->label(trans("users.name"))
                    ->maxLength(255),
                Forms\Components\TextInput::make('family')
                    ->label(trans("users.family"))
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->label(trans("users.phone_number"))
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label(trans("users.email"))
                    ->email()
                    ->maxLength(255),
                Forms\Components\Select::make('role')
                    ->label(trans("users.role"))
                    ->options(UsersRoleEnum::class),
                Forms\Components\CheckboxList::make('merchant_id')
                    ->relationship("merchants","fa_name")
                    ->label(trans("users.merchant_id"))
                    ->columns(2)
                    ->required(),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label(trans("users.email_verified_at")),
                Forms\Components\TextInput::make('password')
                    ->label(trans("users.password"))
                    ->password()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_blocked')
                    ->label(trans("users.is_blocked"))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(trans("users.name"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('family')
                    ->label(trans("users.family"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label(trans("users.phone_number"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label(trans("users.email"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('role')
                    ->label(trans("users.role")),
                Tables\Columns\TextColumn::make('locale')
                    ->label(trans("users.locale")),
                Tables\Columns\TextColumn::make('merchant_id')
                    ->label(trans("users.merchant_id"))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->label(trans("users.email_verified_at"))
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_blocked')
                    ->label(trans("users.is_blocked"))
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(trans("users.created_at"))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(trans("users.updated_at"))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->actionsColumnLabel(trans("general.action"))
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make("name")
                ->label(trans("users.name")),
            TextEntry::make("family")
                ->label(trans("users.family")),
            TextEntry::make("phone_number")
                ->label(trans("users.phone_number")),
            TextEntry::make("email")
                ->label(trans("users.email")),
            TextEntry::make("role")
                ->label(trans("users.role")),
            TextEntry::make("locale")
                ->label(trans("users.locale")),
            TextEntry::make("merchant_id")
                ->label(trans("users.merchant_id")),
            TextEntry::make("email_verified_at")
                ->label(trans("users.email_verified_at")),
            TextEntry::make("password")
                ->label(trans("users.password")),
            TextEntry::make("is_blocked")
                ->label(trans("users.is_blocked")),
            TextEntry::make("created_at")
                ->label(trans("users.created_at")),
            TextEntry::make("updated_at")
                ->label(trans("users.updated_at")),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
