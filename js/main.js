// GLOBAL VARIABLES

var uber = {}; 
    uber.height = document.documentElement.clientHeight;
    uber.width = document.documentElement.clientWidth; 
// END GLOBAL VARIABLES
$(document).ready(function () {
    start();
    minSectionHeight();
});
    
    function start() {
        $('.carousel').carousel();
        $('.carousel-inner').css('height', uber.height);
        $('.carousel-img').css('min-width', uber.width);
        $('#showPhone').click(function () {
            if($('.con-menu').css('overflow') == 'hidden'){
                $('.con-menu').css('overflow', 'visible');
            }else{
                $('.con-menu').css('overflow', 'hidden');
            }
        });
        $('#showAttachForm').click(function(){
            $('#attachForm').toggle("slow");
        });
        $('#logo').click(function(){
            $('.navbar').toggle('display');
        });
        // SMOOTH SCROLL
        $('.arrow-down, .hvr-shutter-out-vertical').smoothScroll();
        // SMOOTH SCROLL
        // $('.arrow-down').
        $("#feedToMeMain").tooltip();

        // SEND CLIENTS CALLBACK TO EMAIL
    $("#callForm, #questForm, #joinForm").submit(function() { 
                var formData= $(this).serialize(); 
                console.log(formData);
                $.ajax({
                type: 'POST', 
                url: 'sender.php',
                data: formData,
               success: function(data){ 
                    if (data['error']) { 
                        console.log(data['error']); 
                    } else { 
                        console.log('Письмo oтврaвлeнo! =)');
                    }
                 },
               error: function (xhr, ajaxOptions, thrownError) { 
                    console.log(xhr.status); 
                    console.log(thrownError);
                 }
            });
        });

// SEND CLIENTS CALLBACK TO EMAIL
    }

    // START "FN" SECTION MIN-HEIGHT == clientHeight
    function minSectionHeight() { 
        uber.height = document.documentElement.clientHeight;
        uber.width = document.documentElement.clientWidth; 
    $('.section').css('min-height', uber.height);
    }
    // END "FN" SECTION MIN-HEIGHT == clientHeight

$(window).resize(function() {
    minSectionHeight();
});