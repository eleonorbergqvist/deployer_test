<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel {{ app()->version() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas data-position="left">
  
        <!-- Close button -->
        <button class="close-button" aria-label="Close menu" type="button" data-closable>
          <span aria-hidden="true">&times;</span>
        </button>
  
        <!-- Menu -->
        <ul class="vertical menu accordion-menu" data-accordion-menu style="max-width: 250px;">
          <li>
            <a href="#">Search</a>
          </li>
          <li>
            <a href="#" data-dropdown="drop1">Genre</a>
            <ul class="menu vertical nested">
              <li>
                <a href="#">Action</a>
              </li>
              <li>
                <a href="#">Drama</a>
              </li>
              <li>
                <a href="#">Adventure</a>
              </li>
              <li>
                <a href="#">Horror</a>
              </li>
              <li>
                <a href="#">Sci-fi</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Watch-List</a>
          </li>
        </ul>
      </div>
  
      <div class="off-canvas-content" data-off-canvas-content>
        <div class="large-12 cell">
          <h1>Welcome to Foundation for Sites</h1>
          <button type="button" class="button" data-toggle="offCanvas">Open Menu</button>
        </div>
      </div>
    </div>
  </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Foundation init -->
       <script>
           $(document).foundation();
       </script>

    </body>
</html>
