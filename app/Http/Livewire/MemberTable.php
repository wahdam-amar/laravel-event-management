<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class MemberTable extends DataTableComponent
{
    protected $model = Member::class;

    public $columnSearch = [
        'name' => null,
        'email' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setSearchEnabled();

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
            Column::make("Id", "id")
                ->searchable()
                ->sortable(),
            Column::make("User id", "user.email")
                ->sortable(),
            Column::make("Name", "name"),
            Column::make("Address", "address"),
        ];
    }
}
