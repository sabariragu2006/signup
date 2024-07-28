<?php
include_once 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success Modal Example</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <img src="includes/accept.png" alt="Success" class="tick-icon">
        <h2>Success!</h2>
      </div>
      <span class="close">&times;</span>
      <p>Login executed Successfully</p>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>

