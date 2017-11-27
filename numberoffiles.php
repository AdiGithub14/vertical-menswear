<?php

//Ranit Created

$directory = 'products/design/design1/';
$files = count(glob($directory . "*.png"));

if ( $files !== false )
{
   // $filecount = count( $files );
    echo $files;
}
else
{
    echo 0;
}


?>