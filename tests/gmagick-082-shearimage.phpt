--TEST--
shearImage test
--SKIPIF--
<?php
/* $Id: gmagick-082-shearimage.phpt 280206 2009-05-09 18:22:48Z vito $ */
if(!extension_loaded('gmagick')) die('skip');
?>
--FILE--
<?php
$gm = new Gmagick();
$color=new GmagickPixel("rgb(255,255,255)");
$gm->read("magick:rose");
$gm->shearImage($color, 0.2, 0.2);
echo "ok";
?>
--EXPECTF--
ok