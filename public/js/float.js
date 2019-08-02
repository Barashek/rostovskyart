window.onload = imgSize();
window.onresize = imgSize();


function imgSize() {
    $('.float-img').css('display', 'none');
    var height = $("#text").height();
    imgHeight = height * 0.45;
    $('.float-img').children('img').css('height', imgHeight);
    $('.float-img').css('display', 'block');
}