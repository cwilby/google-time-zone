<?php

return [

    /*
     * The api key used when sending timezone requests to Google.
     */
    'key' => env('GOOGLE_MAPS_TIMEZONE_API_KEY', ''),

    /*
     * The language param used to set response translations for textual data.
     *
     * More info: https://developers.google.com/maps/faq#languagesupport
     */
    'language' => '',

    /*
     * The cache configuration to use for caching timezone responses.
     */
    'cache' => [
        /*
         * The store to use for caching.
         * 
         * The value "null" will use the default cache store specified in the /config/cache.php file.
         */
        'store' => null,

        /*
         * Specify the cache duration in seconds.  The default approximates a
         * "forever" cache, but there are certain issues with Laravel's forever
         * caching methods that prevent us from using them in this project. 
         */
        'duration' => 9999999,
    ]
];
