<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. 'modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. 'modules/lk/api/mysql.php');
//Code
echo "<script>var time = 0;</script>";
foreach ($servers as $server) {
    $inf_don = "infinity_donate_".$server['title'];
    $infinity_donate=$mysqli->query("SELECT `infinity_donate_". $server['title'] ."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$inf_don;
    $don_1 = "donate_". $server['title'];
    $donate_1=$mysqli->query("SELECT `donate_". $server['title'] ."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don_1;
    $don_tm = "donate_time_".$server['title'];
    $donate_time=$mysqli->query("SELECT `donate_time_". $server['title'] ."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don_tm;
    echo  '<div class="text-white bg-gradient text-center p-3 mb-2">'. $server['title'] .'</div>
           <div class="row justify-content-center">';
    foreach ($donates as $donate) {
        $cost = ceil($donate['cost'] - $donate['cost'] * $donate['price']);
        echo  '<div id = "block_'. $donate['title'] .'" style="visibility: hidden;" class="card card-body col-md-3 m-2 donate-block">
               <span class="text-center donate-head mb-2"><b>'.$donate['title'].'</b></span>
               <div class="text-center" style="font-size: 20px;">';
		if ($cost < $donate['cost']) {
		    echo  '<div class="sale-block "><h3><strike>'. $donate['cost'] .' RUB</strike></h3></div>';
		}		
        echo   '<b class="text-center text-gradient" style=" font-size: 60px;">'. $cost .'</b>
                <br>
                Рублей
                </div>
                <br>
                <div class="text-center mb-2">';
		if ($infinity_donate==$donate['pex']) {
            echo '<button id="give_'. $donate['pex'] .'" data-server="'. $server['title'] .'" data-donate="'. $donate['pex'] .'" onclick="donate_give(this)" class="btn btn-outline-warning btn-rounded">Выдать</button>';
		} else {
			if ($donates[$infinity_donate]['cost'] > $donate['cost'] || $donates[$donate_1]['cost'] > $donate['cost']) {
				echo '<button id="buy_'. $donate['pex'] .'" data-server="'. $server['title'] .'" data-donate="'. $donate['pex'] .'" data-server="'. $server['title'] .'" onclick="not_buy()" class="btn btn-outline-warning btn-rounded">Нельзя купить!</button>';
			} else {
				if ($donate_1!=$donate['pex']) {
					echo '<button id="buy_'.$donate['pex'].'" data-server="'. $server['title'] .'" data-donate="'. $donate['pex'] .'" onclick="donate_step1(this)" class="btn btn-outline-warning btn-rounded">Купить!</button>';	
				} else {
					echo  '<div class="sale-block_2 "><h3>ДО '. date('d.m.Y', $donate_time) .'</h3></div>';
				}
			}
		}
        echo '</div></div>';
	    echo "<script>
	    function block_". $donate['title'] ."() {
	    document.getElementById('block_". $donate['title'] ."').style.visibility = 'visible';
	    document.getElementById('block_". $donate['title'] ."').style.animated
	    var block_". $donate['title'] ." = document.getElementById('block_". $donate['title'] ."');
	    block_". $donate['title'] .".classList.add('animated');
	    block_". $donate['title'] .".classList.add('zoomIn');
	    }
	    time = time + 250;
	    setTimeout(block_". $donate['title'] .", time);</script>";
    } 
    echo '</div>';
}
?>
<script>
function donate_step1(obj) {
    var but_id = document.getElementById(obj.id);
    var donate = but_id.dataset.donate;
    var server = but_id.dataset.server;
    $.ajax({
        url: "/modules/lk/api/donate/step2.php",
        type: "POST",
        data: {donate:donate,
	    	server:server
	    },
        success: function(html){
    		$("#ajax").html(html);
        }
    });	   
}    
function donate_give(obj) {	
    var but_id = document.getElementById(obj.id);
    var donate = but_id.dataset.donate;
    var server = but_id.dataset.server;
	connect();
    $.ajax({
        url: "/modules/lk/api/donate/give_1.php",
        type: "POST",
		data: {donate:donate,
		    server:server
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });	   

}  
</script>