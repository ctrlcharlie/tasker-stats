<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <title>Film list</title>
    
    <script>
        $(document).ready(function(){
            $("span:contains(FUCK)").css("background-color", "#ff1d45");
            $("span:contains(FUCK)").css("color", "white");
        });
</script>
    
</head>
    
<body>
    
    <div id="title">database of ancient films.</div>
    
    
</body>
    
</html>




<?php
  include 'database_conn.php';      // make db connection

 	$sql = "SELECT filmID, title, categoryName, notes, rating, recommend 
            FROM film
            ORDER BY title ASC";
$queryResult = $dbConn->query($sql);
if($queryResult === false) {
   	echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
   	exit;
   }
else {
   	while($rowObj = $queryResult->fetch_object()){
      		$filmID = $rowObj->filmID;
      		$filmTitle = $rowObj->title;
      		$filmCat = $rowObj->categoryName;
      		$filmNotes = $rowObj->notes;
            $filmRating = $rowObj->rating;
            $filmRecom = $rowObj->recommend;
        
      		echo "<div class='film'>
                    <span class='filmID''>$filmID</span>
                    <span class='title'>$filmTitle</span>
                    <span class='category''>$filmCat</span>
                    <span class='notes'>$filmNotes</span>
                    <span class='rating'>$filmRating/10</span>
                    <span class='recommend'>$filmRecom</span>
            \n </div>";
        
   	}
}
$queryResult->close(); 
$dbConn->close();
?>


