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

.profile-wrap{
  margin:40px 0px;
}

.round-img{
  border-radius:50%;
  width: 120px;
  height: 120px;
}

.edit-profile-btn {
  margin: 15px 0 0 15px;
  font-weight: bold;
  height: 26px;
  line-height: 26px;
  padding: 0 26px;
  border-color: #dbdbdb;
  font-size: 14px;
}

.setting {
  background-image: url("/images/parts4.png");
  background-repeat: no-repeat;
  height: 24px;
  width: 24px;
  background-color: transparent;
  margin: 18px 0 0 10px;
  background-size: 22px!important;
  border: none;
  &:hover {
    cursor: pointer;
  }
}

.profile-form-wrap {
  background: #fff;
  padding: 20px;
  border: 1px solid #e6e6e6;
}

.profile-form-wrap label {
  font-weight: bold;
}

.edit-profile-wrapper {
  margin-top: 60px;
}
.post-profile-icon {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

.card-wrap {
  margin: 40px 0px;
}

.no-text-decoration:hover {
  text-decoration: none;
}

.black-color {
  color: #262626;
}

.parts {
  margin: 12px 0;
}

.love {
  background-image: url("/images/parts5.png");
  background-repeat: no-repeat;
  height: 36px;
  width: 36px;
  background-size: 36px !important;
}

.comment {
  margin-left: 8px;
  background-image: url("/images/parts6.png");
  background-repeat: no-repeat;
  height: 36px;
  width: 36px;
  background-size: 40px !important;
}

.post-time {
  margin:0;
  color:#999;
  font-size:10px;
}

.post-sub-text {
  text-decoration: none;
  color: #262626;
}
.delete-post-icon {
  background-image: url("/images/parts9.png");
  background-repeat: no-repeat;
  width: 20px;
  height: 20px;
  background-size: 20px !important;
  color: #262626;
  font-size: 20px;
}
.delete-post-icon {
  background-image: url("/images/parts9.png");
  background-repeat: no-repeat;
  width: 20px;
  height: 20px;
  background-size: 20px !important;
  color: #262626;
  font-size: 20px;
}
// ==========ここから追加する==========
.loved {
  background-image: url("/images/parts7.png");
  background-repeat: no-repeat;
  height: 36px;
  width: 36px;
  background-size: 36px !important;
}

.hide-text {
  display: block;
  overflow: hidden;
  text-indent: 110%;
  white-space: nowrap;
}
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        @yield('navbar')


       <div class="container">
        @yield('content')
      </div>



       @yield('footer')

        </body>
      </html>
