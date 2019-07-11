<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- -------- Navbar --------- -->
    <div class="row d-flex align-items-center" id="navbar">
        <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-lg-2 col-md-2 col-sm-5 col-5" style="text-align: left">
            <a href="main">
                <img src="img/лого.png" id="nav-logo">
            </a>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-5 col-5" style="text-align: right">
            <div id="big-menu">
                <div class="d-flex justify-content-around">
                    <a href="about" class="nav-link">О художниках</a>
                    <a href="biography" class="nav-link">Биографии</a>
                    <a href="gallery" class="nav-link">Галерея</a>
                    <a href="expositions" class="nav-link">Выставки</a>
                    <a href="contacts" class="nav-link">Контакты</a>
                </div>
            </div>
            <div id="small-menu" class="dropdown">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">
                    <img style="height: 40px; width: 40px" src="img/menu.png">
                </button>
                <div class="dropdown-menu" role="menu" id="art-list">
                    <a class="dropdown-item nav-link" role="presentation" href="about">О художниках</a>
                    <a class="dropdown-item nav-link" role="presentation" href="biography">Биографии</a>
                    <a class="dropdown-item nav-link" role="presentation" href="gallery">Галерея</a>
                    <a class="dropdown-item nav-link" role="presentation" href="expositions">Выставки</a>
                    <a class="dropdown-item nav-link" role="presentation" href="contacts">Контакты</a>
                </div>
            </div>

        </div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
    <!-- -------- ------- --------- -->

    @yield('container')

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>