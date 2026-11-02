<?php
// Runs every pattern demo in order:  php run-all.php
foreach (glob(__DIR__ . '/*', GLOB_ONLYDIR) as $dir) {
    echo str_repeat('#', 60) . PHP_EOL . strtoupper(basename($dir)) . PHP_EOL . str_repeat('#', 60) . PHP_EOL;
    passthru('cd ' . escapeshellarg($dir) . ' && php index.php');
    echo PHP_EOL;
}
