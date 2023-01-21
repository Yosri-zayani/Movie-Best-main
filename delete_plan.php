<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include("connection.php");
    include("functions.php");
    $user_data = check_login($conn);

    // Get the user input for the plan name and cost
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $plan_name = $_POST['plan_name'];          
          
            // Insert the plan into the database
            $sql = "DELETE FROM pricing_plans WHERE plan_name = '$plan_name'";
            mysqli_query($conn, $sql);
            header('location: pricing.php');
            die;


    }

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove pricing plans</title>
</head>

<body>
    <form action="" method="POST" >
        <label for="Add new plan name ">Add new plan name</label>
        <input type="text" name="plan_name" placeholder="plan to be deleted">
        <button type="submit">Submit changes</button>


</body>

</html>