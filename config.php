<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();

// Database connection
$CFG->dbtype    = 'mysqli';  // Use mysqli for MySQL
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_db';   // your database name
$CFG->dbuser    = 'root';        // default XAMPP MySQL user
$CFG->dbpass    = '';            // leave empty if no password
$CFG->prefix    = 'mdl_';

$CFG->dboptions = [
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => '',
    'dbcollation' => 'utf8mb4_unicode_ci',
];

// Replace this with your local URL
$CFG->wwwroot   = 'http://localhost/moodle';

// Replace this with your actual data directory path
$CFG->dataroot = 'F:\\xampp\\moodledata';

// Permissions for created directories
$CFG->directorypermissions = 0777;

// Admin directory name
$CFG->admin = 'admin';

// Include Moodle setup
require_once(__DIR__ . '/lib/setup.php');
