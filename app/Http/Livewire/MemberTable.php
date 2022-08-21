<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class MemberTable extends DataTableComponent
{
    protected $model = Member::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setTableWrapperAttributes([
            'default' => false,
            'class' => 'shadow border-b border-gray-200 dark:border-gray-700 sm:rounded-lg mb-6 overflow-y-auto',
        ]);
        $this->setTheadAttributes([
            'class' => 'dark:bg-gray-800',
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
            Column::make('User id', 'user_id')
                ->sortable(),
            Column::make('Name', 'name')
                ->sortable(),
            Column::make('Photo', 'photo')
                ->sortable(),
            Column::make('Address', 'address')
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable(),
            Column::make('Updated at', 'updated_at')
                ->sortable(),
        ];
    }
}
