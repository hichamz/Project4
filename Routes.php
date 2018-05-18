<?php

function call($controller, $action) {
    // require the file that matches the controller name
    $includeFile = sprintf('%s/controllers/%s.php', APP_PATH, $controller);
    require_once($includeFile);

    // call the function that matches the action name
    call_user_func($action);
}

function isAdmin() {
    return isset($_SESSION['admin']) && $_SESSION['admin'] === true;
}

// check if the controller and action are set, otherwise fall back to default controller and action
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'welcome';
    $action = 'login';
}

// a list of the controllers we have and their actions we consider "allowed" values
$allowedControllers = array(
    'welcome' => array ('welcome', 'error', 'login')
);

// allow extra controllers when user is logged in as admin
if (isAdmin()) {
    $allowedControllers['admin/products'] = array (
        'showall', 'editform', 'edit', 'delete', 'add'
    );
    $allowedControllers['admin/customers'] = array (
        'showall', 'editform', 'edit', 'delete', 'add'
    );
}

// check that the requested controller and action are both allowed
// if someone tries to access something else (s)he will be redirected to the error action of the pages controller
if (!array_key_exists($controller, $allowedControllers)) {
    call('welcome', 'error');
} else if (!in_array($action, $allowedControllers[$controller])) {
    call('welcome', 'error');
} else {
    call($controller, $action);
}
