<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Shopify App settings
    |--------------------------------------------------------------------------
    |
    | API Key and Secret for accessing Shopify's Admin API. To generate these
    | credentials, create a Shopify Partner's account as well as an application
    |
    */

    'api_key' => env("SHOPIFY_API_KEY", ''),
    'api_secret' => env("SHOPIFY_API_SECRET", ''),
    'embedded' => true,
    'force_redirect' => true,

   /*
   |--------------------------------------------------------------------------
   | Redirect URI
   |--------------------------------------------------------------------------
   |
   | The URL used for authentication. Users are redirected here after authorizing
   | your application
   |
   */

   'redirect_uri' => env("SHOPIFY_REDIRECT_URI", '/shopify/auth'),

   /*
   |--------------------------------------------------------------------------
   |    Scopes
   |--------------------------------------------------------------------------
   |
   | Scopes required for your application, comma-separated
   |
   */

   'scopes' => [
     'read_products'
   ],

   /*
   |--------------------------------------------------------------------------
   |    Webhooks
   |--------------------------------------------------------------------------
   |
   | List of webhook topics this app ought to be listening t
   |
   */

  'webhooks' => [
      'shop/update',
      'app/uninstalled'
  ]
];
