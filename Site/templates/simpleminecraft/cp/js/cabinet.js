// Обработка хешей в URL

var url = window.location.toString();
if (url.indexOf("&page=") >= 0) {
    loadPage(url.split('&page=')[1]);
} else {
    loadPage('profile');
}

$(".cabinet_functions_menu a").click(function () {
    loadPage($(this).attr("id"));
});

// Загрузка страницы
function loadPage(name) {

    if (name == 'shop' || name == 'help') {
        return;
    }

    $.post('/index.php?do=cp', {page: name}, function (data) {

        //updateBalance();

        $(".cabinet_functions_menu a").toggleClass("selected", false);
        $("#" + name + ".tab").toggleClass("selected");

        //$("#cabinet_content").empty();
        //$("#cabinet_content").append(data);

        $(".cabinet_functions_menu a").off();
        $(".cabinet_functions_menu a").click(function () {
            loadPage($(this).attr("id"));
        });
    });
}

// Сон
function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

// Обновление баланса
function updateBalance() {
    
}

function showCabinetModalApp(page, title, width) {
    $.post('/index.php?do=cp', {page: page}, function (data) {

        console.log(data);

        showModalApp(width, "<div class=\"modal_app_title\">" + title + ":</div>\n" +
            "<div class=\"modal_app_close\" onclick=\"closeModalApp();\"></div>" +
            "<div class=\"modal_app_content\">" + data + "</div>");
    });
}