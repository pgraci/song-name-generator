<!DOCTYPE html>
<html>
<head>
  <title>Song Name Generator - version 1.0</title>

  <meta name="description" content="Generate Song Names" />
  <meta name="keywords" content="song, names" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

  <script src="http://malsup.github.com/jquery.form.js"></script>
	<script type="text/javascript" src="js/song-name-generator.js"></script>

</head>
<body>

  <form id="song-name-form" name="song-name-form" method="post" action="song-name-generator.php">
    <fieldset>
      <label for="word">Enter A Keyword (Optional)</label>
      <input type="text" name="word" id="word">
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

  <div id="new-song-name"></div>

</body>
</html>
