<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Laravel-Vite Template</title>

      <!-- Link inclusione assets con la direttiva Vite -->
      @vite('resources/js/app.js')

   </head>

   <body>

      <main>
         @yield('content')
      </main>

   </body>

</html>
