<?php
    include './incs/dbconn.php';
    include './incs/form.php';

    $allUsersQry = mysqli_query($conn, 'SELECT * FROM users'); // $allUsersQry is Obect, not Array.
    
    echo '$allUsersQry = mysqli_query($conn, "SELECT * FROM users"); <br><br>';
    // when print $allUsersQry we get data about this Object:
    echo '1- print_r($allUsersQry); <br>';
    echo "-----------------------------------------";
    echo "<pre>";
    print_r($allUsersQry);
    echo "</pre>";
    echo "********************<br><br>";
    //when we loop the $allUsersQry as Object, each item is Array
    echo '2- foreach($allUsersQry as $user)<br>';
    echo "-----------------------------------------";
    foreach($allUsersQry as $user){
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
    echo"<br>";
    echo "-3- <br>";
    echo "--------<br>";
    //we can treat with the $allUsersQry Object in many way:
    //1- we can conver it to associative array, the columns name are the keys:
    echo '1- Convert the $allUsersQry Object into associative array:<br>';
    echo "--------------------------------------------------------<br>";
    echo '$allUsers = mysqli_fetch_all($allUsersQry, MYSQLI_ASSOC);<br>';
    $allUsersQry = mysqli_query($conn, 'SELECT * FROM users'); // $allUsersQry is Obect, not Array.
    $allUsers = mysqli_fetch_all($allUsersQry, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($allUsers);
    echo "</pre>";
    
    //we can treat with the $allUsersQry Object in many way:
    //2- we can conver it to associative and indexed array:
    echo '2- Convert the $allUsersQry Object into Both:associative and indexed Array:<br>';
    echo "--------------------------------------------------------<br>";
    echo '$allUsers = mysqli_fetch_all($allUsersQry, MYSQLI_BOTH);<br>';
    $allUsersQry = mysqli_query($conn, 'SELECT * FROM users'); // $allUsersQry is Obect, not Array.
    $allUsers = mysqli_fetch_all($allUsersQry, MYSQLI_BOTH);
    echo "<pre>";
    print_r($allUsers);
    echo "</pre>";

    //
    mysqli_free_result($allUsersQry);
    mysqli_close($conn);

    //empty array
    $arr1 = ['i1' => '', 'i2' => ''];
    if(empty($arr1)){
        echo 'Array is Empty';
    }else{
        print_r($arr1);
    }
    echo "<br>";
    //
    if(in_array('', $arr1)){
        echo "there is one empty element, atleast!!";
        echo "<br>";
    }
    
    if(!in_array('', $arr1)){
        echo "there is no empty element !!";
    }else{
        echo "there is one empty element, atleast!!";
    }
    echo "<br>";

    if(!array_filter($arr1)){
        echo "Full Empty Array..";
    }else{
        echo "There is atleast one element not empty..";
    }

?>
