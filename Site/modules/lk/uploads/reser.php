<?php
$login=$_GET['login']; //получаем ник игрока
if (file_exists('skins/'.$login.'.png')) {
function crop($image, $x_o, $y_o, $w_o, $h_o) {
    if (($x_o < 0) || ($y_o < 0) || ($w_o < 0) || ($h_o < 0)) {
      echo "Некорректные входные параметры";
      return false;
    }
    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
      $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
      $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
      echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
      return false;
    }
    if ($x_o + $w_o > $w_i) $w_o = $w_i - $x_o; // Если ширина выходного изображения больше исходного (с учётом x_o), то уменьшаем её
    if ($y_o + $h_o > $h_i) $h_o = $h_i - $y_o; // Если высота выходного изображения больше исходного (с учётом y_o), то уменьшаем её
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopy($img_o, $img_i, 0, 0, $x_o, $y_o, $w_o, $h_o); // Переносим часть изображения из исходного в выходное
    $func = 'image'.$ext; // Получаем функция для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
  }
copy('skins/'.$login.'.png', 'head/'.$login.'.png');
copy('skins/'.$login.'.png', 'dynmap/'.$login.'.png');
$data = getimagesize("skins/".$login.".png"); 
$width = $data[0]; 
$w = $width/8;
crop('head/'.$login.'.png', $w, $w, $w, $w); // Вызываем функцию
/*   include('classSimpleImage.php');
   $image = new SimpleImage();
   $image->load('EoHaRau.png');
   $image->resizeToWidth(32);
   $image->save('EoHaRau2.png');*/
} else {
function crop($image, $x_o, $y_o, $w_o, $h_o) {
    if (($x_o < 0) || ($y_o < 0) || ($w_o < 0) || ($h_o < 0)) {
      echo "Некорректные входные параметры";
      return false;
    }
    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
      $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
      $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
      echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
      return false;
    }
    if ($x_o + $w_o > $w_i) $w_o = $w_i - $x_o; // Если ширина выходного изображения больше исходного (с учётом x_o), то уменьшаем её
    if ($y_o + $h_o > $h_i) $h_o = $h_i - $y_o; // Если высота выходного изображения больше исходного (с учётом y_o), то уменьшаем её
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopy($img_o, $img_i, 0, 0, $x_o, $y_o, $w_o, $h_o); // Переносим часть изображения из исходного в выходное
    $func = 'image'.$ext; // Получаем функция для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
  }
copy('skins/default.png', 'head/'.$login.'.png');
copy('skins/default.png', 'dynmap/'.$login.'.png');
$data = getimagesize("skins/default.png"); 
$width = $data[0]; 
$w = $width/8;
}
function resize($image, $w_o = false, $h_o = false) {
    if (($w_o < 0) || ($h_o < 0)) {
      echo "Некорректные входные параметры";
      return false;
    }
    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
      $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
      $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
      echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
      return false;
    }
    /* Если указать только 1 параметр, то второй подстроится пропорционально */
    if (!$h_o) $h_o = $w_o / ($w_i / $h_i);
    if (!$w_o) $w_o = $h_o / ($h_i / $w_i);
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // Переносим изображение из исходного в выходное, масштабируя его
    $func = 'image'.$ext; // Получаем функция для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
  }
  /* Вызываем функцию с целью уменьшить изображение до ширины в 100 пикселей, а высоту уменьшив пропорционально, чтобы не искажать изображение */
crop('head/'.$login.'.png', $w, $w, $w, $w); // Вызываем функцию
copy('head/'.$login.'.png', 'head_128/'.$login.'.png');
resize('head_128/'.$login.".png", 128); // Вызываем функцию
resize('dynmap/'.$login.".png", 64); // Вызываем функцию
crop('dynmap/'.$login.'.png', 0, 0, 64, 32); // Вызываем функцию

$im = imagecreatefrompng('skins/'.$login.'.png');
list($width, $height, $type, $attr) = getimagesize('skins/'.$login.'.png');
if ($width==$height) {
	$height = $height/2;
}
$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $width, 'height' => $height]);
if ($im2 !== FALSE) {
    imagepng($im2, 'skins_old/'.$login.'.png');
    imagedestroy($im2);
}
imagedestroy($im);
//crop('skins_old/'.$login.'.png', 0, 0, 64, 32); // Вызываем функцию
?>