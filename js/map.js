$(document).ready(function () {
    function fullScreen(element) {
        if (element.requestFullScreen) {
            element.requestFullScreen();
        } else if (element.webkitRequestFullScreen) {
            element.webkitRequestFullScreen();
        } else if (element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
        }
    }

    function fullScreenCancel() {
        if (document.requestFullScreen) {
            document.requestFullScreen();
        } else if (document.webkitRequestFullScreen) {
            document.webkitRequestFullScreen();
        } else if (document.mozRequestFullScreen) {
            document.mozRequestFullScreen();
        }
    }

    $("#map1").fitText(1.1, { minFontSize: '10px', maxFontSize: '46px' });
    $("#map2").fitText(1.1, { minFontSize: '14px', maxFontSize: '60px' });
    $("#map3").fitText(1.1, { minFontSize: '12px', maxFontSize: '50px' });

    $('html').keydown(function (event) {
        if (event.keyCode == 70) {
            var html = document.documentElement;
            fullScreen(html);
        }
        if (event.keyCode == 27) {
            fullScreenCancel();
        }
    });
});