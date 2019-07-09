var page = 1;

window.onload = function() {
    page = 1;
    galleryAjax(null, 1);
}

function galleryAjax(event = null, id = null) {
    if (id == null)
        id = event.id;
    var str = 'id=' + id + '&page=' + page;
    alert(str);
    $.ajax({
        type: "GET",
        url: "/getgallery",
        data: str,
        success: function(data) {
            alert('success');
            if (event != null)
                $('#art-list-btn').text(event.innerText);
            $("#gallery").html('');
            var n = data.paintings.length;
            for (var i = 0; i < n; i = i + 4) {
                var row = document.createElement('div');
                row.setAttribute('class', 'row d-flex align-items-center');
                for (j = i; j < (i + 4); j++) {
                    var col = document.createElement('div');
                    if (data.paintings[j] != null) {
                        col.setAttribute('class', 'col-lg-3 paint-col');

                        // var a = document.createElement('a');
                        // a.setAttribute('href', 'img/' + data.paintings[j].path);
                        var img = document.createElement('img');
                        img.setAttribute('class', 'paint');
                        img.setAttribute('src', 'img/' + data.paintings[j].path);
                        img.setAttribute('alt', data.paintings[j].name);
                        // a.appendChild(img);
                        var div = document.createElement('div');
                        div.setAttribute('class', 'info');
                        var info = '<p>"' + data.paintings[j].name + '"</p><p style="float:left">' + data.paintings[j].description + '</p>' +
                            '<p style="float:right">' + data.paintings[j].year + '</p>';
                        div.innerHTML = info;
                        col.appendChild(img);
                        col.appendChild(div);
                    }
                    row.appendChild(col);
                }
                $("#gallery").append(row);
            }
        }
    });
}

function Pagination(event) {
    if (event.id == 'page-up')
        page--;
    if (event.id == 'page-down')
        pge++;

}