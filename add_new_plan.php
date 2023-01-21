<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include("connection.php");
    include("functions.php");
    $user_data = check_login($conn);

    // Get the user input for the plan name and cost
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Handle form 1 submission
            $plan_name = $_POST['plan_name'];
            $cost = $_POST['cost'];
            $duration = $_POST['duration'];
            $resolution = $_POST['resolution'];
            $availability = $_POST['available'];
            $devices = $_POST['devices'];
            $support = $_POST['support'];
            // Insert the plan into the database
            $sql = "INSERT INTO pricing_plans (plan_name, cost,duration,resolution,available,devices,support ) VALUES 
                ('$plan_name', '$cost','$duration','$resolution','$availability','$devices','$support')";
            mysqli_query($conn, $sql);
            header('location: pricing.php');
            die;


    }

    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD , edit remove pricing plans</title>
</head>

<body>
    <form action="" method="POST" >
        <label for="Add new plan name ">Add new plan name</label>
        <input type="text" name="plan_name" placeholder="plan's name">
        <input type="text" name="cost" placeholder="new cost">
        <input type="text" name="duration" placeholder="new duration">
        <input type="text" name="resolution" placeholder="new resolution">
        <input type="text" name="available" placeholder="availability">
        <input type="text" name="devices" placeholder="new devices">
        <input type="text" name="support" placeholder="support system">
        <button type="submit">Submit changes</button>


</body>

</html>