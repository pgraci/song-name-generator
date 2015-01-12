<!DOCTYPE html>
<html>
<head>
  <title>Song Name Generator - version 1.0</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <meta name="description" content="Generate Song Names" />
  <meta name="keywords" content="song, names" />

  <link type="text/css" href="css/song-name-generator.css" rel="stylesheet">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://malsup.github.com/jquery.form.js"></script>
	<script type="text/javascript" src="js/song-name-generator.js"></script>

</head>
<body>

  <div class="song-name-container">
  <h1>Song Name Generator</h1>
  <p id="new-song-name">Need a cool name for your song?</p>
  <form id="song-name-form" name="song-name-form" method="post" action="song-name-generator.php">
    <div class="input">
      <div class="blockinput">
        <input type="text" name="word" id="word" placeholder="Enter Keyword (Optional)">
      </div>
    </div>
    <div class="size">
      <select name="mode">
        <option name="mode" value="3">Small</option>
        <option name="mode" value="2">Medium</option>
        <option name="mode" value="1">Large</option>
      </select>
    </div>
    <button>Create Song Name</button>
  </form>
  </div>




</body>
</html>
