<?php

    include "../classes/Users.php";

    $user = new User;

    $user->register($_POST);

?>