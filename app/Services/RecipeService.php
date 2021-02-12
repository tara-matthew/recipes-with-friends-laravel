<?php

namespace App\Services;

use App\Models\Recipe;
use Illuminate\Support\Facades\Cache;
use App\Http\Helpers\Sort;

class RecipeService
{
    protected $sortHelper;

    public function __construct(Sort $sortHelper)
    {
        $this->sortHelper = $sortHelper;
    }

    /**
     * Return all recipes with sorting options
     * @return mixed
     */
    public function retrieve()
    {
        $orderBy = 'created_at';
        $orderDirection = 'desc';

        if (count(request()->all())) {
            $request = request()->all();
            $sortParameters = $this->sortHelper->calculateSortParameters($request);
            $orderBy = $sortParameters[0];
            $orderDirection = $sortParameters[1];
        }

        $cacheKey = 'recipes-' . $orderBy . '-' . $orderDirection;

        return Cache::remember($cacheKey, 300, function() use ($orderBy, $orderDirection) {
            return Recipe::orderBy($orderBy, $orderDirection)->get();
        });

    }
}
