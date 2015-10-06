<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
    $mysqli = mysqli_connect("localhost", "root", "root", "madlibs");
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
          <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
            <fieldset>
              <legend>Madlibs</legend>

              <div class="form-group">
                <label for="noun" class="col-lg-2 control-label">Enter a noun:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="noun" id="noun" >
                </div>
              </div>

              <div class="form-group">
                <label for="verb" class="col-lg-2 control-label">Enter a verb:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="verb" id="verb" >
                </div>
              </div>

              <div class="form-group">
                <label for="adjective" class="col-lg-2 control-label">Enter an adjective:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="adjective" id="adjective" >
                </div>
              </div>

              <div class="form-group">
                <label for="adverb" class="col-lg-2 control-label">Enter an adverb:</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="adverb" id="adverb" >
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <hr>
<?php
if (isset($_POST['submit'])) 
{

    if (isset($_POST['noun'])){
      $noun = $_POST['noun'];
    }
    if (isset($_POST['verb'])){
      $verb = $_POST['verb'];
    }
    if (isset($_POST['adjective'])){
      $adjective = $_POST['adjective'];
    }
    if (isset($_POST['adverb'])){
      $adverb = $_POST['adverb'];
    }

    $story = addslashes("Do you $verb your $adjective $noun $adverb? That's hilarious!");
    
    $query = "INSERT INTO Stories (Story, Noun, Verb, Adjective, Adverb) 
      VALUES ('$story', '$noun', '$verb', '$adjective', '$adverb');";
    $result = mysqli_query($mysqli, $query);
    if (!$result) {
      echo $query;
      exit("Database query error: ". mysqli_error($mysqli));
    }
}


    $query = "SELECT * FROM Stories ORDER BY id DESC;";
    $result = mysqli_query($mysqli, $query);
?>
<ul>
    <?php while ($record = mysqli_fetch_array($result)) { ?>
      <li><?= $record['Story'] ?></li>
    <?php } ?>
</ul>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
