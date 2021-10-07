<?php

    // Declare Initial Variables
    $firstName = $_POST['fname'];   // pulls first name from html
    $lastName = $_POST['lname'];    // pulls last name from html
    $email = $_POST['email'];       // pulls email from html
    $amount = $_POST['amount'];     // pulls donation amount from html    

    // Build 'GO BACK' link and start of error message as default
    $back = "<a href='donation2.html'>GO BACK</a>";
    $msg = "<p>Please $back and fill in the following errors:</p>\n";

    // Created checking variable to see if fields are empty or not
    $fnameCheck = true;
    $lnameCheck = true;
    $emailCheck = true;
    $amountCheck = true;

    // condition statement to check if $firstName is empty
    if (empty($firstName)) {
        $msg .= "\t\t\t<p>First Name must be filled in.</p>\n";
        $fnameCheck = false; // if empty, hold false value for SWITCH check later
    } else {
        $firstName = htmlspecialchars(trim($firstName)); // strips value from white space and harmful html codes
    };

    // condition statement to check if $lastName is empty
    if (empty($lastName)) {
        $msg .= "\t\t\t<p>Last Name must be filled in.</p>\n";
        $lnameCheck = false; // if empty, hold false value for SWITCH check later
    } else {
        $lastName = htmlspecialchars(trim($lastName));
    };

    // condition statement to check if $email is empty
    if (empty($email)) {
        $msg .= "\t\t\t<p>Email address must be filled in.</p>\n";
        $emailCheck = false;    // if empty, hold false value for SWITCH check later
    } else {
        $email = htmlspecialchars(trim($email));    // strips value from white space and harmful html codes
    };

    // condition statement to check if $amount is empty
    if (empty($amount)) {
        $msg .= "\t\t\t<p>The amount must be filled in.</p>\n";
        $amountCheck = false;    // if empty, hold false value for SWITCH check later
    } else {
        $donation = number_format($amount, 2);  // formats donation amount to float to two decimal places
    };

    // condition statement to check value of 'subscrition' check box
    if (isset($_POST['subscription'])) {
        $subscription = $_POST['subscription'];
        $subscription = "<p>You have chosen not to receive a free year subscription to our e-magazine.</p>";
    } else {
        $subscription = "<p>You will receive a free year subscription to our e-magazine.</p>";
    };

    // SWITCH statement to confirm all fields have proper value.  IF all conditions are true, then 'success' message is sent
    switch ($fnameCheck) {
        case true:
            switch ($lnameCheck) {
                case true:
                    switch ($emailCheck) {
                        case true:
                            switch ($amountCheck) {
                                case true:
                                    $msg  = "<p>Thank you $firstName $lastName for your donation of \$$donation.</p>\n";  // of \$$donation.
                                    $msg .= "\t\t\t<p>We will email your receipt to $email.</p>\n";
                                    $msg .= "\t\t\t$subscription\n";
                                    break;
                                default:
                                    break; 
                            };
                        default:
                            break; 
                    };
                default:
                    break; 
            };
        default:
            break;    
    }; 
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
                print $msg;
            ?>
        </main>
    </div>
</body>
</html>