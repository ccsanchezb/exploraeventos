$(document).ready(function(){

    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});

    $('#slider').slides({
      preload: false,
      preloadImage: 'img/loading.gif',
      generateNextPrev: true,
      effect: 'slide',
      crossfade: true,
      slideSpeed: 350,
      fadeSpeed: 500,
      generatePagination: false,
      play: 6000,     
    });

    $('#cover').click(function(){
        $('#cover').fadeOut(2000);
        //$('#cover').remove();
    });

    $(function() {
        $('#navigation> li').hover(
            function () {
               $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
            },
            function () {
              $('a',$(this)).stop().animate({'marginLeft':'-70px'},200);
            }
        );
    });


    $(function() {
        $('#navigation a').stop().animate({'marginLeft':'-70px'},1000);
        $('#navigation> li').hover(
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
            },
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-70px'},200);
            }
        );
    });
    $('.bxslider').bxSlider();
    $( "#tabs" ).tabs();

    $('.boxgrid.slidedown').hover(function(){
        $(".cover", this).stop().animate({top:'-260px'},{queue:false,duration:300});
    }, function() {
        $(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
    });
    //Horizontal Sliding
    $('.boxgrid.slideright').hover(function(){
        $(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
    }, function() {
        $(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
    });
    //Diagnal Sliding
    $('.boxgrid.thecombo').hover(function(){
        $(".cover", this).stop().animate({top:'260px', left:'325px'},{queue:false,duration:300});
    }, function() {
        $(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
    });
    //Partial Sliding (Only show some of background)
    $('.boxgrid.peek').hover(function(){
        $(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
    });
    //Full Caption Sliding (Hidden to Visible)
    $('.boxgrid.captionfull').hover(function(){
        $(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
    });
    //Caption Sliding (Partially Hidden to Visible)
    $('.boxgrid.caption').hover(function(){
        $(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
    }, function() {
        $(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
    });

    $('body').on('click', '.dlt_link', function(event) {
        event.preventDefault();
        $cnf = confirm("¿Realmente desea eliminar este registro?");

        if ($cnf == true) {

            $id = $(this).attr("data-id");
            $rol = $(this).attr("data-rol");

            switch($rol) {
                /* ========================== ADMIN ========================== */
                case 'user':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_users.php?id="+$id);
                    break;                

                case 'room':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_rooms.php?id="+$id);
                    break;    

                case 'social':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_events.php?id="+$id+"&evento="+$rol);
                    break;

                case 'empresarial':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_events.php?id="+$id+"&evento="+$rol);
                    break;            

                case 'tool':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_tools.php?id="+$id);
                    break;

                case 'artist':
                    window.location.replace("http://localhost/exploraeventos/admin/delete_artists.php?id="+$id);
                    break;

                default:
                    alert("No se puede eliminar el registro.");
                    break;
            }               
        };
    });
});