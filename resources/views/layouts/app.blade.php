<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <title>LiveWire</title>
    <livewire:styles/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <style type="text/css">

        .navbar-nav{
          padding-left:900px;
          
        }

        .navbar-nav > li{
          margin-left:30px;
        }

    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">HOME</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-right: 400px;">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item px-12">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          
        </ul>
      </div>
    </nav>


    {{ $slot }}

   

     
    


    <livewire:scripts />
</body>
</html>