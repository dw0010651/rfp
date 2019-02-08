<?php

function emailAdmin(){

    $msg = '- Email : ' .$_POST['email'] ."\n" 
        .'- Name : ' .$_POST['name'] ."\n" 
        .'- Status : ' .$_POST['status'] ."\n"
        .'- Title : ' .$_POST['title'] ."\n"."\n"
        .'- Comment : ' .$_POST['comments'];


    return mail('wearerealfitpro@gmail.com', 'Messages From Our Client', $msg);
    header('location: contact_us.php');

}

?>