/*=========================================================================================
    File Name: coming-soon.js
    Description: Coming Soon
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

/*******************************
*       js of Countdown        *
********************************/

$(document).ready(function() {

    $('#clockImage').countdown('2018/8/10').on('update.countdown', function(event) {
      var $this = $(this).html(event.strftime(''
        + '<div class="clockCard p-2 mr-1 mb-3 bg-cyan bg-darken-4 box-shadow-2"> <span>%-w</span> <br> <p class="lead mb-0">Minggu </p> </div>'
        + '<div class="clockCard p-2 mr-1 mb-3 bg-cyan bg-darken-4 box-shadow-2"> <span>%d</span> <br> <p class="lead mb-0">Hari </p> </div>'
        + '<div class="clockCard p-2 mr-1 mb-3 bg-cyan bg-darken-4 box-shadow-2"> <span>%H</span> <br> <p class="lead mb-0">Jam </p> </div>'
        + '<div class="clockCard p-2 mr-1 mb-3 bg-cyan bg-darken-4 box-shadow-2"> <span>%M</span> <br> <p class="lead mb-0">Menit </h5> </div>'
        + '<div class="clockCard p-2 mb-3 bg-cyan bg-darken-4 box-shadow-2"> <span>%S</span> <br> <p class="lead mb-0"> Detik </p> </div>'))
    });

    $('#clockFlat').countdown('2018/8/10').on('update.countdown', function(event) {
      var $this = $(this).html(event.strftime(''
        + '<div class="clockCard p-1"> <span>%-w</span> <br> <p class="bg-blue-grey bg-darken-4 clockFormat lead p-1 mt-1 white"> Minggu </p> </div>'
        + '<div class="clockCard p-1"> <span>%d</span> <br> <p class="bg-blue-grey bg-darken-4 clockFormat lead p-1 mt-1 white"> Hari </p> </div>'
        + '<div class="clockCard p-1"> <span>%H</span> <br> <p class="bg-blue-grey bg-darken-4 clockFormat lead p-1 mt-1 white"> Jam </p> </div>'
        + '<div class="clockCard p-1"> <span>%M</span> <br> <p class="bg-blue-grey bg-darken-4 clockFormat lead p-1 mt-1 white"> Menit </p> </div>'
        + '<div class="clockCard p-1"> <span>%S</span> <br> <p class="bg-blue-grey bg-darken-4 clockFormat lead p-1 mt-1 white"> Detik </p> </div>'))
    });

    $('#clockMinimal').countdown('2018/8/10').on('update.countdown', function(event) {
      var $this = $(this).html(event.strftime(''
        + '<div class="clockCard white p-2"> <span>%-w</span> <br> <p class="lead white"> Minggu </p> </div>'
        + '<div class="clockCard white p-2"> <span>%d</span> <br> <p class="lead white"> Hari </p> </div>'
        + '<div class="clockCard white p-2"> <span>%H</span> <br> <p class="lead white"> Jam </p> </div>'
        + '<div class="clockCard white p-2"> <span>%M</span> <br> <p class="lead white"> Menit </p> </div>'
        + '<div class="clockCard white p-2"> <span>%S</span> <br> <p class="lead white"> Detik </p> </div>'))
    });

    // YouTube video
    // Uncomment following code to enable YouTube background video
    if($('.comingsoonVideo').length > 0){
        $('.comingsoonVideo').tubular({videoId: 'iGpuQ0ioPrM'});
    }

    // Custom Video
    // Comment / Uncomment to show / hide your custom video. Please exchange your video name and paths accordingly.
    // var BV = new $.BigVideo({useFlashForFirefox:false});
    // BV.init();
    // BV.show([
    //     { type: "video/mp4",  src: "../../../app-assets/videos/481479901.mp4" },
    //     { type: "video/webm", src: "../../../app-assets/videos/481479901.webm" },
    //     { type: "video/ogg",  src: "../../../app-assets/videos/481479901.ogv" }
    // ]);
});
