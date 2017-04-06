$(function() {
    // usual main starting point when web page loads

    // simple CSS class switcher
    // find all divs
    // bind to click events
    // alter the CSS of the specific clicked div element
    var count = 0;
    $("div").click(function() {
        // $(this) is a shortcut for the element we just selected
        // using $("div")
        $("div").click(function() {
            $(this).css("position", "absolute");
            $(this).animate({
                left: "+=360"
            }, 1000, function() {});
        });

        /* working mod
        count++;
        $(this).toggleClass("red", count % 3 == 0);
        $(this).toggleClass("blue", count % 3 == 1);
        $(this).toggleClass("green", count % 3 == 2);
        */
        /* original
        if ($(this).hasClass("red")) {
        	$(this).addClass("blue").removeClass("red");
        }
        else if ($(this).hasClass("blue")) {
        	$(this).addClass("green").removeClass("blue");
        }
        else if ($(this).hasClass("green")) {
        	$(this).addClass("red").removeClass("green");
        }
        */
    });

});
