<?php
   $dbConn = new mysqli('localhost', 'unn_w15002812', 'RYNUZTYA', 'unn_w15002812');
    
   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>
