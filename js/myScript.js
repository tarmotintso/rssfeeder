$(".clickable").click(function () {
    var href = $(this).attr("href");
    window.location.href = href;
});
