<?php
$cookie_name = 'cookie_name';
$cookie_value = 'cookie_value';
$expires = time()+(86400*30);
$path = '/';

setcookie($cookie_name,$cookie_value,$expires,$path);
