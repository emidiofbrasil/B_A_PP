<?php
/*

@JoseEmidioFrancelino
@5_Mai_2021
@SetAutoload

*/
spl_autoload_register(function ($class) {

    require_once(str_replace('\\', '/', $class . '.php'));
});