<?php
class Tool extends Product
{
  private $shipper;
  private $weight;

  public function renderForm()
  {
    $base_form = file_get_contents('forms/generic_form.html');
    $tool_specific = file_get_contents('forms/tool_form.html');
    return $base_form . $tool_specific;
  }

  public function postTo()
  {
    return 'newProduct.php';
  }

  public function productType()
  {
    return 'Tool';
  }

}
?>
