<?php
session_start();

require_once 'model/ValidationModel.php';
require_once 'controller/AuthController.php';
require_once 'controller/PreferenceController.php';

$page = $_GET['page'] ?? 'register';

switch ($page)
{
    case 'register':
        include 'view/register.php';
        break;
    case 'login':
        include 'view/login.php';
        break;
    case 'dashboard':
        include 'view/dashboard.php';
        break;
    case 'settings':
        include 'view/settings.php';
        break;
    case 'logout':
        session_destroy();
        header("Location: index.php?page=login");
        exit();
    default:
        include 'view/register.php';
        break;
}
?>