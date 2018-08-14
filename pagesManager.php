<?php
require_once('mvc/DatabaseManager.php');

$pages=DatabaseManager::query('SELECT * FROM page');
$sets=DatabaseManager::query('SELECT * FROM settings')[0];