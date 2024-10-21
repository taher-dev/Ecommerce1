$(document).ready(function () {
    var storedSidebar = localStorage.getItem("sidebar");
    if (storedSidebar) {
        $("html").addClass(storedSidebar);
    }

    var storedHeader = localStorage.getItem("header");
    if (storedHeader) {
        $("html").addClass(storedHeader);
    }

    var storedTheme = localStorage.getItem("theme");
    if (storedTheme) {
        $("html").addClass(storedTheme);
    }
});

$(function () {
    "use strict";
    new PerfectScrollbar(".header-message-list"),
        new PerfectScrollbar(".header-notifications-list"),
        $(".mobile-search-icon").on("click", function () {
            $(".search-bar").addClass("full-search-bar");
        }),
        $(".search-close").on("click", function () {
            $(".search-bar").removeClass("full-search-bar");
        }),
        $(".mobile-toggle-menu").on("click", function () {
            $(".wrapper").addClass("toggled");
        }),
        $(".toggle-icon").click(function () {
            $(".wrapper").hasClass("toggled")
                ? ($(".wrapper").removeClass("toggled"),
                  $(".sidebar-wrapper").unbind("hover"))
                : ($(".wrapper").addClass("toggled"),
                  $(".sidebar-wrapper").hover(
                      function () {
                          $(".wrapper").addClass("sidebar-hovered");
                      },
                      function () {
                          $(".wrapper").removeClass("sidebar-hovered");
                      }
                  ));
        }),
        $(document).ready(function () {
            $(window).on("scroll", function () {
                $(this).scrollTop() > 300
                    ? $(".back-to-top").fadeIn()
                    : $(".back-to-top").fadeOut();
            }),
                $(".back-to-top").on("click", function () {
                    return (
                        $("html, body").animate(
                            {
                                scrollTop: 0,
                            },
                            600
                        ),
                        !1
                    );
                });
        }),
        $(function () {
            for (
                var e = window.location,
                    o = $(".metismenu li a")
                        .filter(function () {
                            return this.href == e;
                        })
                        .addClass("")
                        .parent()
                        .addClass("mm-active");
                o.is("li");

            )
                o = o
                    .parent("")
                    .addClass("mm-show")
                    .parent("")
                    .addClass("mm-active");
        }),
        $(function () {
            $("#menu").metisMenu();
        }),
        $(".chat-toggle-btn").on("click", function () {
            $(".chat-wrapper").toggleClass("chat-toggled");
        }),
        $(".chat-toggle-btn-mobile").on("click", function () {
            $(".chat-wrapper").removeClass("chat-toggled");
        }),
        $(".email-toggle-btn").on("click", function () {
            $(".email-wrapper").toggleClass("email-toggled");
        }),
        $(".email-toggle-btn-mobile").on("click", function () {
            $(".email-wrapper").removeClass("email-toggled");
        }),
        $(".compose-mail-btn").on("click", function () {
            $(".compose-mail-popup").show();
        }),
        $(".compose-mail-close").on("click", function () {
            $(".compose-mail-popup").hide();
        }),
        $(".switcher-btn").on("click", function () {
            $(".switcher-wrapper").toggleClass("switcher-toggled");
        }),
        $(".close-switcher").on("click", function () {
            $(".switcher-wrapper").removeClass("switcher-toggled");
        }),
        // theme color
        $("#lightmode").on("click", function () {
            $("html").attr("class", "light-theme");
            localStorage.setItem("theme", "light-theme");
            localStorage.setItem("header", "");
            localStorage.setItem("sidebar", "");
        }),
        $("#darkmode").on("click", function () {
            $("html").attr("class", "dark-theme dark");
            localStorage.setItem("theme", "dark-theme dark");
            localStorage.setItem("header", "");
            localStorage.setItem("sidebar", "");
        }),
        $("#semidark").on("click", function () {
            $("html").attr("class", "semi-dark");
            localStorage.setItem("theme", "semi-dark");
            localStorage.setItem("header", "");
            localStorage.setItem("sidebar", "");
        }),
        $("#minimaltheme").on("click", function () {
            $("html").attr("class", "minimal-theme");
            localStorage.setItem("theme", "minimal-theme");
            localStorage.setItem("header", "");
            localStorage.setItem("sidebar", "");
        }),
        // header color
        $("#headercolor1").on("click", function () {
            $("html").addClass("color-header headercolor1"),
                $("html").removeClass(
                    "headercolor2 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor1");
        }),
        $("#headercolor2").on("click", function () {
            $("html").addClass("color-header headercolor2"),
                $("html").removeClass(
                    "headercolor1 headercolor3 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor2");
        }),
        $("#headercolor3").on("click", function () {
            $("html").addClass("color-header headercolor3"),
                $("html").removeClass(
                    "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor3");
        }),
        $("#headercolor4").on("click", function () {
            $("html").addClass("color-header headercolor4"),
                $("html").removeClass(
                    "headercolor1 headercolor2 headercolor3 headercolor5 headercolor6 headercolor7 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor4");
        }),
        $("#headercolor5").on("click", function () {
            $("html").addClass("color-header headercolor5"),
                $("html").removeClass(
                    "headercolor1 headercolor2 headercolor4 headercolor3 headercolor6 headercolor7 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor5");
        }),
        $("#headercolor6").on("click", function () {
            $("html").addClass("color-header headercolor6"),
                $("html").removeClass(
                    "headercolor1 headercolor2 headercolor4 headercolor5 headercolor3 headercolor7 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor6");
        }),
        $("#headercolor7").on("click", function () {
            $("html").addClass("color-header headercolor7"),
                $("html").removeClass(
                    "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor3 headercolor8"
                );
            localStorage.setItem("header", "color-header headercolor7");
        }),
        $("#headercolor8").on("click", function () {
            $("html").addClass("color-header headercolor8"),
                $("html").removeClass(
                    "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3"
                );
            localStorage.setItem("header", "color-header headercolor8");
        }),
        $("#headercolor9").on("click", function () {
            $("html").removeClass(
                "headercolor1 headercolor2 headercolor4 headercolor5 headercolor6 headercolor7 headercolor3"
            );
            localStorage.setItem("header", "");
        });

    // sidebar colors
    $("#sidebarcolor1").click(theme1);
    $("#sidebarcolor2").click(theme2);
    $("#sidebarcolor3").click(theme3);
    $("#sidebarcolor4").click(theme4);
    $("#sidebarcolor5").click(theme5);
    $("#sidebarcolor6").click(theme6);
    $("#sidebarcolor7").click(theme7);
    $("#sidebarcolor8").click(theme8);
    $("#sidebarcolor9").click(theme9);

    function theme1() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor1");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor1");
    }

    function theme2() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor2");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor2");
    }

    function theme3() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor3");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor3");
    }

    function theme4() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor4");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor4");
    }

    function theme5() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor5");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor5");
    }

    function theme6() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor6");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor6");
    }

    function theme7() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor7");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor7");
    }

    function theme8() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            $("html").addClass("color-sidebar sidebarcolor8");
        localStorage.setItem("sidebar", "color-sidebar sidebarcolor8");
    }

    function theme9() {
        $("html").removeClass(
            "color-sidebar sidebarcolor1 sidebarcolor2 sidebarcolor3 sidebarcolor4 sidebarcolor5 sidebarcolor6 sidebarcolor7 sidebarcolor8"
        ),
            localStorage.setItem("sidebar", "");
    }
});
