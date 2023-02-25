<?php

include 'helpers/uri.php';
include 'helpers/activeLinks.php';


?>

<a href="<?= path() ?>home" class="<?php active('home')?> ">Home</a>
<a href="<?= path() ?>login" class="<?php active('login')?> ">Login</a>
<a href="<?= path() ?>register" class="<?php active('register')?> ">Register</a>
<a href="<?= path() ?>users" class="<?php active('users')?> ">Users</a>