<?php
require_once "models/Customer.php";
class CustomerController
{
    public function listCustomer()
    {
        // echo "danh sach";
        $custumer = new Customer();
        $custumer = $custumer->getCustomer();
        //  echo "<pre>";
        // var_dump($custumer);
        // die();
        include_once "views/custumer/list.php";
    }
    public function addCustomer()
    {
        // echo " them ";
        if (isset($_POST['gui'])) {
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
            $custumer = new Customer();
            $custumer = $custumer->add($ten, $tuoi);
            header("location: index.php?url=");
        }

        include "views/custumer/add.php";
    }

    public function editCustomer()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $sql = "select * from custumer where id = '$id'";
            $custumer = new Customer();
            $custumer = $custumer->pdo_query_one($sql);
            //     $rows = 
            // var_dump(edit($id))
        }
        include "views/custumer/edit.php";
    }
    public function updateCustomer()
    {
        if (isset($_POST['gui'])) {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi'];
            $custumer = new Customer();
            $custumer = $custumer->update($ten, $tuoi, $id);
            header('location: index.php?url=');
            //$rows
        } else {
            include "views/custumer/edit.php";
        }
       
    }

    public function deleteCustomer()
    {
        // echo " xoa ";
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $custumer = new Customer();
            $custumer = $custumer->delete($id);
        }
        header("location: index.php?url=");
        // include_once "views/custumer/add.php";
    }
}
