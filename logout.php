<?php
  session_start();
  session_destroy();

  header('Location: index.php');

  // $url = '/';
  // echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
?>