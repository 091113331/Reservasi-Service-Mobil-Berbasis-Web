<?php
  session_start();
  session_destroy();
  echo "<script>alert('Terima Kasih, Anda telah Logout'); window.location = 'index.php'</script>";
?>
