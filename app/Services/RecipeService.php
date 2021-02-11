<?php

namespace App\Services;

use App\Models\Recipe;

class RecipeService
{
    public function retrieve()
    {
        $orderBy = 'created_at';
        $orderDirection = 'desc';

        if (request()->get('sort')) {
            $orderBy = request()->get('sort');
        }
        if (request()->get('direction')) {
            $orderDirection = request()->get('direction');
        }

        return Recipe::orderBy($orderBy, $orderDirection)->get();
    }
}
