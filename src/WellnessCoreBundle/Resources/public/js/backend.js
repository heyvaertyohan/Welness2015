$('#li_service').click(function () {
    $(this).parent().siblings().find("ul").slideUp("normal"); // Slide up all sub menus except the one clicked
    $(this).next().slideToggle("normal"); // Slide down the clicked sub menu
    $('#li_service').css('backgroundColor', 'red');
    $(this).css('backgroundColor', '#009F8B');
});
