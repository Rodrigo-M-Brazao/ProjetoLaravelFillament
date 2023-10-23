<?php

namespace App\Traits;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;

trait HasTableStock{

    public function getTabs() : array {
        return [
            'all' => Tab::make(),
            'stocked' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('stock', '>', 0)),
            'unstocked' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->where('stock', '=', 0)),
        ];
    }
}
