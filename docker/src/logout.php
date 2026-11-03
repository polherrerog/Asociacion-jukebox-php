<?php
require __DIR__ . '/lib/sesion.php';

session_unset();
session_destroy();
header('Location: login.php');
exit;
