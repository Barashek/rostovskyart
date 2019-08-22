var page = 1;
var id = 1;

var animationSpeed = 300;
var deviceType;

var colsOnPage, colsInRow;

function deviceType() {
    var user = detect.parse(navigator.userAgent);
    var deviceType = user.device.type;
    return deviceType;
}


function galleryAjax(event = null) {
    if (deviceType == 'Mobile' || deviceType == 'Tablet') {
        colsOnPage = 6;
        if (deviceType == 'Mobile')
            colsInRow = 2;
        else
            colsInRow = 3;
    } else {
        colsOnPage = 8;
        colsInRow = 4;
    }

    if (event != null) {
        page = 1;
        id = event.id;
    }

    var str = 'id=' + id + '&page=' + page + "&onPage=" + colsOnPage;

    $.ajax({
        type: "GET",
        url: "/getgallery",
        data: str,

        success: function(data) {
            if (event != null)
                $('#art-list-btn').text(event.innerText);

            createPaints(data);
        }
    });
}

window.onload = function() {
    deviceType = deviceType();
    galleryAjax();
}

function Pagination(event) {
    $('#' + event.id).fadeOut(animationSpeed, function() {
        if (event.id == 'page-up' || event.id == 'mobile-page-up')
            page--;
        if (event.id == 'page-down' || event.id == 'mobile-page-down')
            page++;
        galleryAjax();
    });
}

function createPaints(data) {
    $('#gallery').html('');
    var nPaintings = data.paintings.length;

    for (var i = 0; i < nPaintings; i = i + colsInRow) {
        var row = document.createElement('div');
        row.setAttribute('class', 'row d-flex align-items-center');
        for (var j = i; j < i + colsInRow; j++) {
            var col = document.createElement('div');
            if (data.paintings[j] != null) {
                if (deviceType == 'Mobile')
                    col.setAttribute('class', 'col-6 paint-col');
                else if (deviceType == 'Tablet')
                    col.setAttribute('class', 'col-4 paint-col');
                else
                    col.setAttribute('class', 'col-3 paint-col');

                var a = document.createElement('a');
                a.setAttribute('href', 'img/' + data.paintings[j].path);
                a.setAttribute('data-lightbox', 'grp');
                a.setAttribute('data-title', '"' + data.paintings[j].name + '" ' + data.paintings[j].description + ", " + data.paintings[j].year);
                a.setAttribute('class', 'mod');
                var img = document.createElement('img');
                img.setAttribute('class', 'paint');
                img.setAttribute('src', 'img/' + data.paintings[j].path);
                img.setAttribute('alt', data.paintings[j].name);
                var div = document.createElement('div');
                if (deviceType == 'Mobile' || deviceType == 'Tablet')
                    div.setAttribute('class', 'info-mobile');
                else
                    div.setAttribute('class', 'info');
                var info = '<p>"' + data.paintings[j].name + '"</p><p>' + data.paintings[j].description + ', ' +
                    data.paintings[j].size + ' см, ' + data.paintings[j].year + '</p>';
                div.innerHTML = info;
                col.appendChild(a);
                a.appendChild(img);
                col.appendChild(div);
            }
            row.appendChild(col);
        }
        $('#gallery').append(row);
    }
    createUpDownArrows(data);
}

function createUpDownArrows(data) {
    if (deviceType == 'Desktop') {
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
        $('#page-down').css('display', 'none');
        $('#page-up').css('display', 'none');
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