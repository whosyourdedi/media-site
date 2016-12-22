<?php
function genstring($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $rstring = '';
    for ($i = 0; $i < $length; $i++) {
        $rstring .= $characters[rand(0, $charactersLength - 1)];
    }
    
    return $rstring;
}
?>
