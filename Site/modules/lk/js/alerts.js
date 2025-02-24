///////////////////////
// Глобальный ошибки //
///////////////////////
function error_noname() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Не известная ошибка!',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		location.reload();
    })
}
function not_connect() {
    Swal.fire({
        position: 'top',
        title: 'Ошибка!',
        text: 'Не удалось подключиться к серверу',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		showConfirmButton: false,
		timer: 1500,
        type: 'error'
   })
}
function user_not_found() {
    Swal.fire({
        position: 'top',
        title: 'Ошибка!',
        text: "Вас нет на сервере! Войдите пожалуйста на сервер!",
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		showConfirmButton: false,
		timer: 4500,
        type: 'error'
   })
}
function donate_not_found() {
    Swal.fire({
        position: 'top',
        title: 'Ошибка конфигурации!',
        text: "Не удалось найти группу в конфиге! Обратитесь к администратору сайта!",
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		showConfirmButton: false,
		timer: 3500,
        type: 'error'
   })
}
function donate_not_period() {
    Swal.fire({
        position: 'top',
        title: 'Ошибка конфигурации!',
        text: "Не удалось найти период оплаты в конфиге! Обратитесь к администратору сайта!",
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		showConfirmButton: false,
		timer: 3500,
        type: 'error'
   })
}
function connect() {
    Swal.fire({
        position: 'top',
		allowOutsideClick: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
	    allowEscapeKey: false,
	    allowEnterKey: false,
		showConfirmButton: false,
        text: 'Устанавливаем связь с сервером...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
}
///////////////////
////// Кнйсы //////
///////////////////
function case_succes() {
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Покупка успешно совершена!',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		load_profile();
    })
}
function money_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Не хватает денег!',
        showConfirmButton: false,
        timer: 1500
    })
}
function coins_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Не хватает коинов!',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
        timer: 1500
    })
}
function case_get() {
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Ежедневный кейс успешно выдан!',
        showConfirmButton: false,
        timer: 1500
    })
}
////////////////
////  Донат ////
////////////////
function pay_minus() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Не хватает денег!',
        showConfirmButton: false,
        timer: 1500
    })
}
function infinity_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        text: 'У вас уже есть донат более высоко уровня!',
        showConfirmButton: false,
    })
}
function buy_success() {
    donate_lk();
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Покупка успешно совершена!',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		load_profile();
    })
}
function give_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'На данный момент у вас есть донат более высоко уровня, этот донат пока нельзя выдать!',
        showConfirmButton: false
    })
}
function give_success() {
    Swal.fire({
        position: 'top',
       type: 'success',
	   confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
       title: 'Донат успешно выдан!',
       showConfirmButton: false,
       timer: 1500
    })
}
function skin_selector_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
	    confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
       text: 'Выберите тип загружаемого файла!',
       showConfirmButton: false,
       timer: 4500
    })
}
///////////////////
//// Обменник /////
///////////////////
function ex_minus() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Не хватает денег!',
        showConfirmButton: false,
        timer: 1500
    })
}
function ex_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Обмен успешно совершён!',
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		load_profile();
    })
}
function ex_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Не правильно введены данные!',
        showConfirmButton: false,
        timer: 1500
    })
}
function ex_not_member() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Игрок не найден',
		showConfirmButton: false,
		timer: 1500,
        type: 'error'
   })
}
function pay_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Перевод успешно совершён!',
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		load_profile();
    })
}
///////////////////
///// Разбан //////
///////////////////
function ub_minus() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Не хватает денег!',
        showConfirmButton: false,
        timer: 1500
    })
}
function ub_success() {
    unban_page()
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Вы успешно разбанены!',
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		load_profile();
    })
}
function ub_error() {
    unban_page();
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Ошибка!',
        showConfirmButton: false,
        timer: 1500
    })
}
/////////////////////////
//// ЗАГРУЗКА ФАЙЛОВ ////
/////////////////////////
function no_upload() {
Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Кажется файл не был загружен...',
    })
}
function cloak_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'У вас недостаточно прав на загрузку плаща',
    })
}
function max_file() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Размер файла превышает максимальный допустимый',
    })
}
function huyna() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Загружаеый файл был получен только частично',
    })
}
function hz() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Неизвестная ошибка...',
    })
}
function no_image() {
Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Можно загружать только PNG изображения',
    })
}
function max() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Недопустимый размер изображения',
    })
}
function skin_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Скин успешно загружен',
    })
}
function cloak_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Плащ успешно загружен',
    })
}
/////////////////////
//// ТП НА СПАВН ////
/////////////////////
function close() {
   Swal.fire({
        position: 'top',
        title: 'Ошибка!',
        text: 'Вы не были обнаружены на сервере! Для повтора обновите страницу',
	    confirmButtonColor: '#35D59D',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error'
    })
}
function tp_succes() {
   Swal.fire({
        position: 'top',
        title: 'Успех!',
	    showConfirmButton: false,
        timer: 1500,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        text: 'Вы успешно телепортированы на спавн',
	    confirmButtonColor: '#35D59D',
        type: 'success'
   })
}
//////////////////////
//// СМЕНА ПОРОЛЯ ////
//////////////////////
function uncorect_pass1() {
    Swal.fire({
		position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Введён неправельный текущий пороль!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function uncorect_pass1_2() {
    Swal.fire({
		position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Новый пороль не должен совпадать со старым!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function uncorect_pass2() {
    Swal.fire({
		position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Пороль не может быть меньше 8 или больше 16 символов!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function uncorect_pass3() {
    Swal.fire({
		position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Пороли не совпадают!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function success_pass() {
    Swal.fire({
		position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Пароль успешно изменен!',
	    showConfirmButton: false,
        timer: 3000
    }).then((result) => {
		location.href='/'
    })
}

function buy_item_swal() {
    Swal.fire({
        position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        text: 'Покупка успешно совершенна',
        showConfirmButton: false,
        timer: 1500
    })
}
function not_serverv2() {
    Swal.fire({
        position: 'top',
        type: 'error',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Вас нет на выбранном сервере!',
        showConfirmButton: false,
        timer: 1500
    })
}
function not_server() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error',
        title: 'Сервер не выбран!',
        showConfirmButton: false,
        timer: 1500
    })
}









///// DISCORD INTEGRATION //////////
function error_discord() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error',
        title: 'Ошибка!',
		text: 'Данный аккаунт DISCORD уже подключён к другому пользователю!',
        showConfirmButton: false,
		showCloseButton: true
    })
}
function logout_discord_alert() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'success',
		text: 'Аккаунт Discord больше не связан с текущим пользователем!',
        showConfirmButton: false,
		showCloseButton: true
    })
}
function login_discord_alert() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'success',
		text: 'Аккаунт Discord связан с текущеим пользователем!',
        showConfirmButton: false,
		showCloseButton: true
    })
}