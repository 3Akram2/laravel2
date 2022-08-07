<html>
 <head>
 <title>App Name - @yield('title')</title>
 <style>
        body {
  padding-bottom: 20px;
}

.navbar {
  margin-bottom: 20px;
}
a{
    color: black;
text-decoration: none;
}

    </style>
 <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>
 <body>


 @section('navbar')
 @include('includes.navbar') 
 @show
 
 <div class="container">
 @yield('content')
 </div>
 </body>
</html>
