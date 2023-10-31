<?php
    require "function.php";

    setPngHeader();

    $alphabet = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwVxXyYzZ0123456789";

    makeCaptchaImg(makeCaptcha($alphabet,8));
?>