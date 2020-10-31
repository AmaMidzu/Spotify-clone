<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php");

//session_destroy();

if (isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
  echo "<script>userLoggedIn = '$userLoggedIn';</script>";
} else {
  header("Location: register.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Spotify-clone</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
  </head>
  <body>

    <script>
      var audioElement = new Audio();
      // audioElement.setTrack("assets/music/bensound-acousticbreeze.mp3");
      // audioElement.audio.play();
    </script>
    <div id="mainContainer">

      <div id="topContainer">
        <<?php include("includes/navBarContainer.php"); ?>

        <div id="mainViewContainer">

          <div id="mainContent">
