<?php
if($_COOKIE['user'] == 'true')
setcookie('user', 'true', time() - 20, '/'); //, '.malyovashka.com' if cookie should work on all subdomen
else
setcookie('user', 'true', time() + 20, '/');

header('location: /')
 ?>
