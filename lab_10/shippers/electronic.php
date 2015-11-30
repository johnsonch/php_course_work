
<?php
    require_once("../electronics.php");

  if(isset($_POST['submit']))
  {
      $generic_product = new Electronic();
      $generic_product->setRecyclable($_POST['recyclable']);

      echo $generic_product->getRecyclable();

      //$validated_params = $generic_product->validatePostParams($_POST);
      //if($validated_params['valid'] == true)
      //{
        //$generic_product->setTitle($validated_params['title']);
        //$generic_product->setDescription($validated_params['title']);
        //$generic_product->setPrice($validated_params['price']);
        //$generic_product->ship();
      //}
  }
  else
  {
    header('Location: addProduct.php');
  }
?>
