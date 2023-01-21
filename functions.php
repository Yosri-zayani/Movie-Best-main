<?php 
// check if user loged in 
function check_login($conn){
    if(isset($_SESSION['user_id']))
    {
        $id=$_SESSION['user_id']; 
        $query = "select * from the_user where user_id = '$id'limit 1 "; 
        $res= mysqli_query($conn,$query); 
        if ($res && mysqli_num_rows($res) > 0 )
        {
            $user_data = mysqli_fetch_assoc($res); 
            return $user_data;
        }

    }


}
//create a unique user ID ;
function random_num($length){
    $text = ""; 
    if ($length < 5) {
        $length = 5 ; 


    }
    else if ($length > 11){
        $length = 11 ; 
    }
    $len = rand(4,$length);
    for ($i=0; $i < $len ; $i++) { 
        # code...
        $text .= rand(0,9); 
    }
    return $text; 


};





?>