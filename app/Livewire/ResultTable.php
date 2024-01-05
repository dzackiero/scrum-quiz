<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Result;
use Carbon\Carbon;

class ResultTable extends DataTableComponent
{
    protected $model = Result::class;

    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Delete',
        ];
    }

    public function deleteSelected()
    {
        Result::whereIn("id", $this->getSelected())->delete();
        $this->clearSelected();
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActionsEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama", "name")
                ->sortable(),
            Column::make("Posisi", "position")
                ->sortable(),
            Column::make("Nilai", "result")
                ->sortable(),
            Column::make("Tanggal", "created_at")
                ->format(
                    fn($value) => Carbon::parse($value)->format("d/m/Y H:i:s")
                )
                ->sortable(),
        ];
    }
}
