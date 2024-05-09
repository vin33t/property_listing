<?php

namespace App\Livewire;

use App\Models\Viewing;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class ViewingsTable extends PowerGridComponent
{
    use WithExport;

    protected $listeners = ['viewingUpdated' => '$refresh'];


    public function setUp(): array
    {
//        $this->showCheckBox();
        $this->sortBy('date');
        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Viewing::query()->with('applicant');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('organiser', fn(Viewing $model) => ucfirst($model->organiser))
            ->add('date_formatted', function (Viewing $model) {
                $date = $model->date->format('d M Y h:i A');
                $datePassed = Carbon::now()->gt($model->date);
                return $date . ' <i class="fa fa-clock-four ml-2 '. ($datePassed ? 'text-red-500' : 'text-green-500') .'"></i>';
            })
            ->add('meet_at', fn(Viewing $model) => ucfirst($model->meet_at))
            ->add('confirm_with', function (Viewing $model) {
                $confirm_with = '';
                foreach ($model->confirm_with as $key => $value) {
                    $data = '<span class="font-weight-bold">' . ucfirst(str_replace('_', ' ', $key)) . '</span> : ';
                    $data .= $value ? 'Yes' : 'No';
                    $confirm_with .= $data . '<br>';
                }
                return $confirm_with;
            });
    }

    public function columns(): array
    {
        return [
            Column::make('Organiser', 'organiser')
                ->sortable()
                ->searchable(),

            Column::make('Date', 'date_formatted', 'date')
                ->sortable(),

            Column::make('Meet at', 'meet_at')
                ->sortable()
                ->searchable(),

            Column::make('Confirm with', 'confirm_with')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
//            Filter::datetimepicker('date'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->dispatch('editViewing', $rowId);
    }

    #[\Livewire\Attributes\On('complete')]
    public function complete($rowId): void
    {
        $this->dispatch('openModal', [
            'component' => 'confirm-viewing',
        ]);
        $this->dispatch('completeViewing', $rowId);
    }

    public function actions(Viewing $row): array
    {
        return [
            Button::add('edit')
                ->slot()
                ->id()
                ->class('fa fa-edit bg-blue-100 p-1 rounded-md text-blue-800 hover:text-blue-500 cursor-pointer')
                ->dispatch('edit', ['rowId' => $row->id]) ,
            Button::add('complete')
                ->slot()
                ->id()
                ->class('fa fa-check-circle bg-green-100 p-1 rounded-md text-green-800 hover:text-green-500 cursor-pointer')
                ->dispatch('complete', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
