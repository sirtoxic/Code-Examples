<?php

	require 'db.php';

	$hello = 'test3';

	$records = $conn->prepare('SELECT ID FROM administrators WHERE u_name = :username');
    $records->bindParam(':username',$hello); 
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $output= $results['ID'];

    echo $output;

?>