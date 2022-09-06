<?php
$request = ''.$_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/form.php';
        break;
    case '/form' :
        require __DIR__ . '/form.php';
        break;
    case '/form_confirmation' :
        require __DIR__ . '/form-confirmation.php';
        break;
    case '/form_thanks' :
        require __DIR__ . '/form-thanks.php';
        break;
    case '/send_mail' :
        require __DIR__ . '/sendMail.php';
        break;
    case '/admin/csv' :
        require __DIR__ . '/admin/csv.php';
        break;
    case '/admin/csv_export' :
        require __DIR__ . '/admin/csv_export.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}