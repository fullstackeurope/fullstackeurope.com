<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

final class Workshop extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Workshop::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'subtitle',
    ];

    /**
     * The number of resources to show per page via relationships.
     *
     * @var int
     */
    public static $perPageViaRelationship = 100;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        $speakers = \App\Models\Speaker::query()
            ->where('edition_id', $request->get('edition'))
            ->pluck('id');

        $slugRule = Rule::unique('workshops')->whereIn('speaker_id', $speakers->toArray());

        return [
            ID::make()->sortable(),

            BelongsTo::make('Speaker'),

            Text::make('Title'),

            Text::make('Slug')
                ->required()
                ->creationRules('alpha_dash', $slugRule)
                ->updateRules('alpha_dash', $slugRule->ignoreModel($this->resource))
                ->help('If you adjust this, previous links to this workshop page will not work anymore.')
                ->hideFromIndex(),

            Text::make('Subtitle'),
            Trix::make('Snippet')->hideFromIndex(),
            Number::make('Duration'),
            Trix::make('Schedule')->hideFromIndex(),
            Trix::make('Description')->hideFromIndex(),
            Boolean::make('sold_out'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
