<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Classroom Scheduling</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<!--jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    /* button */
    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: transparent;
        border: none;
        color: black;
        text-align: center;
        font-size: 20px;
        width: 200px;
        cursor: pointer;
        margin: 5px;
    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
    }

    .button:hover span {
        padding-right: 25px;
        background-color: #4CAF50;
        color: #FFFFFF;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
    /* button */

    /* gallery grid */
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }
        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    /* gallery grid */

    /* nav bar */
        nav ul li a,
        nav ul li a:after,
        nav ul li a:before {
          transition: all .5s;
        }
        nav ul li a:hover {
          color: #555;
        }

        /* SHIFT */
        nav.shift ul li a {
          position:relative;
          z-index: 1;
        }
        nav.shift ul li a:hover {
          color: #FFFFFF !important;
        }
        nav.shift ul li a:after {
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          margin: auto;
          width: 100%;
          height: 1px;
          content: '.';
          color: transparent;
          background: #4CAF50;
          visibility: none;
          opacity: 0;
          z-index: -1;
        }
        nav.shift ul li a:hover:after {
          opacity: 1;
          visibility: visible;
          height: 100%;
        }

        /* Keyframes */
        @-webkit-keyframes fill {
          0% {
            width: 0%;
            height: 1px;
          }
          50% {
            width: 100%;
            height: 1px;
          }
          100% {
            width: 100%;
            height: 100%;
            background: #333;
          }
        }

        /* Keyframes */
        @-webkit-keyframes circle {
          0% {
            width: 1px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            height: 1px;
            z-index: -1;
            background: #eee;
            border-radius: 100%;
          }
          100% {
            background: #aaa;
            height: 5000%;
            width: 5000%;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 0;
          }
        }
    /* nav bar */

    /* table */
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: middle;
        }

        #customers td, #customers th {
            border: 2px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers td:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: middle;
            background-color: #4CAF50;
            color: white;
        }

        #square{
            height:100px;
        }
    /* table */

    /* pop up */
        * {box-sizing: border-box;}
        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
          background-color: #555;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          opacity: 0.8;
          width: 280px;
        }

        /* The popup form - hidden by default */
        .form-popup {
          background-color: #c1c1c1;
          display: none;
          position: fixed;
          border: 8px solid #f1f1f1;
        }

        /* Add styles to the form container */
        .form-container {
          max-width: 500px;
          background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
          background-color: #4CAF50;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
    /* pop up */
        .navbar{
            background: #e1e1e1;
            
        }

    /*add new class in professor input*/
        .add-new-class:hover{
          cursor: pointer;
          background-color: #e1e1e1;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel shift">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel1') }}-->
                    Classroom Scheduling
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                        <li><a class="nav-link" href="http://localhost:8000/home">Home</a></li>
                        <li><a class="nav-link" href="#news">News</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <li><a class="nav-link" href="#about">About</a></li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
