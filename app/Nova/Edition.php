<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;

final class Edition extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Edition::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'year';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'year',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            HasMany::make('Timeslots'),

            HasMany::make('Speakers'),

            Text::make('Year')
                ->creationRules(Rule::unique('editions'))
                // ->updateRules(Rule::unique('editions')->ignore($this->id))
                ->required(),

            Text::make('Hashtag')
                ->creationRules(Rule::unique('editions'))
                // ->updateRules(Rule::unique('editions')->ignore($this->id))
                ->help('Without the "#".')
                ->required(),

            DateTime::make('Starts At')
                ->required(),

            DateTime::make('Ends At')
                ->required(),

            Boolean::make('Publish Schedule'),

            Text::make('Tickets Url')
                ->rules('nullable', 'url')
                ->help('Ticket buttons will be hidden if you leave this empty.')
                ->hideFromIndex(),

            Text::make('Tickets Label')
                ->hideFromIndex(),

            Text::make('Sale Ends Description')
                ->hideFromIndex(),

            DateTime::make('Sale Ends At')
                ->help('Sales countdown will be hidden if you leave this empty.')
                ->nullable(),

            Text::make('Page Title')
                ->hideFromIndex(),

            Text::make('Meta Description')
                ->hideFromIndex(),

            Image::make('Meta Image')
                ->disk('public')
                ->help('Preferred resolution: 500 x 300')
                ->hideFromIndex(),

            Text::make('', function () {
                if (! $this->exists) {
                    return '';
                }

                return '<div class="text-right"><a href="' . route('home', $this->year) . '" class="cursor-pointer text-70 hover:text-primary" target="_blank"><svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></a></div>';
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
