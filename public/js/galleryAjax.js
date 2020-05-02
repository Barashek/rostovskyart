let page = 1;
let id = 1;

let animationSpeed = 250;

let colsOnPage, colsInRow;


function deviceType() {
    let user = detect.parse(navigator.userAgent);
    return user.device.type;
}


function galleryAjax(event = null) {
    colsOnPage = 6;
    if (isMobile()) {
        colsInRow = 2;
    } else if(isTablet()) {
        colsInRow = 3;
    } else {
        colsOnPage = 8;
        colsInRow = 4;
    }

    if (event != null) {
        page = 1;
        id = event.id;
    }

    let paramsString = 'id=' + id + '&page=' + page + "&onPage=" + colsOnPage;
    $.ajax({
        type: "GET",
        url: "/getgallery",
        data: paramsString,

        success: function(data) {
            if (event != null)
                $('#art-list-btn').text(event.innerText);

            $("#gallery").fadeOut(animationSpeed, function() {
                createPaints(data);
            });
        }
    });
}

window.onload = function() {
    galleryAjax();
};

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
    let $gallery = $('#gallery');
    $gallery.html('');
    let paintingsCount = data.paintings.length;

    for (let i = 0; i < paintingsCount; i = i + colsInRow) {
        let row = createRow();
        for (let j = i; j < i + colsInRow; j++) {
            let col = fillContentToCol(data.paintings[j]);
            row.appendChild(col);
        }
        $gallery.append(row);
    }
    $gallery.fadeIn(animationSpeed, function() {
        createUpDownArrows(data);
    });
}

function isTablet() {
    if(deviceType() == 'Tablet')
        return true;
    return false;
}

function isMobile() {
    if(deviceType() == 'Mobile')
        return true;
    return false;
}

function isDesktop() {
    if(deviceType() == 'Desktop')
        return true;
    return false;
}

function fillContentToCol(painting) {
    let col = document.createElement('div');
    if (painting != null) {
        if (isMobile())
            col.setAttribute('class', 'col-6 paint-col');
        else if (isTablet())
            col.setAttribute('class', 'col-4 paint-col');
        else
            col.setAttribute('class', 'col-3 paint-col');
        let a = createLinkTag(painting);
        let img = createImgTag(painting);
        let div = createPaintingsDiv();
        div.innerHTML = createPaintingDescription(painting);
        col.appendChild(a);
        a.appendChild(img);
        col.appendChild(div);
    }
    return col;
}

function createRow() {
    let row = document.createElement('div');
    row.setAttribute('class', 'row d-flex align-items-center');
    return row;
}

function createPaintingDescription(painting) {
    return '<p>"' + painting.name + '"</p><p>' + painting.description + ', ' +
        painting.size + ' см, ' + painting.year + '</p>';
}

function createLinkTag(painting) {
    let a = document.createElement('a');
    a.setAttribute('href', 'img/' + painting.artist_id + "/" + painting.path);
    a.setAttribute('data-lightbox', 'grp');
    a.setAttribute('data-title', '"' + painting.name + '" ' + painting.description + ", " +
        painting.year);
    a.setAttribute('class', 'mod');
    return a;
}

function createImgTag(painting) {
    let img = document.createElement('img');
    img.setAttribute('class', 'paint');
    img.setAttribute('src', 'img/' + painting.artist_id + "/min/" + painting.path);
    img.setAttribute('alt', painting.name);
    img.setAttribute('data-proportion-h','1');
    return img;
}

function createPaintingsDiv() {
    let div = document.createElement('div');
    if (isMobile() || isTablet())
        div.setAttribute('class', 'info-mobile');
    else
        div.setAttribute('class', 'info');
    return div;
}

function createMobileCol(side) {
    let col = document.createElement('div');
    col.setAttribute('class', 'col');
    col.style.textAlign = side;
    return col;
}

function createUpDownArrows(data) {
    let $pageUp = $('#page-up');
    let $pageDown = $('#page-down');


    if (isDesktop()) {
        if (data.isBegin) {
            $pageUp.css('display', 'none');
        } else {
            $pageUp.css('display', 'block');
        }
        if (data.isEnd) {
            $pageDown.css('display', 'none');
        } else {
            $pageDown.css('display', 'block');
        }
    } else {
        $pageDown.css('display', 'none');
        $pageUp.css('display', 'none');
        let links = document.createElement('div');
        links.setAttribute('class', 'row');
        let col1 = createMobileCol('left');
        let col2 = createMobileCol('right');
        if (!data.isBegin) {
            col1.innerHTML = '<a id="mobile-page-up" onclick="Pagination(this)">Назад</a>';
        }
        links.appendChild(col1);
        if (!data.isEnd) {
            col2.innerHTML = '<a id="mobile-page-down" onclick="Pagination(this)">Вперед</a>';
        }
        links.appendChild(col2);
        document.getElementById('gallery').appendChild(links);
        //$gallery.append(row);
    }
}
