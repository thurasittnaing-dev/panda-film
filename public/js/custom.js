// On Click Submit
function onClickSubmit(event, form) {
    event.preventDefault();
    $(`#${form}`).submit();
}

$(".prevent-submit-btn").on("click", function (event) {
    event.preventDefault();
    $(this).attr("disabled", true);
    $(this).closest("form").submit();
});

$(".table-responsive").on("show.bs.dropdown", function () {
    $(".table-responsive").css("overflow", "inherit");
});

$(".table-responsive").on("hide.bs.dropdown", function () {
    $(".table-responsive").css("overflow", "auto");
});
