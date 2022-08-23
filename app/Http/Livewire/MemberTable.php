<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class MemberTable extends DataTableComponent
{
    public function builder(): Builder
    {
        return Member::query()->with('user');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setSearchEnabled();

        $this->setTableWrapperAttributes([
            'default' => false,
            'class' => 'shadow border-b border-gray-200 dark:border-gray-700 rounded-none mb-6 overflow-y-auto',
          ]);

        $this->setTheadAttributes([
            'class' => 'dark:bg-gray-800',
          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable()
                ->sortable(),
            Column::make("User id", "user.email")
                ->sortable(),
            Column::make("Name", "name")
            ->searchable(),
            Column::make("Address", "address"),
        ];
    }
}
