<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Code
echo "<script>var time = 0;</script>";
foreach ($servers as $server) {
	echo '<div class="text-white bg-gradient text-center p-3 mb-2">'.$server['title'].'</div>
	      <div class="row justify-content-center">';
    foreach ($cases[$server['title']] as $case) {
		if ($case['title'] == $everyday_case_name) {
			if (time() > $everyday_case) {
			    $case_but = 'Выдать';
			} else {
			    $case_but = 'Купить';	
			}
		} else {
			$case_but = 'Купить';
		}
        echo '<div id="case_'.$case['name'].'" style="visibility: hidden;" class="card card-body col-md-3 m-2 donate-block">
                <span class="text-center donate-head mb-2"><b>'.$case['title'].'</b></span>
                <div class="text-center" style="font-size: 20px;"><b class="text-center text-gradient" style=" font-size: 60px;"><img width="70%" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;" src="/modules/lk/api/case/img/'.$case['img'].'"></b>
                    <br>
                    '.$case['cost'].' Рублей
                </div>
                <br>
                    <div class="text-center mb-2"><button id="buy_'.$case['name'].'" data-server="'.$server['title'].'" data-case="'.$case['name'].'" onclick="buy_case(this)" class="btn btn-outline-warning btn-rounded">'.$case_but.'</button></div>
            </div>';
		echo "<script>
			function case_".$case['name']."() {
			document.getElementById('case_".$case['name']."').style.visibility = 'visible';
			document.getElementById('case_".$case['name']."').style.animated
			var case_".$case['name']." = document.getElementById('case_".$case['name']."');
			case_".$case['name'].".classList.add('animated');
			case_".$case['name'].".classList.add('zoomIn');
			}
			time = time + 250;
			setTimeout(case_".$case['name'].", time);</script>";
   		 }
	echo '</div>';
}
?>
<script>
function buy_case(obj) {	
    var but_id = document.getElementById(obj.id);
    var casee = but_id.dataset.case;
    var server = but_id.dataset.server;
    $.ajax({
        url: "/modules/lk/api/case/dialog.php",
        type: "POST",
		data: {casee:casee,
		       server:server
		},
        success: function(html){
					$("#ajax").html(html);
        }
    });	   
}  
</script>
