<?php
class Electronic extends Product
{
  private $recyclable;

  public function renderForm()
  {
    $base_form = file_get_contents('forms/generic_form.html');
    $tool_specific = file_get_contents('forms/electronic_form.html');
    return $base_form . $tool_specific;
  }

  public function postTo()
  {
    return 'ship/electronic.php';
  }

  public function productType()
  {
    return 'Electronic';
  }
}

?>
