<?php
include_once 'includes/dbh.php'
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  border: 1px solid green;
}

.btn-group .button:hover {
  background-color: grey !important;
}

.btn-group{
  text-align: center;
  margin-top: 4px;
  margin-bottom: 4px;
}
</style>
</head>
<body>

<h1 style="text-align:center;">Task 1 in the 4th path</h1>
<p style="text-align:center;">robot control panel</p>
<form action="index.php" method="POST">
<div class="btn-group">
<input type="submit" name="Forwards" class="button" value="Forwards">
</div>
<div class="btn-group">
  <input type="submit" name="Left" class="button" value="Left">
  <input type="submit" name="Stop" class="button" style=" background-color: red;" value="Stop">
  <input type="submit" name="Right" class="button" value="Right">
</div>
<div class="btn-group">
<input type="submit" name="Backwards" class="button" value="Backwards">
</div>
</form>


</body>
</html>
