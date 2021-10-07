<?php

    // Declare Initial Variables
    $firstName = $_POST['fname'];   // pulls first name from html
    $lastName = $_POST['lname'];    // pulls last name from html
    $email = $_POST['email'];       // pulls email from html
    $amount = $_POST['amount'];     // pulls donation amount from html    
    $okay = true;
    $msg;

    if (isset($_POST['subscription'])) {
        $subscription = $_POST['subscription'];
        $subscription = "<p>You have chosen not to receive a free year subscription to our e-magazine.</p>";
    } else {
        $subscription = "<p>You will receive a free year subscription to our e-magazine.</p>";
    };

    




    // Number Format Amount of Donation
    // $donation = number_format($amount, 2);  // formats donation amount to float to two decimal places


    //Success Message
    // if ($okay = 1) {
    //     $msg  = "<p>Thank you $firstName $lastName for your donation of ___________.</p>";  // of \$$donation.
    //     $msg .= "<p>We will email your receipt to $email.</p>";
    //     $msg .= $subscription;
    // };
print_r($firstName); 
print_r($lastName); 
print_r($email); 
print_r($amount);
print_r($okay); 
print_r($msg);


ini_set('display_errors', 1); // Let me learn from my mistakes!
error_reporting(E_ALL); // Show all possible problems!

?>



<!DOCTYPE html> <!-- Ryan King -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humane Society Donations</title>

    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: arial;
        }

        div {
            width: 700px;
            height: 500px;
            margin: 50px auto 0;
            padding: 0;
            text-align: center;
        }

        div h1 {
            color: navy;
        }

        main {
            text-align: left;
            border: 1px solid white;
            box-shadow: 0 0 20px 1px grey;
            padding: 10px;
            background-color: aliceblue;
        }

    </style>

</head>
<body>
    <div>
        <header>
            <h1>Humane Society Donations</h1>
            <h1>Help the Animals</h1>
        </header>

        <main>
            <!-- Displays PHP data to customer -->
            <?php
                if(empty($firstName)) {
                    print "<p>First Name must be filled in.</p>"
                } else {

                }
            ?>
        </main>
    </div>
</body>
</html>