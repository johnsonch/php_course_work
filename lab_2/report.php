<html>
<head>
    <title>Aliens Abducted Me - Report and Abduction</title>
</head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>
    <?php
        $when_it_happened = $_POST['whenithappened']; 
        $how_long = $_POST['howlong']; 
        $alien_description = $_POST['aliendescription']; 
        $how_many = $_POST['howmany'];
        $what_they_did = $_POST['whattheydid'];
        $fang_spotted = $_POST['fangspotted']; 
        $email = $_POST['email'];
    ?>
    Thanks for submitting the form.<br />
    You were abducted <?= $when_it_happened; ?> and were gone for <?= $how_long ?> <br />
    Describe them: <?= $alien_description ?> <br />
    Was Fang there? <?= $fang_spotted ?> <br />
    How many? <?= $how_many ?> <br />
    What they did? <?= $what_they_did ?> <br />
    Your email address is <?= $email ?>
    
    
    <?php
        $to = 'cgjohnson1@madisoncollege.edu';
        $subject = 'Aliens Abducted Me - Abduction Report';
        $msg = "Thanks for submitting the form.<br /> You were abducted  $when_it_happened;  and were gone for <?= $how_long ?> <br /> Describe them:  $alien_description  <br /> Was Fang there?  $fang_spotted  <br /> How many? $how_many <br /> What they did? $what_they_did <br /> Your email address is $email "; 
        mail($to, $subject, $msg, "From $email");
    ?>
</body>
</html>
