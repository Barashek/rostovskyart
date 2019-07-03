window.onload = function() {
    galleryAjax(1);
}

function galleryAjax(id) {
    var str = 'id=' + id;

    $.ajax({
        type: "GET",
        url: "/getgallery",
        data: str,
        success: function(data) {
            $("#gallery").html('');
            var n = data.paintings.length;
            for (var i = 0; i < n; i = i + 4) {
                var row = document.createElement('div');
                row.setAttribute('class', 'row d-flex align-items-center');
                for (j = i; j < (i + 4); j++) {
                    var col = document.createElement('div');
                    col.setAttribute('class', 'col-lg-3');
                    if (data.paintings[j] != null) {
                        var a = document.createElement('a');
                        a.setAttribute('href', 'img/' + data.paintings[j].path);
                        var img = document.createElement('img');
                        img.setAttribute('class', 'paint');
                        img.setAttribute('src', 'img/' + data.paintings[j].path);
                        img.setAttribute('alt', data.paintings[j].name);
                        a.appendChild(img);
                        col.appendChild(a);
                    }
                    row.appendChild(col);
                }
                $("#gallery").append(row);
            }
        }
    });
}