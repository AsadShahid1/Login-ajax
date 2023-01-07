<?php
include('db.php');
$obj = new Database('batch' , 'gmail');
if($obj->is_login())
    header("location:my_profile.php");
    extract($_POST);
       if (isset($email) && !empty(trim($email))){
        if (isset($pwd) && !empty (trim($pwd))){
            if(strpos($pwd," ")){
                $response1 = [
                    'pass_match' => "error" ,
                    'msg' => "Don't space in between password"
               ];
             }else{
                unset($_POST['login']);
                unset($_POST['check']);
                if(isset($check)){
                    if($obj->login($email , $pwd , true))
                    $response1 = [
                        'check' => "success" ,
                        'location' => "my_profile.php"
                   ];
                }else if($obj->login($email , $pwd))
                        $response1 = [
                            'check1' => "success" ,
                            'location' => "my_profile.php"
                    ];
                else
                    $response1 = [
                        'message' => "error" ,
                        'msg' => "Credentials doen't match our record"
                   ]; 
             } 
        }
        else{
            $response1 = [
                'pwd' => "error" ,
                'msg' => "password is required"
           ];   
        }
       }else{
        $response1 = [
            'email' => "error" ,
            'msg' => "email is required"
       ]; 
    }


echo json_encode($response1);

?>

