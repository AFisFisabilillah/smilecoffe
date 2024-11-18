<?php

namespace App\Filament\Resources;
use Filament\Forms;
use Filament\Tables;
use App\Models\Products;
use Filament\Forms\Form;
use App\Models\Categories;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductsResource\RelationManagers;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")
                ->required()
                ->placeholder("Nama Product"),
                
                Select::make("id_category")
                        ->label("Category")
                        ->options(Categories::all()->pluck("name", 'id')),
                TextInput::make('price')
                        ->label('Harga')
                        ->numeric()
                        ->required()
                        ->placeholder('Harga Product')
                       ,
                TextInput::make('quantity')
                        ->numeric()
                        ->placeholder('Jumlah Produk'),
                TextArea::make("description")->autosize()->required(),
                
            ]);

            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name")
                        ->label("Products")
                        ->description(fn(Products $products):string => Str::limit($products->description, 50, '...') ),
                TextColumn::make('category.name')->label('Category'),
                TextColumn::make('quantity')->label('Jumlah'),
                TextColumn::make('price') ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
