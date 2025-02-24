<style>
	.sale{
		position:relative;
		height: 152px;
		width:90%;
		border: 1px solid #C2C2C2;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
		margin: 3px;
		text-align: center;
		opacity: 0.8;
		padding: 6px;
	}
	.presale{
	float: left;
	width:25%;
	}
	.btn-buy{-moz-transition: all 0.3s ease 0s;background: #323232;border: 1px solid #2B2B2B;border-radius: 2px 2px 2px 2px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.43);color: #FFFFFF;cursor: pointer;font-size: 8pt;min-width: 90px;padding: 4px 8px;text-align: center;text-shadow: 0 -1px 0 #2B2B2B;}
	.btn-buy:hover {background-color: #535353;color: #FFFFFF;}
	.btn-shop{background-color:#ffffff;height:27px;margin-top:5px;border:1px solid #9bb795;padding:2px 10px 3px 10px;text-decoration:none;color:#464646;font-family:"Segoe ui";font-size:14px;font-weight:600;text-align:center;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;-moz-box-shadow:0px 2px 2px #c2c2c2;-webkit-box-shadow:0px 2px 2px #c2c2c2;box-shadow:0px 2px 2px #c2c2c2;}
	.btn-shop:hover{background-color:#e3f4e1;-moz-box-shadow:0px 1px 1px #c2c2c2;-webkit-box-shadow:0px 1px 1px #c2c2c2;box-shadow:0px 1px 1px #c2c2c2;}
	.field{margin:0;padding:0;border:none;float:left;display:inline;width:33.333%;}
	.form{width:90%;}
	.carousel .item {
	  display: none;
	  position: relative;
	  -webkit-transition: 0.6s ease-in-out left;
	  -moz-transition: 0.6s ease-in-out left;
	  -o-transition: 0.6s ease-in-out left;
	  transition: 0.6s ease-in-out left;
	}
	.carousel .item > img {
	  display: block;
	  line-height: 1;
	}
	.warningbad {
		border: 1px #D42A2A dashed;
		background: #FFE6E6;
		padding: 7px;
		margin-bottom: 10px;
		border-radius: 7px;
	}

	.warninggood {
		border: 1px #6ABF4B dashed;
		background: #E9FFE0;
		padding: 7px;
		margin-bottom: 10px;
		border-radius: 7px;
	}
	.uk {
		-moz-transition: all 0.2s ease 0s;
		background: url("delete.png") no-repeat scroll 0 0 transparent;
		border: 0 none;
		display: block;
		opacity: 1;
		padding: 0;
		position: absolute;
		right: 3px;
		top: 3px;
		width: 25px !important;
        height: 25px;
	}
	.uk:hover {
		opacity: 0.9;
	}
	.um {
		-moz-transition: all 0.2s ease 0s;
		background: url("editblock.png") no-repeat scroll 0 0 transparent;
		border: 0 none;
		display: block;
		opacity: 1;
		padding: 0;
		position: absolute;
		left: 3px;
		top: 3px;
		width: 25px !important;
        height: 25px;
	}
	.um:hover {
		opacity: 0.9;
	}
	.slider {
		height:260px;
		position:relative;
		padding-bottom:26px;
		padding:10px;

		-moz-box-shadow: 0 0 10px rgba(0,0,0,0.5);
			-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.5);
					box-shadow: 0 0 10px rgba(0,0,0,0.5);

		  -webkit-border-radius: 6px;
			 -moz-border-radius: 6px;
				  border-radius: 6px;
				  z-index:40;
		}

	.sliderContent {
		height:260px;
		clear:both;
		position:relative;
		overflow:hidden;
		}
	.sliderContent .item {
		position:absolute;
		height:260px;
		background:#fff;
		overflow-y:scroll;
	}
	#ach{
		padding:5px;
		border: 1px solid #DDD;
		width:32px;
		height:32px;
		float:left;}

	#achs{
		padding:5px;
		width:32px;
		height:32px;
		  -webkit-border-radius: 6px;
			 -moz-border-radius: 6px;
				  border-radius: 6px;
			   -moz-box-shadow: 0 0 5px rgba(0,100,210,0.5);
			-webkit-box-shadow: 0 0 5px rgba(0,100,210,0.5);
					box-shadow: 0 0 5px rgba(0,100,210,0.5);
		}

	#ach:hover{
		background: #eee;
		}
	#ach input[type=radio]
	  {display:none;
	  margin:0px;
	  padding:0px;}
</style>
<script>
 function doIcon(pVal)
 {
  var div = document.getElementById('img_box');
  var div1 = document.getElementById('b1');
  var img = 'images/' + pVal;
  div.style.background = "url( '" + img + "') no-repeat center";
  div1.value = pVal;
 }
</script>
<?php
define ('BLOCKSHOP', true );
//if(!defined('DATALIFEENGINE')){die( "Hacking attempt!" );}
///инклудим конфиг///
require_once ('config.php');

///кнопки серверов///
if($group == 1){$ttk='<input type="hidden" name="add" value="0"><button type="submit" class="btn-shop" name="edit" value="0" style="font-size:10px;width:100%;">Добавить блок</button>';}
$head = '<form method="post">'.$ttk.$bob.'</form><br><br>';
///инклудим функционал
include ('functions.php');
///вывод сообщения об удаче или ошибке
$message ='<center>'.$message.'</center>';///сообщение об удаче или ошибке
///список блоков
if(!isset($_POST['edit'])){
if(in_array($_POST['server'],$s)){$serv = mysqli_real_escape_string($_POST['server']);}else{$serv = $s['0'];}
$sql = mysqli_query("SELECT * FROM {$btable} WHERE server='{$serv}' ORDER BY id");
while($result = mysqli_fetch_array($sql)) {
	$d1 = "";$act = "";
	if($result['action'] !== '0') {$act = 'Скидка '.$result['action'].'%';}
	if($group == 1) {$d1 = '<form method="post" style="height:5px;"><button type="submit" name="edit" value="'.$result['id'].'" class="um" title="Редактировать"></button><button type="submit" name="del" value="'.$result['id'].'" class="uk" title="Удалить"></button></form>';}
	$content.='<div id="m'.$result['id'].'" class="presale"><div class="sale" title="'.$act.'" style="height:152px;font-size:15px;">'.$d1.'<center><b>'.$result['name'].'</b><br /><img src="'.$dir.'images/'.$result['image'].'"><br />
	<form method="post"><b>'.$result['price'].' руб за '.$result['amount'].' шт.</b><br>Кол-во: <input type="number" style="width:50px;" name="amount" onkeyup="this.value=this.value.replace(/[^\d\.]+/g,\'\');" value="1"> шт.<br />
    <br><button class="btn-buy" name="buy" value="'.$result['id'].'" style="font-size:10px">Купить</button></center></form></div></div>';
}
}
echo $head.$message.$content;
///Примечание: все запросы хорошо фильтруются, дыр и инъекций, как может многим показаться, здесь нет.
?>