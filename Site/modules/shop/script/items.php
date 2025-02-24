
<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$server = $_GET['server'];
$shopsearch = $_GET['shopsearch'];
$sort_type = $_GET['sort_type'];
$sort_way = $_GET['sort_way'];
$price_minimum = $_GET['price_minimum'];
$price_maximum = $_GET['price_maximum'];
$price_type = $_GET['price_type'];

if ($sort_type == 'price') {
	$sort_type = 'price';
} elseif ($sort_type == 'name') {
	$sort_type = 'name';
} elseif ($sort_type == 'date') {
	$sort_type = 'id';
} else {
	$sort_type = 'price';
}

if ($sort_way == 'plus') {
	$sort_way = 'ASC';
} elseif ($sort_way == 'minus') {
	$sort_way = 'DESC';
} else {
	$sort_way = 'ASC';
}

if ($price_type == 'money') {
	$price_type = 'price';
	$price_type_text = 'монет';
} elseif ($price_type = 'votes') {
	$price_type = 'price_v';
	$price_type_text = 'голосов';
} else {
	$price_type = 'price';
	$price_type_text = 'монет';
}

$filter = '';
if (preg_match('/^\+?\d+$/', $price_minimum)) {
    $filter .= ' AND `price` >= '.$price_minimum*2;
}
if (preg_match('/^\+?\d+$/', $price_maximum)) {
    $filter .= ' AND `price` <= '.$price_maximum*2;
}

$sets = $mysqli->query("SELECT * FROM `flare_shop` WHERE `name` LIKE '%$shopsearch%' AND `server` LIKE '$server'  AND `action` != 0 $filter ORDER BY $sort_type $sort_way");
while($item = $sets->fetch_assoc()) {
	if ($item[$price_type]>0) {
		print '<tr class="item" name="'.$item["name"].'" id="shop_catalog_item_'.$item["id"].'">';
		print     '<td class="icon"><img src="'.$item["image"].'"></td>';
		print     '<td class="title" style="width: 45%">'.$item["name"].'   <span style="padding: 2px 4px; font-weight: 700; font-size: 14px; color: #fff; background: linear-gradient(120deg, #541d7e 0%, #7328a9 100%);; border-radius: 4px;" >Набор</span>';
		if ($is_admin = true)
			print '<i onclick="item_delete(id = '.$item["id"].', name=\''.$item["name"].'\')" class="fa fa-trash" aria-hidden="true">';
		print '</i></td>';
		print     '<td class=$price_type><div style="visibility: hidden; padding: 2px 4px; font-weight: 700; font-size: .95rem; color: #fff; background: linear-gradient(120deg, #541d7e 0%, #7328a9 100%);; border-radius: 4px;" title="Скидка 50%">-50%</div>  </td>';
		print     '<td class="cost" title="Цена предмета">'.ceil($item[$price_type]).'  '.$price_type_text.'.</td>';
		print     '<td data-id="'.$item["id"].'" data-price="'.ceil($item[$price_type]).'" data-name="'.$item["name"].'" data-image="/uploads/kits/'.mb_strtolower($server).'_'.$item["block_id"].'.png" onclick="buy_set(this)"  class="button buyitem" style="font-size: 14px; width: 22%" title="Нажмите здесь, чтобы просмотреть набор '.$item["name"].'" id="shop_set'.$item["id"].'">Просмотреть <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></td>';
		print '</tr>';
	}
}
$items = $mysqli->query("SELECT * FROM `flare_shop` WHERE `name` LIKE '%$shopsearch%' AND `server` LIKE '$server'  AND `action` = 0 $filter ORDER BY $sort_type $sort_way");
while($item = $items->fetch_assoc()) {
	if ($item[$price_type]>0) {
		print '<tr class="item" name="'.$item["name"].'" id="shop_catalog_item_'.$item["id"].'">';
		print     '<td class="icon"><img src="'.$item["image"].'"></td>';
		print     '<td class="title" style="width: 45%">'.$item["name"].'  ';
		if ($is_admin = true)
			print '<i onclick="item_delete(id = '.$item["id"].', name=\''.$item["name"].'\')" class="fa fa-trash" aria-hidden="true">';
		print '</i></td>';
		print     '<td class=$price_type><div style="visibility: hidden; padding: 2px 4px; font-weight: 700; font-size: .95rem; color: #fff; background: linear-gradient(120deg, #541d7e 0%, #7328a9 100%);; border-radius: 4px;" title="Скидка 50%">-50%</div>  </td>';
		print     '<td class="cost" title="Цена предмета">'.$item["amount"].' штука за '.ceil($item[$price_type]).'  '.$price_type_text.'.</td>';
		print     '<td onclick="buy_item(this)" data-ptype="'.$price_type.'" data-price="'.$item[$price_type].'" data-name="'.$item["name"].'" data-amount="'.$item["amount"].'" data-id="'.$item["id"].'" data-image="'.$item["image"].'"  class="button buyitem" title="Нажмите здесь, чтобы купить '.$item["name"].'" id="shop_item_'.$item["id"].'">Купить <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></td>';
		print '</tr>';
	}
}
if ($is_admin!=true)
	die();
?>
<script>
function item_delete(id, name) {
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
	confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    text: "Что хотите удалить " + name,
    type: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да'
}).then((result) => {
    if (result.value) {
        $.ajax({
            url: "/modules/shop/delete.php",
            type: "GET",
	        data: {
				id:id
				},
            success: function(html){
			    $("#ajax").html(html);
            }
        });
    } else {
        Swal.fire({
	        position: 'top',
            title: 'Действие отменено',
            showConfirmButton: false,
			confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
}

</script>
