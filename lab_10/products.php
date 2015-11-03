<?php
  class Product
  {
    private $title;
    private $description;
    private $price;

    public function setTitle($title)
    {
      $this->title = $title;
    }

    public function setDescription($description)
    {
      $this->description = $description;
    }

    public function setPrice($price)
    {
      $this->price = $price;
    }

    public function renderForm()
    {
      return file_get_contents('forms/generic_form.html');
    }

    public function postTo()
    {
      return 'newProduct.php';
    }

    public function productType()
    {
      return 'Generic Product';
    }

  }
?>
