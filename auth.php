<?php
if($_COOKIE['user'] == 'true')
setcookie('user', 'true', time() - 10, '/', '.malyovashka.art'); //, '.malyovashka.com' if cookie should work on all subdomen
else
setcookie('user', 'true', time() + 10, '/');

header('location: /')
 ?>
