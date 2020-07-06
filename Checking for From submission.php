<?php

if(isset($_POST['submit'])){
    echo "Yes it works";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission</title>
</head>
<body>
<form action="Checking for From submission.php" method="post">
    
<input type="text" placeholder="Enter Username">
<br>
<input type="password" placeholder="Enter Password"> 
<br>
<input type="submit" name="submit">         
       
</form>    
</body>
</html>