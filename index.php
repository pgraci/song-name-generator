<!DOCTYPE html>
<html>
<head>
  <title>Song Name Generator - version 1.0</title>

  <meta name="description" content="Generate Song Names" />
  <meta name="keywords" content="song, names" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

	<script type="text/javascript" src="js/song-name-generator.js"></script>

</head>
<body>

  <form method="post" action="song-name-generator.php">
    <fieldset>
      <label for="word">Enter A Keyword</label>
      <input type="text" name="word">
    </fieldset>
    <fieldset>
      <input type="radio" name="mode" value="3" checked> Small<br />
      <input type="radio" name="mode" value="2"> Medium<br />
      <input type="radio" name="mode" value="1"> Large<br />
    </fieldset>
    <fieldset>
      <input type="submit" value="Create Song Name">
    </fieldset>
  </form>

</body>
</html>
