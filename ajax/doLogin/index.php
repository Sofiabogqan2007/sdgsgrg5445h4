<?php
session_start();

//  our url is now stored as $_POST['location'] (posted from login.php). If it's blank, let's ignore it. Otherwise, let's do something with it.
$redirect = NULL;
if($_POST['location'] != '') {
    $redirect = $_POST['location'];
}

if((empty($username) OR empty($password) AND !isset($_SESSION['id_login']))) {
    $url = '/login?p=1';
    // if we have a redirect URL, pass it back to login.php so we don't forget it
    if(isset($redirect)) {
        $url .= '&location=' . urlencode($redirect);
    }
   header("Location: " . $url);
   exit();
}
elseif (!user_exists($username,$password) AND !isset($_SESSION['id_login'])) {
    $url = '/login?p=2';
    if(isset($redirect)) {
        $url .= '&location=' . urlencode($redirect);
    }
   header("Location:" . $url);
   exit();
}
elseif(isset($_SESSION['id_login'])) {
    // if login is successful and there is a redirect address, send the user directly there
    if($redirect) {
        header("Location:". $redirect);
    } else {
        header("Location:/login?p=3");
    }
    exit();
}
?>
