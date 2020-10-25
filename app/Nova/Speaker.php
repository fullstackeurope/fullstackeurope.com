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
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

final class Speaker extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Speaker::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
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
        $slugRule = Rule::unique('speakers')
            ->where('edition_id', $request->get('edition'));

        return [
            ID::make()->sortable(),

            BelongsTo::make('Edition'),

            BelongsTo::make('Timeslot')
                ->searchable()
                ->withSubtitles()
                ->nullable(),

            Avatar::make('Photo')
                ->disk('public')
                ->help('Preferred resolution: 500 x 500'),

            Text::make('Name')
                ->required(),

            Text::make('Slug')
                ->required()
                ->creationRules('alpha_dash', $slugRule)
                ->updateRules('alpha_dash', $slugRule->ignoreModel($this->resource))
                ->help('If you adjust this, previous links to this speaker page will not work anymore.')
                ->hideFromIndex(),

            Text::make('Title')
                ->hideFromIndex(),

            Markdown::make('Bio')
                ->hideFromIndex(),

            Text::make('Twitter')
                ->help('Without the "@".')
                ->hideFromIndex(),

            Text::make('Website')
                ->rules('nullable', 'url')
                ->hideFromIndex(),

            Text::make('Talk'),

            Markdown::make('Abstract')
                ->hideFromIndex(),

            Text::make('Workshop'),

            Markdown::make('Workshop Description')
                ->hideFromIndex(),

            Boolean::make('Workshop Sold Out')
                ->hideFromIndex(),

            Text::make('', function () {
                if (! $this->exists) {
                    return '';
                }

                return '<div class="text-right"><a href="'.route('speaker', [$this->edition, $this]).'" class="cursor-pointer text-70 hover:text-primary" target="_blank"><svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a></div>';
            })->asHtml(),
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
