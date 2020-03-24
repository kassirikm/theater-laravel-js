/**
 * Created by PhpStorm.
 * User: McFly
 * Date: 3/23/2020
 * Time: 9:32 AM
 */

/* Main template file
   All the other view files will extend this layout.blade.php file. */

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laravel 6 CRUD Example</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <div class="container">
      @yield('content')
      </div>
      <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>


