<?php

return [
    'api_key' => env('PIRSCH_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Development Mode
    |--------------------------------------------------------------------------
    |
    | When set to true, requests from localhost and development environments
    | will not be tracked.
    |
    */
    'exclude_development' => env('PIRSCH_EXCLUDE_DEVELOPMENT', true),
];
