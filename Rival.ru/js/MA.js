jQuery(document).ready(function($){



    // $(".cdvig1 p:nth-child(1)").html('Город Балашиха, квартал Абрамцево,<br/>\n д.103А');
    //$(".cdvig1 p:nth-child(1)").css("font-size","20px");
    //$(".cdvig1 p:nth-child(1)").css("margin-top","-2%");

    /* prepend menu icon */
    $('#nav-wrap1').prepend('<div class="menuicon1" id="menu-icon"><img src="images/formenu1.png"></div>');

    $("#nav1").css({
        position: 'absolute',
        top: '45px'
    });

    $("#nav1").slideUp(0);

    /* toggle nav */
    $("#menu-icon").on("click", function(){
        $("#nav1").slideToggle();
        $(this).toggleClass("active");
        $("#nav1 a").css("visibility", "visible");

    });


    function windowSize(){
        if ($(window).width() <= '990'){
            $("#nav1").slideUp(0);
        } else {
        }
    }

    $('#nav-wrap2').prepend('<div id="menu-icon2"><img src="images/formenu1.png"></div>');

    $("#nav2").css({
        position: 'absolute',
        top: '45px'
    });

    $("#nav2").slideUp(0);

    /* toggle nav */
    $("#menu-icon2").on("click", function(){
        $("#nav2").slideToggle();
        $(this).toggleClass("active");
        $("#nav2 a").css("visibility", "visible");

        /*drop black block*/
        $("#bg8").toggleClass("active-bg8");
        $("#copyright").toggleClass("copyright-menu");
        $("#shapka2").toggleClass("shapka2-change");
    });


    function windowSize(){
        if ($(window).width() <= '990'){
            $("#nav2").slideUp(0);
        } else {
        }
    }

    $(window).resize(windowSize);

    $('a[href*=#]').bind("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });








    $(".marka").css( "display", "none" ).removeAttr('selected');
    $(".audi").css( "display", "block" ).attr('selected','selected');


    $( "#soflow1" ).change(function() {
        switch ($( "#soflow1" ).val()){
            case 'audi':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".audi").css( "display", "block" ).attr('selected','selected');
                break;

            case 'changan':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".changan").css( "display", "block" ).attr('selected','selected');
                break;

            case 'chery':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".chery").css( "display", "block" ).attr('selected','selected');
                break;

            case 'chevrolet':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".chevrolet").css( "display", "block" ).attr('selected','selected');
                break;

            case 'ford':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".ford").css( "display", "block" ).attr('selected','selected');
                break;

            case 'gelly':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".gelly").css( "display", "block" ).attr('selected','selected');
                break;

            case 'greatwall':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".greatwall").css( "display", "block" ).attr('selected','selected');
                break;

            case 'haval':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".haval").css( "display", "block" ).attr('selected','selected');
                break;

            case 'honda':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".honda").css( "display", "block" ).attr('selected','selected');
                break;

            case 'honda':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".honda").css( "display", "block" ).attr('selected','selected');
                break;

            case 'audi':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".audi").css( "display", "block" ).attr('selected','selected');
                break;

            case 'hyundai':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".hyundai").css( "display", "block" ).attr('selected','selected');
                break;

            case 'jeep':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".jeep").css( "display", "block" ).attr('selected','selected');
                break;

            case 'kia':
                $(".marka").css( "display", "none" );
                $(".Kia").css( "display", "block" ).attr('selected','selected');
                break;

            case 'lada':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".lada").css( "display", "block" ).attr('selected','selected');
                break;

            case 'lexus':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".lexus").css( "display", "block" ).attr('selected','selected');
                break;

            case 'lifan':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Lifan").css( "display", "block" ).attr('selected','selected');
                break;

            case 'mazda':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Mazda").css( "display", "block" ).attr('selected','selected');
                break;

            case 'mitsubishi':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Mitsubishi").css( "display", "block" ).attr('selected','selected');
                break;

            case 'nissan':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Nissan").css( "display", "block" ).attr('selected','selected');
                break;

            case 'renault':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".renault").css( "display", "block" ).attr('selected','selected');
                break;

            case 'shkoda':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Shkoda").css( "display", "block" ).attr('selected','selected');
                break;

            case 'ssangyong':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".ssangyong").css( "display", "block" ).attr('selected','selected');
                break;

            case 'subaru':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Subaru").css( "display", "block" ).attr('selected','selected');
                break;

            case 'suzuki':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Suzuki").css( "display", "block" ).attr('selected','selected');
                break;

            case 'touota':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".touota").css( "display", "block" ).attr('selected','selected');
                break;

            case 'wolkswagen':
                $(".marka").css( "display", "none" ).removeAttr('selected');
                $(".Wolkswagen").css( "display", "block" ).attr('selected','selected');
                break;
        }

        $(".blackp").removeAttr('selected');
        $(".bmwstylep").removeAttr('selected');
        $(".premiump").removeAttr('selected');
        $(".blackp").attr('selected','selected');

        let path = 'Images/sortedporogs/'+$( "#soflow1" ).val()+'/'+$( "#soflow2" ).val()+'/'+$( "#soflow3" ).val()+'/'+"car.jpg";
        $(".img-car").attr("src",path);
    });




    $( "#soflow2" ).change(function() {

        $(".bmwstylep").css( "display", "block" );



        $(".blackp").removeAttr('selected');
        $(".bmwstylep").removeAttr('selected');
        $(".premiump").removeAttr('selected');
        $(".blackp").attr('selected','selected');


        switch ($( "#soflow2" ).val()) {

            case 'mk':
                $(".blackp, .bmwstylep, premiump").css( "display", "block" );
                $(".bmwstylep").css( "display", "none" );
                break;

            case 'compass':
                $(".blackp, .bmwstylep, premiump").css( "display", "block" );
                $(".bmwstylep").css( "display", "none" );
                break;

            case 'ns':
                $(".blackp, .bmwstylep, premiump").css( "display", "block" );
                $(".bmwstylep").css( "display", "none" );
                break;

            case 'navara':
                $(".blackp, .bmwstylep, premiump").css( "display", "block" );
                $(".bmwstylep").css( "display", "none" );
                break;

            case 'rexton':
                $(".blackp, .bmwstylep, premiump").css( "display", "block" );
                $(".bmwstylep").css( "display", "none" );
                break;

            case 'xray':
                $(".blackp, .bmwstylep, premiump").css( "display", "block" );
                $(".bmwstylep, .blackp").css( "display", "none" );

                $(".blackp").removeAttr('selected');
                $(".bmwstylep").removeAttr('selected');
                $(".premiump").removeAttr('selected');
                $(".premiump").attr('selected','selected');

                break;
        }


        let path = 'Images/sortedporogs/'+$( "#soflow1" ).val()+'/'+$( "#soflow2" ).val()+'/'+$( "#soflow3" ).val()+'/'+"car.jpg";
        $(".img-car").attr("src",path);
    });







    $( "#soflow3" ).change(function() {
        let path = 'Images/sortedporogs/'+$( "#soflow1" ).val()+'/'+$( "#soflow2" ).val()+'/'+$( "#soflow3" ).val()+'/'+"car.jpg";
        $(".img-car").attr("src",path);
    });


    let path = 'Images/sortedporogs/'+$( "#soflow1" ).val()+'/'+$( "#soflow2" ).val()+'/'+$( "#soflow3" ).val()+'/'+"car.jpg";
    $(".img-car").attr("src",path);

});



