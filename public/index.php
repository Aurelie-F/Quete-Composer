<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require '../src/Wcs/Hello.php';
require '../vendor/autoload.php';

$hello = new Hello();
echo $hello->talk();
?>
<br>
<?php
$sayHello = new SayHello();
echo $sayHello->world();
