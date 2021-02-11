<?php

namespace App\Services;

use App\Models\Recipe;

class RecipeService
{
    /**
     * Return all recipes with sorting options
     * @return mixed
     */
    public function retrieve()
    {
        $orderBy = 'created_at';
        $orderDirection = 'desc';

        //TODO This could probably go into a helper method if it's something I'll be doing in other parts of the app
        if (count(request()->all())) {
            if (request()->get('sort')) {
                $orderBy = request()->get('sort');
            }
            if (request()->get('direction')) {
                $orderDirection = request()->get('direction');
            }
        }

        return Recipe::orderBy($orderBy, $orderDirection)->get();
    }
}
