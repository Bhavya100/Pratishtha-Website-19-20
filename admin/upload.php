<?php session_start();
if($_SESSION['admin']==false){
  header("location:index.php");
  exit();
} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="includes/up.inc.php" method="post">
      <h1>Sports</h1>
       <select name="type">
          <option value="boys">Boys</option>
          <option value="girls">Girls</option>
        </select>
      <br>
      <select name="sports">
        <option value="cricket">Cricket</option>
        <option value="football">Football</option>
      <option value="volleyball">Volleyball</option>
      <option value="tabletennis">Table Tennis</option>
      <option value="badminton">Badminton</option>
      <option value="kabaddi">Kabaddi</option>
      <option value="tug_of_war">Tug of War</option>
      <option value="carrom">Carrom</option>
      <option value="chess">Chess</option>
      <option value="athletics">Athletics</option>
      <option value="basketball">Basketballl</option>
      <option value="chess">Throwball</option>
      <option value="athletics">Box cricket</option>
      <option value="basketball">Dodgeball</option>
        </select>

      <input type="file" name="pdf">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
