<?php
$dbc = new PDO('mysql:host=localhost;dbname=Subscription_Service', 'root', 'root');
if($_GET['name1'] == null || $_GET['name1'] == "FirstName LastName"){
    echo "<script type='text/javascript'>alert('Please enter a valid Name'); history.go(-1);</script>";
}elseif($_GET['email1'] == null || $_GET['email1'] == "Email@example.com"){
    echo "<script type='text/javascript'>alert('Please enter a valid Email'); history.go(-1);</script>";
}else{
    $query = "INSERT INTO `Subscription_Service`.`Subscribers` (`Name`, `Email`) VALUES (?, ?);";
    $stmt = $dbc->prepare($query);
    $stmt->execute(array($_GET['name1'], $_GET['email1']));
    echo "<script type='text/javascript'>alert('Thank you for subscribing'); javascript:history.go(-2);</script>";
    $_SESSION['login'] = true;
}