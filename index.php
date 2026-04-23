<!DOCTYPE html> 

<html>
  <head>
    <title>Roblox command panel</title>
  </head>

  <body>
    <form method="post" action="">
      <label>Speler naam:</label>
      <input name="player" type="text">
      <button type="submit">Kick</button>

    </form>
  </body>

</html>

<?php

$filename = "commands.json";

if (isset($_POST["player"])) {
  $player = $_POST["player"];
  file_put_contents($filename, json_encode(["player" => $player], JSON_PRETTY_PRINT));

  echo file_get_contents($filename);
}

?>
