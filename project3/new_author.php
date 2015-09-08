<?php include 'layout/header.php' ?>
<?php include 'db.php'; ?>

<?php
    $authors = $db->query("select * from Authors;");
    if (!$authors) {
        exit('Database query error: '. mysql_error($db));
    }
?>

<div class="blog-header">
    <h1 class="blog-title">Add Authors</h1>
</div>

<form class="form-horizontal" action="create_author.php" method="POST">
  <fieldset>
    <legend>New Author</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="">
      </div>
    </div>
    
    <input type="submit" value="Submit"/>
</form>

<?php include 'layout/footer.php' ?>