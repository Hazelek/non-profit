$(document).ready(function () {
    $('#fullpage').fullpage({
        autoScrolling: false,
        fitToSection: false
    });


    // Parallax mouse move
    $('.parallax').mousemove(function (e) {
        var x = -(e.pageX + this.offsetLeft) / 20;
        var y = -(e.pageY + this.offsetTop) / 20;
        $(this).css('background-position', x + 'px ' + y + 'px');
    });











    // Get the modal
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
    var btn = document.getElementById("modal-but");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    var body = document.getElementsByTagName('body');
    
    

// When the user clicks on the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
        $('body').addClass("overflow-hidden");
    };

// When the user clicks on <span> (x), close the modal
    span.onclick = function (event) {
        modal.style.display = "none";
        $('body').removeClass("overflow-hidden");
    };


// When the user clicks anywhere outside of the modal, close it
//    window.onclick = function (event) {
//        if (event.target === modal) {
//            modal.style.display = "none";
//            $('body').removeClass("overflow-hidden");
//        }
//    };


});