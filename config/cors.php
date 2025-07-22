<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:5173',
        'http://localhost:3000',
        'https://learn-in-path-frontend.vercel.app',
        'https://*.vercel.app', // untuk preview deployments
    ],

    'allowed_origins_patterns' => [
        'https://*\.vercel\.app$', // pattern untuk semua subdomain vercel
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];
