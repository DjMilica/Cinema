<!DOCTYPE html>

{{-- definisemo skeleton za vise stranica! sve sto se nalazi kod yield ce biti zamenjeno kod odredjenih stranica--}}
<html lang="en">
<head>
    <title>@yield('title')</title>
    {{-- link kopiran sa bootstrap.com--}}
    @yield('stylesheets')
    <link rel="stylesheet" href=" {{ asset('css/check.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>