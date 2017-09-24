<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,700,900" rel="stylesheet">
    <title>stats</title>

</head>



    <?php
        include 'database_conn.php';      // make db connection
        $fetch = "SELECT updatedDate, updatedTime
              FROM tasker";
        $success = $dbConn->query($fetch);
        while($rowObj = $success->fetch_object()){
              $eDate = $rowObj->updatedDate;
              $eTime = $rowObj->updatedTime;
        }
        $dbConn->close();
    ?>

<body>



    <div id="desc">
        <p>This page displays data being pushed from my phone to a mySQL database, on
        an hourly basis between 07:00am - 03:00am. No ulterior purpose.</p>
        <br/>
        <p style="font-size:0.75em;">Last updated: <?php echo "$eDate, $eTime"; ?> </p>
    </div>


</body>

</html>



<?php

        include 'database_conn.php';      // make db connection


        $fetch = "SELECT displayUnlocked, headphonesConnected, notifications, messengerOpened, timesDied, vpnConnected, appsOpened, redditOpened, photosOpened, chromeOpened, fullCharges, dataConnected, wifiConnected, updatedDate, updatedTime
                  FROM tasker";



        $success = $dbConn->query($fetch);




while($rowObj = $success->fetch_object()){
      $eDisplay = $rowObj->displayUnlocked;
      $eHeadphones = $rowObj->headphonesConnected;
      $eNotifications = $rowObj->notifications;
      $eMessenger = $rowObj->messengerOpened;
      $eDied = $rowObj->timesDied;
      $eVPN = $rowObj->vpnConnected;
      $eApps = $rowObj->appsOpened;
      $eReddit = $rowObj->redditOpened;
      $ePhotos = $rowObj->photosOpened;
      $eChrome = $rowObj->chromeOpened;
      $eCharges = $rowObj->fullCharges;
      $eData = $rowObj->dataConnected;
      $eWifi = $rowObj->wifiConnected;
      $eDate = $rowObj->updatedDate;
      $eTime = $rowObj->updatedTime;

      echo "

      <div id='content'>

          <div class='numBlock'>
            <div class='title'>Display unlocked:</div>
            <img src='lock-open.png' class='title-image'>
            <div class='number'>$eDisplay</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Earphones used:</div>
            <img src='headphones.png' class='title-image'>
            <div class='number'>$eHeadphones</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Total notifications:</div>
            <img src='message-alert.png' class='title-image'>
            <div class='number'>$eNotifications</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Messenger opened:</div>
            <img src='facebook-messenger.png' class='title-image'>
            <div class='number'>$eMessenger</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Battery died:</div>
            <img src='battery-20.png' class='title-image'>
            <div class='number'>$eDied</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Apps opened:</div>
            <img src='apps.png' class='title-image'>
            <div class='number'>$eApps</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Reddit opened:</div>
            <img src='reddit.png' class='title-image'>
            <div class='number'>$eReddit</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Photos opened:</div>
            <img src='google-photos.png' class='title-image'>
            <div class='number'>$ePhotos</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Chrome opened:</div>
            <img src='google-chrome.png' class='title-image'>
            <div class='number'>$eChrome</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Full Charges:</div>
            <img src='battery-charging.png' class='title-image'>
            <div class='number'>$eCharges</div>
          </div>

          <div class='numBlock'>
            <div class='title'>Data connections:</div>
            <img src='signal-4g.png' class='title-image'>
            <div class='number'>$eData</div>
          </div>

          <div class='numBlock'>
            <div class='title'>WiFi connections:</div>
            <img src='wifi.png' class='title-image'>
            <div class='number'>$eWifi</div>
          </div>


      </div>

      ";
}

$dbConn->close();


?>
