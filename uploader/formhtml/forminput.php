
<html>
<form action="handle.php" method="post" enctype="multipart/form-data">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
  Select file to upload:
  <input type="file" name="upf" id="fileToUpload">
  <input type="submit" value="Upload file" name="submit">
</form>

</html>