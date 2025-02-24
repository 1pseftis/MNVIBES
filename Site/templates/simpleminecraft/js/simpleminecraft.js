var modalAppDisplayed = false;

function showModalApp(margin_left, width, html) {

    if (modalAppDisplayed) {
        return;
    }

    $(".modal_app").css("margin", "6% auto auto " + margin_left);
    $(".modal_app").css("width", width);
    $(".modal_app").empty();
    $(".modal_app").html(html);

    $(".modal_overlay").fadeTo(0, 0.0);
    $(".modal_overlay").show();
    $(".modal_overlay").fadeTo(500, 1.0);

    $(".modal_app").fadeTo(0, 0.0);
    $(".modal_wrapper, .modal_app").show();
    $(".modal_app").fadeTo(500, 1.0, function () {
        modalAppDisplayed = true;
    });
}

function closeModalApp() {

    if (!modalAppDisplayed) {
        return;
    }

    $(".modal_app").fadeTo(500, 0.0, function () {
        $(".modal_wrapper, .modal_app").hide();
        $(".modal_app").empty();
    });

    $(".modal_overlay").fadeTo(500, 0.0, function () {
        $(".modal_overlay").hide();
        modalAppDisplayed = false;
    });
}

function redirectTo(location) {
    window.location = location;
    console.log("Перенаправляем на -> " + location);
}



