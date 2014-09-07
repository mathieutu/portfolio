<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Nicolas Widart's Personal Portfolio. My name is Nicolas Widart, and I'm a web developper. I love the Laravel framework and new technologies." />
    <title>
    @section('title')
       Nicolas Widart
    @show
   </title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootswatch.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/prism.css') }}">
</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/prism.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54542454-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>