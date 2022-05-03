$(document).ready(function () {
    $(".b-popup").hide();
    $('table ~ form ~ button').click((e) => {
        let table = e.target.className
        $(`.${table}Table`).show()
        $(`.popup${table}`).show();
        // $(document).on("click", (e) => {
        //     console.log(e.target)
        //     if (e.target.className!=="b-popup-content") {
        //         $(".b-popup").hide();
        //     }
        // })
    })
})