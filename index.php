<?php
/**
 * Configuration
 *
 * See README.md for detailed description of each directive.
 */
$config['allowed_ips'] = array(
    '127.0.0.1',
    '::1'
);

$config['software'] = ''; // one of XAMPP or WAMP

// ///
// DO NOT TOUCH CODE BELOW
// ///
if (!in_array($_SERVER['REMOTE_ADDR'], $config['allowed_ips'])) {
    exit;
}

// Predefined config values for known AMP stacks
$defaults = array();

if (strtolower($config['software']) == 'xampp') {
    $defaults['db']['host'] = 'localhost';
    $defaults['db']['username'] = 'root';
    $defaults['db']['password'] = '';
}

$config = array_merge($defaults, $config);

$phpDirectives = array(
    'error_reporting',
    'max_execution_time',
    'memory_limit',
    'timezone',
    'include_path',
    'upload_max_filesize',
);
?><!doctype html>
<html lang="en">
<head>
    <title>DevServ Home</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>DevServ Home</h1>

    <section class="php">
        <h2>Configuration</h2>
    </section>

    <section class="apache">
    </section>

    <section class="mysql">
    </section>
</body>
</html>