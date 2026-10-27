<?php

/*
| Which websites may call this API from a browser.
|
| - Production: set CORS_ALLOWED_ORIGINS in .env to your frontend URL(s), comma-separated,
|   e.g. CORS_ALLOWED_ORIGINS=https://smilebook.vercel.app
| - Local development (APP_ENV=local): any http://localhost or http://127.0.0.1 port is allowed,
|   so `npm run dev` works without extra setup.
*/
return [
'paths' => ['api/*', 'sanctum/csrf-cookie', '*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => explode(',', env('CORS_ALLOWED_ORIGINS', 'https://finalsmilebook-nmgt.vercel.app')),
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
