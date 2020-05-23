menuopened = false;

function closeNav() {
    menuopened = false;
    $("#menu_links").css({ top: "180px", opacity: "0" });
    setTimeout(()=>{
        $("#menu_links").css({ display: "none" });
    }, 300);


    setTimeout(()=>{
        $("#menu").css({
            height: "0%"
        });
        setTimeout(()=>{
            $("#menu").css({
                display: "none"
            });
        }, 300);
    }, 300);

    $("#menubtn").css({
        transform: "rotate(0deg)"
    });
    $("#menubtn").text("menu");
}

$(document).ready(function() {

    $("#menubtn").click(function() {
        if (menuopened) {
            closeNav();
        } else {
            menuopened = true;
            $("#menu").css({
                display: "block"
            });
            setTimeout(()=>{
                $("#menu").css({
                    height: "100%"
                });

                setTimeout(()=>{
                    $("#menu_links").css({ display: "block" });
                    setTimeout(()=>{
                        $("#menu_links").css({ top: "210px", opacity: "1" });
                    }, 100);
                }, 200);
                
            }, 300);
            $("#menubtn").css({
                transform: "rotate(360deg)"
            });
            $("#menubtn").text("close");
        }
    });

});