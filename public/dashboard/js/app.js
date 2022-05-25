$(".show-sidebar-btn").on("click", function () {
    $(".sidebar").animate({
        marginLeft: "0"
    });
});

$(".hide-sidebar-btn").on("click", function () {
    $(".sidebar").animate({
        marginLeft: "-100%"
    });
});

// const btn = document.querySelector(".btnnn");
// const sb = document.querySelector(".sidebar");
// btn.onclick = () => {
//     sb.classList.toggle("active");
//     btn.classList.toggle("active");
// };

function go(url) {
    setTimeout(function () {
        location.href = `${url}`;
    }, 500);
}

let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
});

// let popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
//     container: 'body'
// });

$(".full-screen-btn").click(function () {
    let current = $(this).closest(".card");
    current.toggleClass("full-screen-card");
    if (current.hasClass("full-screen-card")) {
        $(this).html(`<i class="feather-minimize-2"></i>`);
    } else {
        $(this).html(`<i class="feather-maximize-2"></i>`);
    };
});

$(document).ready(function () {
    $('#example').DataTable({
        "columnDefs": [{
                "targets": [2],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [3],
                "visible": false
            }
        ]
    });
});

let screenHeight = $(window).height();
let currentMenuHeight = $(".nav-menu .active").offset().top;

if (currentMenuHeight > screenHeight * 0.8) {
    $(".sidebar").animate({
        scrollTop: currentMenuHeight - 200
    }, 1000);
};