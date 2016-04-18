<?php
require 'ecore.inc.php';

session_destroy();
header('Location: '.$http_referer);

?>