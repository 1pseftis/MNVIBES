///////////////////////
// Глобальный ошибки //
///////////////////////
function error_noname() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Не известная ошибка!',
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
		showConfirmButton: false,
		timer: 1500,
        type: 'error'
   })
}
function connect() {
    Swal.fire({
        position: 'top',
		allowOutsideClick: false,
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
        title: 'Не хватает денег!',
        showConfirmButton: false,
        timer: 1500
    })
}
function infinity_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'У вас уже есть вечный/временной донат более высоко уровня!',
        showConfirmButton: false,
    })
}
function buy_success() {
    donate_lk();
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Покупка успешно совершена!',
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
        title: 'На данный момент у вас есть донат более высоко уровня, этот донат пока нельзя выдать!',
        showConfirmButton: false
    })
}
function give_success() {
    Swal.fire({
        position: 'top',
       type: 'success',
       title: 'Донат успешно выдан!',
       showConfirmButton: false,
       timer: 1500
    })
}
///////////////////
//// Обменник /////
///////////////////
function ex_minus() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Не хватает денег!',
        showConfirmButton: false,
        timer: 1500
    })
}
function ex_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
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
        title: 'Не правильно введены данные!',
        showConfirmButton: false,
        timer: 1500
    })
}
function not_loggin() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Ошибка!',
		text: 'Для начала необходимо посетить указанный сервер!',
        showConfirmButton: false,
        timer: 4500
    })
}
function ex_not_member() {
    Swal.fire({
        position: 'top',
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
        title: 'Перевод успешно совершён!',
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
		load_profile();
    }) 
}
///////////////////
///// Кейсы ///////
///////////////////
function case_server() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Сервер не выбран!',
        showConfirmButton: false,
        timer: 4500
    })
}
///////////////////
///// Разбан //////
///////////////////
function ub_minus() {
    Swal.fire({
        position: 'top',
        type: 'error',
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
        confirmButtonColor: '#35D59D',
        title: 'Кажется файл не был загружен...',
    })
}
function cloak_error() {
    Swal.fire({
        position: 'top',
        type: 'error',
        confirmButtonColor: '#35D59D',
        title: 'У вас недостаточно прав на загрузку плаща',
    })
}
function max_file() {
    Swal.fire({
        position: 'top',
        type: 'error',
        confirmButtonColor: '#35D59D',
        title: 'Размер файла превышает максимальный допустимый',
    })
}
function huyna() {
    Swal.fire({
        position: 'top',
        type: 'error',
        confirmButtonColor: '#35D59D',
        title: 'Загружаеый файл был получен только частично',
    })
}
function hz() {
    Swal.fire({
        position: 'top',
        type: 'error',
        confirmButtonColor: '#35D59D',
        title: 'Неизвестная ощибка...',
    })
}
function no_image() {
Swal.fire({
        position: 'top',
        type: 'error',
        confirmButtonColor: '#35D59D',
        title: 'Можно загружать только PNG изображения',
    })
}
function max() {
    Swal.fire({
        position: 'top',
        type: 'error',
        title: 'Недопустимый размер изображения',
    })
}
function skin_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
        confirmButtonColor: '#35D59D',
        title: 'Скин успешно загружен',
    })
}
function cloak_success() {
    Swal.fire({
        position: 'top',
        type: 'success',
        confirmButtonColor: '#35D59D',
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
        type: 'error'
    })
}
function tp_succes() {
   Swal.fire({
        position: 'top',
        title: 'Успех!',
	    showConfirmButton: false,
        timer: 1500,
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
        title: 'Введён неправельный текущий пороль!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function uncorect_pass1_2() {
    Swal.fire({
		position: 'top',
        title: 'Новый пороль не должен совпадать со старым!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function uncorect_pass2() {
    Swal.fire({
		position: 'top',
        title: 'Пороль не может быть меньше 8 или больше 16 символов!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function uncorect_pass3() {
    Swal.fire({
		position: 'top',
        title: 'Пороли не совпадают!',
	    showConfirmButton: false,
        timer: 3000
    })
}
function success_pass() {
    Swal.fire({
		position: 'top',
        type: 'success',
        title: 'Пароль успешно изменен!',
	    showConfirmButton: false,
        timer: 3000
    }).then((result) => {
		location.href='/'
    })
}