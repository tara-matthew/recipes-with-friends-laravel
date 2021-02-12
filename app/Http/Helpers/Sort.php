<?php

namespace App\Http\Helpers;

class Sort {

    const SORT_KEYS = ['sort', 'direction'];

    /**
     * TODO Make into a more flexible method
     * Calculate the sort parameters from a request query string
     * @param $request
     * @return array
     */
    public function calculateSortParameters($request): array
    {
        $keys = self::SORT_KEYS;

        $parameters = [];

        foreach ($keys as $key => $index) {
            if (isset($request[$keys[$key]])) {
                $parameters[] = $request[$keys[$key]];
            }
        }

        return $parameters;
    }
}
