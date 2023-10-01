<?php
require_once "models/db.php";
class Customer extends db
{
  public function getCustomer()
  {
    $sql = "SELECT * FROM custumer";
    return $this->getData($sql);
  }
  public function add($ten, $tuoi)
  {
    $sql = "insert into custumer values (null, '$ten', '$tuoi')";
    return $this->getData($sql);
  }

  public function update($ten, $tuoi, $id)
  {
    $sql = "update custumer set ten = '$ten', tuoi = '$tuoi' where id = '$id'";
    return $this->getData($sql);
  }
  public function delete($id)
  {
    $sql = "delete from custumer where id ='$id'";
    return $this->getData($sql);
  }
}
