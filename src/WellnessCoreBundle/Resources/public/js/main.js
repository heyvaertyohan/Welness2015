var currentLanguage = "";

$(document).ready(function () {
    var tabCurrentPage = $(location).attr('href').split('/');
    if (tabCurrentPage.length == 0) {
        currentPage = "home";
    }
    else {
        var currentPage = tabCurrentPage[tabCurrentPage.length - 1];
        currentLanguage = tabCurrentPage[tabCurrentPage.length - 2];
    }

    $('a').bind("mouseenter", function () {
        $(this).css("font-weight", "bold");
    });

    $('a').bind("mouseleave", function () {
        var isFontWeight = $(this).css("font-weight");
        if (isFontWeight == "700") {
            $(this).css("font-weight", "normal");
        }
    });

    if (currentPage == "") {
        currentPage = "home";
        console.log(currentPage);
    }


    switch(currentLanguage){
        case 'fr':
            aActive('#french');
            aDeActive('#english');
            break;
        case 'en':
            aActive('#english');
            aDeActive('#french');
            break;
    }
    switch (currentPage) {
        case 'home':
            aActive("#home");
            aDeActive("#provider");
            aDeActive("#category");
            aDeActive("#training");
            aDeActive("#promo");
            break;

        case 'provider':
            aActive("#provider");
            aDeActive("#home");
            aDeActive("#category");
            aDeActive("#training");
            aDeActive("#promo");
            break;

        case 'category':
            aActive("#category");
            aDeActive("#home");
            aDeActive("#provider");
            aDeActive("#training");
            aDeActive("#promo");
            break;

        case 'training':
            aActive("#training");
            aDeActive("#home");
            aDeActive("#provider");
            aDeActive("#category");
            aDeActive("#promo");
            break;

        case 'promo':
            aActive("#promo");
            aDeActive("#home");
            aDeActive("#provider");
            aDeActive("#category");
            aDeActive("#training");
            break;
    }

    function aActive(myvar) {
        console.log(myvar);
        $(myvar + ' a').css("color", "#C6AF5C");
    }

    function aDeActive(myvar) {
        $(myvar + ' a').css("color", "#fff");
    }
});


