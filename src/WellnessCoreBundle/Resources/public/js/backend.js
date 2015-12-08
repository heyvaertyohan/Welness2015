$('document').ready(function(){
    menuManagement();



});

function menuManagement() {
    var menu_ul = $('.menu > li > ul'),
        menu_a = $('.menu > li > a');

    menu_ul.hide();

    menu_a.click(function (e) {
        e.preventDefault();

        if (!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true, true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true, true).slideUp('normal');
        }
    });

}





/*$('#li_service').click(function () {
    $(this).parent().siblings().find("ul").slideUp("normal"); // Slide up all sub menus except the one clicked
    $(this).next().slideToggle("normal"); // Slide down the clicked sub menu
    $('#li_service').css('backgroundColor', 'red');
    $(this).css('backgroundColor', '#009F8B');
});*/
