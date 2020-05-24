<?php
$user = 'eihuxghz1d16wln9';
$pwd ='rm6ssod1ra1y6iho';
$server='kil9uzd3tgem3naa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$database = 'xuc77vapd06kjxop';
$connection = new mysqli($server, $user, $pwd,$database);
if ($connection ->connect_error){
    echo $connection->connect_error;
}
else{
    echo  'connection created';
}
$sql = "select * from User "; // create query
$result = $connection ->query($sql);
if ($result ->num_rows>0){
    while (($row = $result->fetch_assoc())){
        echo  $row['id'].['username'].$row['password'].$row['name'].'<br>';
    }
}
else {
    echo 'no result in table';
}
$connection ->close();