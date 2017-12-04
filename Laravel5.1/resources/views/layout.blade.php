<html>
<head>
    <title>Laravel</title>
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<header>
    <h1> Welcome to Laravel Notes </h2>
</header>
<body>
    <div class="content">
        <!-- This line is saying insert content into here -->
        @yield('content') 
    </div>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
