<?php
include('assets/functions.php');
include('assets/connectBDD.php');
if(isset($_POST)) {
    $art_id = abs(intval($_POST['art_id']));
    $ip = get_real_ip();
    $query = mysql_query("SELECT * FROM likes WHERE art_id='$art_id' AND ip='$ip' LIMIT 1");
    $check = mysql_num_rows($query);
    if ($check == 0) {
        $datetime = time();
        $add = mysql_query("INSERT INTO likes (art_id,ip) VALUES ('$art_id','$ip')");
        if ($add) {
            $check = mysql_query("SELECT art_id FROM likes WHERE art_id='$art_id'");
            $number = mysql_num_rows($check);
            sleep(1);
            echo 'Liked <span>'.$number.'</span>';
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}