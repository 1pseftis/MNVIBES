<script>
Swal.fire({
  position: 'top',
  title: 'Скин успешно удалён',
  type: 'success',
  showConfirmButton: false,
  timer: 1500,
  confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
}).then((result) => {
    location.reload();
})
</script>
<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
unlink('skins/'.$login.'.png'); 
?>
