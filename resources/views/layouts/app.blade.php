<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!--bootstrap-->
        <!--CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{ secure_asset('css/application.css') }}" rel="stylesheet">
        <style type="text/css">
            body {
            background-color: #fafafa;
            font-size: 14px;
            color: #262626;
            }
            .main {
  max-width: 960px;
  margin: 0 auto;
  width: 90%;
  padding: 100px 75px 100px;
  display: block;
  flex: 1;
  flex-basis: auto;
  box-sizing: border-box;
}

.devise-card {
  border: none;
}

.form-wrap{
  max-width: 400px;
  width: 100%;
  margin: 50px auto;
}

.logo-img {
  background-image: url("/images/logo.png");
  background-repeat: no-repeat;
  height: 56px;
  width: 180px;
  background-size: 160px;
  background-size: 180px!important;
}

.form-control {
  border: 1px solid #dcdfe6;
  font-size: inherit;
}

.devise-link {
  text-align: center;
  margin: 16px 0;
}

#wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

footer {
  margin-top: auto;
}

@media screen and (max-width: 768px) {
  .main {
    padding: 75px 0;
  }
  .devise-card {
    background-color: #fafafa;
  }
}
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @yield('navbar')

       @yield('content')

       @yield('footer')

        </body>
      </html>
