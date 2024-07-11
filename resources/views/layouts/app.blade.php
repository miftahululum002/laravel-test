<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">

    <title>Work Transaction</title>
    <link rel="stylesheet" href="{{asset('assets')}}/datatables/css/dataTables.bootstrap4.css"/>
</head>
<body>
<div class="container">

@yield('content')
</div>

<script src="{{asset('assets')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/datatables/js/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/datatables/js/dataTables.bootstrap4.js"></script>
@yield('scripts')
</body>
</html>