<html lang="ar" dir="rtl">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الداعم الأول</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-5.15.1-web\css\all.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<style>
  .arb {
    text-align:justify;
}
body {
font-family: 'Cairo', sans-serif;font-size: 18px;
}
</style>
<body>
    <div id="app">
      
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
        <a class="navbar-brand" href="/">
            <img src="/images/cNMuKC02_400x400.jpg" width="200" height="70" class="d-inline-block align-top" alt="">
        </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>
<div  class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">


<a class="nav-item nav-link" href="/student/giverr"> <i class='fas fa-users' style='font-size:24px'></i> الكفلاء </a>



<a class="nav-item nav-link" href="/student/stud"> <i class='fas fa-users' style='font-size:24px'></i> الطلاب</a>
<a class="nav-item nav-link" href="/show_article"> <i class='far fa-folder-open' style='font-size:24px'></i> اضافة مواد</a>
<a class="nav-item nav-link" href="/show_project"> <i class='far fa-building' style='font-size:24px'></i> اضافة مشروع</a>
<a class="nav-item nav-link" href="/question/add_q"> <i class='far fa-edit' style='font-size:24px'></i> إضافة الإسئلة</a>
<a class="nav-item nav-link" href="/question/add"> <i class='far fa-edit' style='font-size:24px'></i> عرض الإسئلة</a>
    

@auth
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class='far fa-user' style='font-size:24px'></i> المتوسطة </a>
<div class="dropdown-menu">
<a class="dropdown-item" href="/new_students/1/الجميع/1">
<i class='fas fa-users'></i> جميع المتقدمين </a>
<a class="dropdown-item" href="/new_students/1/المتوسطة/1">
<i class='far fa-user'></i> انتظار  </a>
</li>
@endauth







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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
        هنا الفوتر 
    </div>
</body>
</html>
