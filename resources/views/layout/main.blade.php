<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset ('css/bootstrap.min.css')}}">
</head>
<body class="bg-warning-70">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <a class="navbar-brand text-dark" href="">
                <img src="{{asset ('images/logo1.png')}}" width="50" height="50" class="ms-2">
                <strong>PT</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-aria-expanded="false" aria-label="Toggle navigationbar">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link actiavte text-dark fs-5" aria-current="page" href="/Home"><strong>HOME</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="div container">
        <div class="row m-4">
            <div class="col">
              @yield  
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>