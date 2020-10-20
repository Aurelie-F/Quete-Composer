<?php

use App\Wcs\Hello;

require '../src/Wcs/Hello.php';

$hello = new Hello();

echo $hello->talk();
