$(function () {
    var navigation = $("#navbar");
    var nav = $("#nav");
    var logoShape = $("#logo-nav");
    var imgLogo = $("#img-logo");
    var subMenu = $("ul#sub-menu");
    var namaSekolah = $("#nama-sekolah");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 20) {
            navigation.addClass("bg-white shadow-md text-pri-100");
            navigation.removeClass("text-white");
            nav.removeClass("bg-pri-100")
            // logoShape.removeClass("bg-white shadow-xl");
            imgLogo.addClass("w-16 py-2");
            imgLogo.removeClass("w-auto p-2 lg:p-3");
            subMenu.removeClass("bg-blue-800");
            subMenu.addClass("text-pri-100");
            namaSekolah.addClass("block")
            namaSekolah.removeClass("hidden")
        } else {
            navigation.addClass("text-white");
            navigation.removeClass("bg-white shadow-md text-pri-100");
            nav.addClass("bg-pri-100")
            imgLogo.removeClass("w-16 py-2");
            imgLogo.addClass("w-auto p-2 lg:p-3");
            // logoShape.addClass("bg-white shadow-xl rounded-b-xl");
            subMenu.addClass("bg-blue-800");
            subMenu.removeClass("text-pri-100");
            namaSekolah.removeClass("block");
            namaSekolah.addClass("hidden");
        }
    });
});
