<?php
if($_COOKIE['user'] == 'true')
setcookie('user', 'true', time() - 20, '/');
else
setcookie('user', 'true', time() + 20, '/');

header('location: /')
 ?>
