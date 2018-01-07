<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel React application</title>
        <link rel="stylesheet" href="https://sdks.shopifycdn.com/polaris/1.9.1/polaris.min.css" />
    </head>
    <body>
        <script type='text/javascript'>
            var _config = {
                apiKey: "{{ config('shopify.api_key')}}"
            }
            console.log(_config);
        </script>
        <div id="root"></div>
        <script src="/js/app.js" ></script>
    </body>
</html>
