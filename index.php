<?php

$db = mysqli_connect('localhost', 'root', '', 'api');
$response = array();
if($db){
    
    $query = "SELECT * FROM `usersapi`";
    $result = mysqli_query($db, $query);
    if($result){
        $x=0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$x]['id'] = $row['id'];
            $response[$x]['name'] = $row['name'];
            $response[$x]['age'] = $row['age'];
            $response[$x]['email'] = $row['email'];
            $x++;
        }
      echo  json_encode($response,JSON_PRETTY_PRINT);
    }
    
}
else{
    echo 'database connection failed!'.mysqli_error($result);   
}
?>