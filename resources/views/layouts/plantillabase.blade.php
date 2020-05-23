<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
  
    <body>
        <div class="">
            
            @include("layouts.cabecera")
            @yield("cabecera")

            @include("layouts.cuerpo")
            @yield("cuerpo")

            @include("layouts.pie")
            @yield("pie")
        </div>


        <script src="{{asset('js/jquery3.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
