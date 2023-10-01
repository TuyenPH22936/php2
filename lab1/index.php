<?php
require_once 'controllers/CustomerController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "";
// echo $url;

switch ($url) {
    case '':
        // dieu huong ve ham listProduct trong ProductController
        $customerController = new CustomerController();
        $customerController->listCustomer();
        break;

    case "add_customer":
        $customerController = new CustomerController();
        $customerController->addCustomer();
        break;

    case "edit_customer":
        $customerController = new CustomerController();
        $customerController->editCustomer();
        break;
    case "update_customer":
        $customerController = new CustomerController();
        $customerController->updateCustomer();
        break;

    case "delete_customer":
        $customerController = new CustomerController();
        $customerController->deleteCustomer();
        break;
}
