<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="https://ef4053d636c8c3c65fe5-53dd2d41f5e8f71ab7be7bde4d129736.ssl.cf5.rackcdn.com/global/favicon/favicon.ico" type="image/x-icon">

        <title>Ion Schedule</title>

        <link rel="stylesheet" type="text/css" href="{{ url('/public/css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <weekly-schedule></weekly-schedule>
        </div>
        <script>
            let scheduleDates = <?php echo html_entity_decode($scheduleDates); ?>
        </script>
        <script src="{{ url('/public/js/app.js') }}"></script>
    </body>
</html>
