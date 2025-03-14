<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\Wizard::make([
                    Forms\Components\Wizard\Step::make('Event Details')
                        ->columns(2)
                        ->description('Enter the details of the event.')
                        ->schema([
                            Forms\Components\Hidden::make('vendor_id')
                                ->default(auth()->user()->id),
                            Forms\Components\TextInput::make('title')
                                ->label('Event Title')
                                ->placeholder('Title')
                                ->required()
                                ->maxLength(255)
                                ->autofocus()
                                ->columnSpanFull()
                                ->prefixIcon('heroicon-o-ticket')
                                ->prefixIconColor('luckycat'),
                            Forms\Components\TextArea::make('description')
                                ->label('Event Description')
                                ->placeholder('Description')
                                ->required()
                                ->maxLength(255)
                                ->autosize()
                                ->columnSpanFull(),
                            Forms\Components\TextInput::make('price')
                                ->required()
                                ->numeric()
                                ->prefixIcon('heroicon-o-currency-dollar')
                                ->prefixIconColor('luckycat')
                                ->minValue(1)
                                ->columnSpan(1),
                            Forms\Components\FileUpload::make('thumbnail')
                                ->required()
                                ->columnSpan(1)
                                ->disk('public')
                                ->directory('event')
                                ->acceptedFileTypes(['image/*'])
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->uploadingMessage('Uploading thumbnail...'),
                        ]),
                    Forms\Components\Wizard\Step::make('Event Benefits')
                        ->description('Enter the benefits of the event.')
                        ->schema([
                            Forms\Components\Repeater::make('benefits')
                                ->relationship('benefits') // Make sure you have a benefits relationship in your Event model
                                ->columns(3)
                                ->schema([
                                    Forms\Components\TextInput::make('benefit')
                                        ->required()
                                        ->maxLength(255)
                                        ->prefixIcon('heroicon-o-sparkles')
                                        ->prefixIconColor('luckycat')
                                        ->autofocus(),
                                    Forms\Components\TextInput::make('description')
                                        ->required()
                                        ->maxLength(255)
                                        ->prefixIcon('heroicon-o-pencil-square')
                                        ->prefixIconColor('luckycat'),
                                    Forms\Components\TextInput::make('price')
                                        ->required()
                                        ->numeric()
                                        ->prefixIcon('heroicon-o-currency-dollar')
                                        ->prefixIconColor('luckycat'),
                                ])
                                ->defaultItems(1)
                                ->createItemButtonLabel('Add Benefit')
                                ->collapsible(),
                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Event::query()
                ->where('vendor_id', auth()->user()->id))
            ->columns([
                Tables\Columns\TextColumn::make('vendor.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('thumbnail')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}