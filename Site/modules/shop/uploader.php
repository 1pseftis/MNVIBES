<meta charset="utf-8">
<?php
echo '<a href="/shop">(В магазин)</a> ';

require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

if ($is_admin!=true) { die('Access deny'); }

/**
 * Загрузка картинки из формы
 * @see http://denisyuk.by/all/polnoe-rukovodstvo-po-zagruzke-izobrazheniy-na-php/
 */

// Перезапишем переменные для удобства
$filePath  = $_FILES['block_uploader']['tmp_name'];
$errorCode = $_FILES['block_uploader']['error'];
$item_id = $_POST['addblock_id'];
$item_data = $_POST['addblock_data'];
$item_command = $_POST['addblock_command'];
$item_amount = $_POST['addblock_amount'];
$item_cost = $_POST['addblock_cost'];
$item_server = $_POST['addblock_server'];
$item_name = $_POST['addblock_name'];

$item_vote = $_POST['addblock_vote'];

// Проверим на ошибки
if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($filePath)) {

    // Массив с названиями ошибок
    $errorMessages = [
        UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
        UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
    ];

    // Зададим неизвестную ошибку
    $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';

    // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
    $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;

    // Выведем название ошибки
    die($outputMessage);
}

// Создадим ресурс FileInfo
$fi = finfo_open(FILEINFO_MIME_TYPE);

// Получим MIME-тип
$mime = (string) finfo_file($fi, $filePath);

// Закроем ресурс
finfo_close($fi);

// Проверим ключевое слово image (image/jpeg, image/png и т. д.)
if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');

// Результат функции запишем в переменную
$image = getimagesize($filePath);

// Зададим ограничения для картинок
$limitBytes  = 1024 * 1024 * 5;
$limitWidth  = 1024;
$limitHeight = 1024;

// Проверим нужные параметры
if (filesize($filePath) > $limitBytes) die('Размер изображения не должен превышать 5 Мбайт.');
if ($image[1] > $limitHeight)          die('Высота изображения не должна превышать 256 точек.');
if ($image[0] > $limitWidth)           die('Ширина изображения не должна превышать 256 точек.');

// Сгенерируем новое имя файла на основе MD5-хеша
$name = md5_file($filePath);

// Сгенерируем расширение файла на основе типа картинки
$extension = image_type_to_extension($image[2]);

// Сократим .jpeg до .jpg
$format = str_replace('jpeg', 'jpg', $extension);

// Переместим картинку с новым именем и расширением в папку /pics
if (!move_uploaded_file($filePath, __DIR__ . '/uploads/' . $name . $format)) {
    die('При записи изображения на диск произошла ошибка.');
} else {

	    if (preg_match('/^\d+$/',$item_cost) && preg_match('/^\d+$/',$item_vote)) {
			if (preg_match('/^\d+$/',$item_amount && $item_amount>0 && $item_amount<=128)) {
			    $mysqli->query("INSERT INTO `flare_shop`(`id`, `image`, `block_id`, `block_data`, `block_command`, `amount`, `price`, `price_v`, `name`, `action`, `server`) VALUES ('0','/modules/shop/uploads/" .$name.$format."','$item_id', '$item_data','$item_command','$item_amount','$item_cost','$item_vote','$item_name','0','$item_server')");
				header('Location: https://UniversalStudio.online/shop?cat=items&server='.$item_server);
		    } else { die('Количество - целое число от 1 до 128'); }
		}  else { die('Цена - целое число'); }

}