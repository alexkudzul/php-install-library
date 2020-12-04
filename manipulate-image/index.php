<?php

require_once '../vendor/autoload.php';
// Se agrego manualmente ya que el autoload no lo esta detectando
require_once '../vendor/masterexploder/phpthumb/src/PHPThumb/PHPThumb.php';

$image_orignal = 'image-original.png';
$save_in = 'image-modified.png';

$thumb = new PHPThumb\GD($image_orignal);

// Redimencionar
$thumb->resize(250,250);

// Recortar
// $thumb->crop(250,250, 120, 120);
$thumb->cropFromCenter(220, 100);

$thumb->show();
$thumb->save($save_in);

// Al ejecutar la url http://php-install-library.test/manipulate-image/
// Crea la imagen modificada
?>