<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
session_start();{
    include("connection.php");
    include ("functions.php");

};
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //something was posted 
    $user_name =$_POST['user_name'];
    $password =$_POST['password'];
    if ( !empty($user_name) && !empty($password))
    {
        //read from the   database
        $req = "SELECT * FROM admin where admin_username ='$user_name' LIMIT 1";
        $res = mysqli_query($conn,$req);
        if($res)
        {
            if ($res && mysqli_num_rows($res) > 0 )
            {
                $user_data = mysqli_fetch_assoc($res); 
                if ($user_data['admin_password'] === $password){
                    $_SESSION['admin_username_id'] = $user_data['user_id'];
                    header('location: controlpanel.php');
                    die;
                }
                else{
                  echo "<script> 
                  document.getElementById('error').innerHTML += 'incorrect password'; 
                 </script>";
            }
        }
        else{
          echo  "<script> 
          document.getElementById('error').innerHTML += 'user not found'; 
         </script>";
        }


    }

  }

}
else{
    echo  "<script> 
    document.getElementById('error').innerHTML += 'user not registered with us'; 
   </script>";
}

?>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/plyr.css" />
    <link rel="stylesheet" href="css/photoswipe.css" />
    <link rel="stylesheet" href="css/default-skin.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!-- Favicons -->
    <link
      rel="icon"
      type="image/png"
      href="icon/favicon-32x32.png"
      sizes="32x32"
    />
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png" />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="icon/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="icon/apple-touch-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="icon/apple-touch-icon-144x144.png"
    />

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>MovieBest – Online Movies, TV Shows</title>
  </head>
  <body class="body">
    <div class="sign section--bg" data-bg="img/section/section.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="sign__content">
              <!-- authorization form -->
              <form method="POST" class="sign__form" >

                <div class="sign__group">
                  <input type="text" class="sign__input" placeholder="Admin username" name="user_name" />

                </div>

                <div class="sign__group">
                  <input
                    name="password"
                    type="password"
                    class="sign__input"
                    placeholder="Password"
                  />
                </div>

                  <div id="error" class="sign__group">hello there </div>

                <button class="sign__btn" type="submit">Sign in</button>

              </form>
              <!-- end authorization form -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.min.js"></script>
    <script src="js/wNumb.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/plyr.min.js"></script>
    <script src="js/jquery.morelines.min.js"></script>
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
