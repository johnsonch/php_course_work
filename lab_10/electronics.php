<?php
require_once("products.php");
class Electronic extends Product
{
  private $recyclable;

  public function getRecyclable(){
    return $this->recyclable;
  }

  public function setRecyclable($value)
  {
      if(isset($value) && !empty($value))
      {
        $this->recyclable =  "yes";
      }
      else
      {
        $this->recyclable = "no";
      }
  }

  public function renderForm()
  {
    $base_form = file_get_contents('forms/generic_form.html');
    $specific = file_get_contents('forms/electronic_form.html');
    return $base_form . $specific;
  }

  public function postTo()
  {
    return 'shippers/electronic.php';
  }

  public function productType()
  {
    return 'Electronic';
  }
}

?>
