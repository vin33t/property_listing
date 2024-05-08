<?php

namespace App\Livewire;

use App\Models\Applicant;
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

final class ApplicantTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

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
        return Applicant::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name',function (Applicant $applicant) {
                return '<a href="' . route('applicants.profile', $applicant) . '">' . $applicant->name . '</a>';
            })
            ->add('email')
            ->add('budget')
            ->add('looking_for', function (Applicant $applicant) {
                $looking_for = '';
                foreach ($applicant->looking_for as $key => $value) {
                    $data = '<span class="font-weight-bold">' . ucfirst(str_replace('_', ' ', $key)) . '</span> : ';
                    foreach ($value as $key2 => $v) {
                        $data .= $v . ($key2 !== array_key_last($value) ? ', ' : ' ');
                    }
                    $looking_for .= $data . '<br>';
                }
                return nl2br($looking_for);
            })
            ->add('matching_properties', function (Applicant $applicant) {
                $matching_properties = '';
                foreach ($applicant->recommendedProperties() as $key => $property) {
                    $matching_properties .= '<li style="display: flex; justify-content: space-between; margin-bottom: 5px; gap: 10px">
                                                                                        <a style="text-decoration: none; color: black; font-style: italic" href="' . route('propertyDetails', $property) . '">' . $key + 1 . ') ' . $property->title . '</a>
                                                                                        <form action="' . route('notification.notify', ['applicant', 'applicant', $property->id]) . '" method="POST">'.
                                                                                            csrf_field() .
                                                                                            '<input type="text" name="property_id" style="display: none" value="' . $property->id . '">'.
                                                                                            '<input type="text" name="application_id" style="display: none" value="' . $applicant->id . '">'.
                                                                                            '<button type="submit" class="mdc-button mdc-button--raised filled-button--success">Send Offer</button>'.
                                                                                        '</form>'.
                                                                                    '</li>';

                }
                return nl2br($matching_properties);
            })
            ->add('area');
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

            Column::make('Budget', 'budget'),
            Column::make('Looking for', 'looking_for')
                ->sortable()
                ->searchable(),

            Column::make('Matching Properties', 'matching_properties'),

            Column::make('Area', 'area')
                ->sortable()
                ->searchable(),


            Column::make('Notes', 'notes')
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
    public function edit($rowId): \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Foundation\Application
    {
        return redirect(route('applicants.form', $rowId));
//        $this->js('alert(' . $rowId . ')');
    }

    public function actions(Applicant $row): array
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
