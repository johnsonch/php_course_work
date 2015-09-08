<?php include 'layout/header.php' ?>
<?php include 'db.php'; ?>

<?php
    $authors = $db->query("select * from Authors;");
    if (!$authors) {
        exit('Database query error: '. mysql_error($db));
    }
?>

<div class="blog-header">
    <h1 class="blog-title">Authors</h1>
    <p class="lead blog-description">Manage blog authors here.</p>
</div>
  
<p><a href="new_author.php">Add Author</a></p>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th></th>
    <th></th>
  </tr>
<?php while ($author = $authors->fetch_assoc()) { ?>
    <tr>
      <td><?= $author["firstName"] ?> <?= $author["lastName"] ?></td>
      <td><?= $author["email"] ?></td>
      <td>Edit</td>
      <td>View Articles</td>
    </tr>
  <?php
  }
?>
<?php include 'layout/footer.php' ?>