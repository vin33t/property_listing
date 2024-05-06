<?php

namespace App\Livewire;

use App\Models\Landlord;
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

final class LandlordTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {


        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
                ->showToggleColumns()
                ->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Landlord::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('address')
            ->add('mobile')
            ->add('commission_agreed')
            ->add('notes')
            ->add('attachments')
            ->add('properties', function (Landlord $landlord) {
                $properties = $landlord->properties->map(function ($property) {
                    return  '<span class="font-bold">' . $property->title .  '</span> - <span class="normal italic">'.  ($property->accounts->count() ? '<span class="font-bold text-red-700">'. ucfirst($property->accounts->first()->type). 'ed On ' .  $property->accounts->first()->transaction_date->format('d-m-Y'). '</span>':' <span class="normal font-semibold text-green-600">Available</span>'.   '</span>');
                })->implode('<br> <br>');
                return nl2br($properties);
            });
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Address', 'address')
                ->sortable()
                ->searchable(),

            Column::make('Mobile', 'mobile')
                ->sortable()
                ->searchable(),

            Column::make('Commission agreed', 'commission_agreed')
                ->sortable()
                ->searchable(),

            Column::make('Notes', 'notes')
                ->sortable()
                ->searchable(),

            Column::make('Attachments', 'attachments')
                ->sortable()
                ->searchable(),

            Column::make('Properties', 'properties')
                ->sortable()
                ->searchable(),


            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->redirect(route('landlords.form', $rowId));
//        $this->js('alert('.$rowId.')');
    }

    public function actions(Landlord $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('mdc-button mdc-button--raised filled-button--info')
                ->dispatch('edit', ['rowId' => $row->id])
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
