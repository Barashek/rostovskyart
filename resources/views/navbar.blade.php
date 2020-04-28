<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/detected.js"></script>
</head>

<body>
    <!-- -------- Navbar --------- -->
    <div class="row d-flex align-items-center justify-content-around" id="navbar">
        <div class="col-1"></div>
        <div class="col-10" style="max-width: 1400px">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" style="text-align: left">
                    <a href="main">
                        <img src="img/logo.png" id="nav-logo">
                    </a>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-6 col-6" style="text-align: right">
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
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="color:#8a2908">
                            Меню
                            {{-- <img style="height: 40px; width: 40px" src="img/menu.png"> --}}
                        </button>
                        <div class="dropdown-menu" role="menu" id="art-list">
                            <li><a class="dropdown-item nav-link" role="presentation" href="about">О художниках</a></li>
                            <li><a class="dropdown-item nav-link" role="presentation" href="biography">Биографии</a></li>
                            <li><a class="dropdown-item nav-link" role="presentation" href="gallery">Галерея</a></li>
                            <li><a class="dropdown-item nav-link" role="presentation" href="expositions">Выставки</a></li>
                            <li><a class="dropdown-item nav-link" role="presentation" href="contacts">Контакты</a></li>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-1"></div>
    </div>
    <!-- -------- ------- --------- -->

    @yield('container')

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

</body>

</html>