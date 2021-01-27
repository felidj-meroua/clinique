<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">



        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

<br>
                    <h5> 
                    <a href="{{ route('login') }}"> <b> <font color="black"> Login </font></b> </a>
                    
                        @if (Route::has('register'))
                         
                    
                    <a href="{{ route('register') }}"> <b> <font color="black"> Register </font></b> </a> 

                     </h5>
                     
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              
                <div class="title m-b-md">
                 <h2 align="center">    <img src="/images/llogin.jpeg">  </h2>
                    
                   
                        
                   

                </body>
                </div>
            
               <div>
                <br>
               <h3 align="center"> <b>   Adresse: cité imama   _  Numéro de téléphone: 043303103 </b> </h3>
            </div>
               <!-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
