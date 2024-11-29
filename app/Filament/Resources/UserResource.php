<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Actions\Action;
use Mary\Traits\Toast;
use Filament\Tables\Actions\DeleteAction;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->label('Name'),
                TextInput::make('email')
                ->required()
                ->label('Email')
                ->email(),

                Select::make('user_type')
                ->options([
                    'member' => 'Member',
                    'admin' => 'Admin',
                    'moderator' => 'Moderator',
                ])
                ->required()
                ->label('User Type')
                ->visible(fn() => Auth::user()->user_type === 'admin'),
                
                TextInput::make('password')
                ->password()
                ->required(fn($context) => $context === 'create') // Required only on creation
                ->visible(fn($context) => $context === 'create') // Only visible on creation
                ->label('Password')
                ->dehydrateStateUsing(fn ($state) => !empty($state) ? bcrypt($state) : null)
                ->helperText(fn($context) => $context === 'edit' ? 'Leave blank to keep the current password' : ''),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->label('User Id'),
                TextColumn::make('name')
                ->label('Name')
                ->sortable()
                ->searchable(),
                TextColumn::make('email')
                ->label('Email'),
                TextColumn::make('user_type')
                ->label('User Type')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
              //
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
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }


  
}