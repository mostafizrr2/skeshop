$(document).ready(function(){

    $('#search-btn').click(function(){

        if($('#search-icon').hasClass('fa-search'))
        {
            $('#search-icon').removeClass('fa-search');
            $('#search-icon').addClass('fa-times');

        }else if($('#search-icon').hasClass('fa-times'))
        {
            $('#search-icon').removeClass('fa-times');
            $('#search-icon').addClass('fa-search');
        }
    });

});