<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,700,900" rel="stylesheet">
    <title>Update</title>
</head>


<body>
aaa
</body>

</html>



<?php

        include 'database_conn.php';      // make db connection




        //  php variable name         name of div
        $displayUnlocked = $_REQUEST['countDisplayUnlocked'];
        $headphonesConnected = $_REQUEST['countHeadphonesConnected'];
        $notifications = $_REQUEST['countNotifications'];

        $appsOpened = $_REQUEST['countTotalAppsOpened'];
        $messengerOpened = $_REQUEST['messengerOpenCount'];
        $redditOpened = $_REQUEST['countRedditOpened'];
        $photosOpened = $_REQUEST['countPhotosOpened'];
        $chromeOpened = $_REQUEST['countChromeOpened'];

        $timesDied = $_REQUEST['countTimesDied'];
        $fullCharges = $_REQUEST['countFullCharges'];
        $vpnConnected = $_REQUEST['VPNCount'];
        $dataConnected = $_REQUEST['countMobileDataConnections'];
        $wifiConnected = $_REQUEST['countWifiConnections'];

        $updatedDate = $_REQUEST['lastUpdatedDate'];
        $updatedTime = $_REQUEST['lastUpdatedTime'];



        $updateSQL = "update tasker
                      set displayUnlocked = '$displayUnlocked',
                      headphonesConnected = '$headphonesConnected',
                      notifications = '$notifications',
                      appsOpened = '$appsOpened',
                      messengerOpened = '$messengerOpened',
                      redditOpened = '$redditOpened',
                      photosOpened = '$photosOpened',
                      chromeOpened = '$chromeOpened',
                      timesDied = '$timesDied',
                      fullCharges = '$fullCharges',
                      vpnConnected = '$vpnConnected',
                      dataConnected = '$dataConnected',
                      wifiConnected = '$wifiConnected',
                      updatedDate = '$updatedDate',
                      updatedTime = '$updatedTime'";




$success = $dbConn->query($updateSQL);

$dbConn->close();


?>
