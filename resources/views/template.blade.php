<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/Navigation-Clean.css"> -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="row d-flex align-items-center" id="navbar">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
            <img src="img/лого.png" id="nav-logo">
        </div>
        <div class="col-lg-8 d-flex justify-content-around">
            <a href="about" class="nav-link">О художниках</a>
            <a href="#" class="nav-link">Биографии</a>
            <a href="#" class="nav-link">Галерея</a>
            <a href="#" class="nav-link">Выставки</a>
            <a href="#" class="nav-link">Контакты</a>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" id="content">
            @yield("content")
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row" id="footer"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>