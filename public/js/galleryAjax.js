var page = 1;
var id = 1;

window.onload = function () {
    page = 1;
    galleryAjax();
}

function galleryAjax(event = null) {
    var devType = deviceType();
    var isMobile, colsInRow, onPage;

    if (devType == "Mobile" || devType == "Tablet") {
        isMobile = true;
    } else {
        isMobile = false;
    }

    if (window.matchMedia('(max-width: 991.5px)').matches) {
        colsInRow = 6;
        onPage = 6;
    }
    if (window.matchMedia('(min-width: 992px').matches) {
        colsInRow = 4;
        onPage = 8;
    }

    if (event != null) {
        page = 1;
        id = event.id;
    }
    var str = 'id=' + id + '&page=' + page + "&onPage=" + onPage;
    $.ajax({
        type: "GET",
        url: "/getgallery",
        data: str,
        success: function (data) {
            if (event != null)
                $('#art-list-btn').text(event.innerText);
            $("#gallery").html('');
            var n = data.paintings.length;
            for (var i = 0; i < n; i = i + colsInRow) {
                var row = document.createElement('div');
                row.setAttribute('class', 'row d-flex align-items-center');
                for (j = i; j < (i + colsInRow); j++) {
                    var col = document.createElement('div');
                    if (data.paintings[j] != null) {
                        col.setAttribute('class', 'col-lg-3 col-md-4 col-sm-6 paint-col');
                        var a = document.createElement('a');
                        a.setAttribute('href', 'img/' + data.paintings[j].path);
                        a.setAttribute('data-lightbox', 'grp');
                        a.setAttribute('class', 'mod');
                        var img = document.createElement('img');
                        img.setAttribute('class', 'paint');
                        img.setAttribute('src', 'img/' + data.paintings[j].path);
                        img.setAttribute('alt', data.paintings[j].name);
                        var div = document.createElement('div');
                        if (isMobile)
                            div.setAttribute('class', 'info-mobile');
                        else
                            div.setAttribute('class', 'info');
                        var info = '<p>"' + data.paintings[j].name + '"</p><p style="float:left">' + data.paintings[j].description + '</p>' +
                            '<p style="float:right">' + data.paintings[j].year + '</p>';
                        div.innerHTML = info;
                        col.appendChild(a);
                        a.appendChild(img);
                        col.appendChild(div);
                    }
                    row.appendChild(col);
                }
                $("#gallery").append(row);
                // lightbox.option(
                //     {
                //         'fitImagesInViewport': true
                //     }
                // );
                //$(".mod").lightBox();

            }
            if (window.matchMedia('(min-width: 992px)').matches) {
                if (data.isBegin) {
                    $('#page-up').css('display', 'none');
                } else {
                    $('#page-up').css('display', 'block');
                }
                if (data.isEnd) {
                    $('#page-down').css('display', 'none');
                } else {
                    $('#page-down').css('display', 'block');
                }
            } else {
                var links = document.createElement('div');
                links.setAttribute('class', 'row');
                var col1 = document.createElement('div');
                col1.setAttribute('class', 'col');
                col1.style.textAlign = 'left';
                var col2 = document.createElement('div');
                col2.setAttribute('class', 'col');
                col2.style.textAlign = 'right';
                if (!data.isBegin) {
                    col1.innerHTML = '<a id="mobile-page-up" onclick="Pagination(this)">Назад</a>';
                }
                links.appendChild(col1);
                if (!data.isEnd) {
                    col2.innerHTML = '<a id="mobile-page-down" onclick="Pagination(this)">Вперед</a>';
                }
                links.appendChild(col2);
                document.getElementById('gallery').appendChild(links);
            }

        }
    });
}

function Pagination(event) {
    if (event.id == 'page-up' || event.id == 'mobile-page-up')
        page--;
    if (event.id == 'page-down' || event.id == 'mobile-page-down')
        page++;
    galleryAjax();
}

function deviceType() {
    var user = detect.parse(navigator.userAgent);
    var deviceType = user.device.type;
    return deviceType
}