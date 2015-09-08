<?php include 'db.php' ?>

<?php
    function checkAndSet($key){
        if(isset($_POST[$key]))
        {
            //Escape post vaules to prevent sql injection
            return $_POST[$key];
        }
        else
        {
            return null;     
        }
    }
?>


<?php
    $firstName = null;
    $lastName = null;
    $email = null;
    
    $firstName = checkAndSet('firstName');
    $lastName = checkAndSet('lastName');
    $email = checkdate('email');
    
    
    $authors = $db->query("select * from Authors;");
    if (!$authors) {
        exit('Database query error: '. mysql_error($db));
    }
?>