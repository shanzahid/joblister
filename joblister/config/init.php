<?php

function myAutoload($className)
{
    include_once 'lib/' . $className . '.php';
}

// Register the autoload function
spl_autoload_register('myAutoload');

?>