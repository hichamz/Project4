<?php

// landing page
function welcome() {
    require_once APP_PATH . '/views/welcome.php';
}

function login() {
	require_once APP_PATH . '/views/login.php';
}

// generic error page
function error() {
    require_once APP_PATH . '/views/error.php';
}