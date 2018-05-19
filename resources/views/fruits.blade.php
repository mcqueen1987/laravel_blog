

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel React application</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div id="wrapper">
          <div class="container">
            <div class="row">
              <article class="col-md-12">
                <h1 class="text-center">Will Hsu's Simple Attempt To Study React </h1>
                <h2 class="text-center">Manage And Track You Or Your Team's Daily Issues</h2>
                <div id="root" class="app-container">
                <script src="{{mix('js/app.js')}}" ></script>
                </div>
              </article>
            </div>
          </div>
        </div>
    </body>
</html>