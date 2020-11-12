<?php
  include("../../config.php");

  if (isset($_POST['playlistId']) && isset($_POST['songId'])) {
    $playlistId = $_POST['playlistId'];
    $songId = $_POST['songId'];

    $orderQuery = mysqli_query($con, "SELECT MAX(playlistOrder) + 1 AS playlistOrder FROM playlistSongs WHERE playlistId='$playlistId'");
    $row = mysqli_fetch_array($orderQuery);
    $order = $row['playlistOrder'];

    $query = mysqli_query($con, "INSERT INTO playlistSongs VALUES(NULL, '$songId', '$playlistId', '$order')");

  } else {
    echo "Playlist ID or song ID was not passed for addition.";
  }


?>
