<!DOCTYPE html>

{{-- definisemo skeleton za vise stranica! sve sto se nalazi kod yield ce biti zamenjeno kod odredjenih stranica--}}
<html lang="en" class="html">
<head>
    <title>@yield('title')</title>
    {{-- link kopiran sa bootstrap.com--}}
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="{{asset('css/grayscale.css')}}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/check.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="body">
  @yield('navbar')

  @yield('headerSec')

<div class="content-class">
        @yield('content')
</div>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/grayscale.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>