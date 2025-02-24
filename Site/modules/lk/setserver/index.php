<head>
<link href="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.js"></script>
</head>
<body>
<script>
var login;
login = '<?php $login = $is_logged ? $member_id['name'] : 'Гость'; echo $login;?>';
    $.ajax({
        url: "/setserver/scripts/test.php",
        type: "POST",
		data: {login:login},
        success: function(html){
					$("#setserver").html(html);
        }
    });
function setalert()
{
swal({
  title: 'Выберете основной сервер',
  input: 'select',
  background: '#15101a',
  type: 'question',
  html:
    '<p align="left"><b>Основной сервер</b> - это сервер информация с которого будет выводиться в мини-профиле (баланс, группа и т. п.). Просто выберете сервер на котором играли или планируете играть</p><br>',
  allowOutsideClick: false,
  allowEscapeKey: false,
  inputOptions: {
    'galaxy': 'Galaxy',
	'terrafirm': 'TerraFirm',
	'technomagic': 'TechnoMagic',
  },
  inputPlaceholder: '- не выбран -',
  showCancelButton: false,
  inputValidator: function (value) {
    return new Promise(function (resolve, reject) { 
      if (value !== '') {
        resolve();
      } else {
        reject('Вы не выбрали основной сервер!');
      }
    });
  }
}).then(function (result) {
var hash;
hash = '<?php $login = $is_logged ? $member_id['hash'] : 'Гость'; echo $login;?>';
var login;
login = '<?php $login = $is_logged ? $member_id['name'] : 'Гость'; echo $login;?>';
    $.ajax({
        url: "/setserver/scripts/set.php",
        type: "POST",
		data: {
                        hash: hash,
                        login: login,
						result: result
            },
        success: function(html){
					$("#setserver").html(html);
        }
    });
});
}
function editalert()
{
swal({
  title: 'Выберете основной сервер',
  input: 'select',
  background: '#15101a',
  type: 'question',
  html:
    '<p align="left"><b>Основной сервер</b> - это сервер информация с которого будет выводиться в мини-профиле (баланс, группа и т. п.). Просто выберете сервер на котором играли или планируете играть</p><br>',
  inputOptions: {
    'galaxy': 'Galaxy',
	'terrafirm': 'TerraFirm',
	'technomagic': 'TechnoMagic'
  },
  inputPlaceholder: '- не выбран -',
  showCancelButton: true,
  showCloseButton: true,
  cancelButtonText: "Отмена",
  inputValidator: function (value) {
    return new Promise(function (resolve, reject) { 
      if (value !== '') {
        resolve();
      } else {
        reject('Вы не выбрали основной сервер!');
      }
    });
  }
}).then(function (result) {	
var hash;
hash = '<?php $login = $is_logged ? $member_id['hash'] : 'Гость'; echo $login;?>';
var login;
login = '<?php $login = $is_logged ? $member_id['name'] : 'Гость'; echo $login;?>';
    $.ajax({
        url: "/setserver/scripts/set.php",
        type: "POST",
		data: {
                        hash: hash,
                        login: login,
						result: result
            },
        success: function(html){
					$("#setserver").html(html);
        }
    });
});
}
</script>
<div id="setserver"></div>	
</body>