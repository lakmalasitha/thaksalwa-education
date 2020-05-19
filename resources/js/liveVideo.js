const newLocal = '#my_player DIV';
$(document).ready(function(e){
    $('#my_video_list a').on('click',function(e){
        e.preventDefault();

        var video_url = $(this).attr('href');

        var video_id = video_url.substring(video_url.search('=')+1,video_url.length);

        $(newLocal).html('<iframe width="560" height="315" src="https://www.youtube.com/embed/live_stream?channel=UC4pp5wGmsjQaCuNesaYnwgg"</iframe>');
        $('#my_player').fadeIn(500);
    });

    $('#my_player').on('click',function(e){
        $('#my_player').fadeOut(500);
        $('#my_player DIV').empty();
    });
});
