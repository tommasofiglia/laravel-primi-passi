<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Primo esercizio Laravel</title>

        <!-- Styles -->
        <style>

          *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
          }
          nav{
            background-color: grey;
            width: 100%;
            height: 120px;
          }
          .container{
            max-width: 950px;
            margin: auto;
          }
          .d-flex{
            display: flex;
            justify-content: space-around;
            align-items: center;
          }
          li{
            list-style: none;
          }
          a{
            color: inherit;
            text-decoration: none;
          }
          nav ul{
            height: 120px;
          }
          nav a{
            font-size: 20px;
            text-transform: uppercase;
            color: white;
            font-weight: 500;
          }

        </style>
    </head>
    <body>
      @include('partials.navbar')
