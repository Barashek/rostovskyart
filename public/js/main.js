window.onload = function() {
    if (window.matchMedia("(orientation: portrait)").matches) {
        $("#bg").html("<img src='img/bg-portrait.jpg'>");
    } else {
        $("#bg").html("<img src='img/bg-landscape.jpg'>");
    }
}