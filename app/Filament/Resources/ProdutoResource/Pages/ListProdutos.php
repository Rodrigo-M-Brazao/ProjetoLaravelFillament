<?php

namespace App\Filament\Resources\ProdutoResource\Pages;

use App\Filament\Resources\ProdutoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Traits\HasTableStock;

class ListProdutos extends ListRecords
{
    protected static string $resource = ProdutoResource::class;
    use HasTableStock;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
