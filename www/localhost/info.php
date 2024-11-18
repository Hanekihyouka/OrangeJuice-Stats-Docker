<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<h1 style="text-align: center;">It works! OrangeJuiceStat is running.</h1>';
echo '<h2>https://github.com/Hanekihyouka/OrangeJuice-Stats</h2>';
echo '<ul>';
echo '<li>PHP: ', PHP_VERSION, '</li>';
echo '<li>Nginx: ', $_SERVER['SERVER_SOFTWARE'], '</li>';
echo '<li><a href="/global.php">global.php</a></li>';
echo '<li><a href="/player.php">player.php</a></li>';
echo '</ul>';

echo '<h2>Extensions</h2>';
printExtensions();

function printExtensions()
{
    echo '<ol>';
    foreach (get_loaded_extensions() as $i => $name) {
        echo "<li>", $name, '=', phpversion($name), '</li>';
    }
    echo '</ol>';
}

