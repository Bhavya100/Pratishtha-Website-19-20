<?php session_start();
if($_SESSION['admin']==false){
  header("location:index.php");
  exit();
} ?>
<html>
<body>
<form action="push1.php" method="POST">
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

<br>
<h1>Winner</h1>
<select name="winner">
<option value="FE_CM"> FE_CM</option>
<option value="FE_IT"> FE_IT</option>
<option value="FE_EX" >FE_EX </option>
<option value="FE_ETC"> FE_ETC</option>

<option value="SE_CM"> SE_CM</option>
<option value="SE_IT"> SE_IT</option>
<option value="SE_EX" >SE_EX </option>
<option value="SE_ETC"> SE_ETC</option>

<option value="TE_CM"> TE_CM</option>
<option value="TE_IT"> TE_IT</option>
<option value="TE_EX" >TE_EX </option>
<option value="TE_ETC"> TE_ETC</option>

<option value="BE_CM"> BE_CM</option>
<option value="BE_IT"> BE_IT</option>
<option value="BE_EX" >BE_EX </option>
<option value="BE_ETC"> BE_ETC</option>

<option value="council">council</option>
</select>
<br>
<h1>Runner up</h1>
<select name="runner">
<option value="FE_CM"> FE_CM</option>
<option value="FE_IT"> FE_IT</option>
<option value="FE_EX" >FE_EX </option>
<option value="FE_ETC"> FE_ETC</option>

<option value="SE_CM"> SE_CM</option>
<option value="SE_IT"> SE_IT</option>
<option value="SE_EX" >SE_EX </option>
<option value="SE_ETC"> SE_ETC</option>

<option value="TE_CM"> TE_CM</option>
<option value="TE_IT"> TE_IT</option>
<option value="TE_EX" >TE_EX </option>
<option value="TE_ETC"> TE_ETC</option>

<option value="BE_CM"> BE_CM</option>
<option value="BE_IT"> BE_IT</option>
<option value="BE_EX" >BE_EX </option>
<option value="BE_ETC"> BE_ETC</option>

<option value="council">council</option>
</select>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>
