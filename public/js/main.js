window.onload = function() {
    backGround();
}
window.onresize = function() {
    backGround();
}

function backGround() {
    if (window.matchMedia("(orientation: portrait)").matches) {
        $("#bg").html("<img src='img/bg-portrait.jpg'>");
    } else {
        $("#bg").html("<img src='img/bg-landscape.jpg'>");
    }
}