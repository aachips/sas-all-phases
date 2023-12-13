<?php
    if($_SERVER['SERVER_NAME'] == 'localhost') {
        define("DB_SERVER", "localhost");
        define("DB_USER", "sally");
        define("DB_PASS", "somePa55word");
        define("DB_NAME", "salamanders");
    }
    else
    {
        define("DB_SERVER", "aachipsc");
        define("DB_USER", "aachipsc_webuser");
        define("DB_PASS", "12345Bb");
        define("DB_NAME", "aachipsc_salamanders");
    }
