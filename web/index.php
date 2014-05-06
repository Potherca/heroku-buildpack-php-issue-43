<?php

highlight_file(__FILE__);

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    echo 'Autoloader found';
} else {
    echo 'Autoloader was *NOT* generated';
}

/*EOF*/

