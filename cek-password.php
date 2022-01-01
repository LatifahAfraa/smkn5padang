<?php

    $password = "tifa";
    $hash = "$2y$10$LzmdNgCv6fV1cBMO6AKO8uvswDgFbB0C4p1dDCwtSYf5nbHSqAifi";

    // $hash = password_hash($password, PASSWORD_BCRYPT);
    // echo $hash;

    var_dump(password_verify($password, $hash));