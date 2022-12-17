<?php

    $firstName = "";
    $lastName = "";
    $email = "";

    //Error messages Array:
    $errorsArr =['fnameError' => '', 'lnameError' => '', 'emailError' =>''];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['sendData'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];

            if(empty($firstName)){
                $errorsArr['fnameError'] = 'يرجى ادخال الاسم الاول';
                // echo 'First-Name is empty!';
            }
            if(empty($lastName)){
                $errorsArr['lnameError'] = 'يرجى ادخال الاسم الثاني';
                // echo 'Last-Name is empty!';
            }
            if(empty($email)){
                // echo 'Email is empty!';
                $errorsArr['emailError'] = 'يرجى ادخال البريد الالكتروني';
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                // echo "Incorrect Email!";
                $errorsArr['emailError'] = 'البريد الالكتروني خاطئ';
            }
            // when NO Errors, insert the user data:
            if(!array_filter($errorsArr)){
                $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
                $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
    
                $insertQury = "INSERT INTO users VALUE(null, '$firstName', '$lastName', '$email')";
                if(mysqli_query($conn, $insertQury)){
                        header('Location: index.php');
                }else{
                    echo mysqli_error($conn);
                }
            }
        }
    }