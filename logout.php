<?php session_start();
  session_destroy();
  unset($_SESSION['name']);
  echo "<script>window.location.href='home1.php'</script>"?>