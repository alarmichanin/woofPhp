$(document).ready(() => {
    $(".barI .fa-bars").on("click", () => {
        $(".hamburger_menu").css("visibility", "visible").css("left", "0")
    })
    $(".barI .close_menu").on("click", () => {
        $(".hamburger_menu").css("visibility", "hidden").css("left", "-100%")
    })
});