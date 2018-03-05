<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database storing
    |--------------------------------------------------------------------------
    |
    | Decide wether the requested doamins & email addresses should be
    | stored to the database.
    |
    */
   
    // Database storage enabled
    'store_checks' => false,

    // Database table name
    'checks_table' => 'validator_pizza',

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | It is recommended to cache requests due to API rate limitations.
    | 
    */

    // Cache enabled
    'cache_checks' => true,

    // Duration in minutes to keep the query in cache
    'cache_duration' => 30,

    /*
    |--------------------------------------------------------------------------
    | Advanced
    |--------------------------------------------------------------------------
    |
    | Advanced configuration
    | 
    */
   
    // Determine which decision should be given if the rate limit is exceeded [allow / deny]
    'decision_rate_limit' => 'allow',
];
