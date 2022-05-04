$(document).ready(() => {
    $("div.card,div.product").on("click", (e) => {
        window.location.href = "../productPage"+"";
    })
    $(".filter i").on("click", () => {
        $(".category_menu").css("visibility", "visible").css("left", "0")
    })
    $(".close_category").on("click", () => {
        $(".category_menu").css("visibility", "hidden").css("left", "-100%")
    })
});
