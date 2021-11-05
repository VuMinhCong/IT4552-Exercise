<html>

<head>
  <title>PHP Test</title>
</head>

<body>
  <?php
  if (file_exists("test.txt")) {
    echo file_get_contents("test.txt");
  } else {
    echo "File not exist";
  }
  ?>
  <h2 style="text-align:center">URI</h2>
  <hr />
  <a href="uris.html">Go to uris.html</a>
</body>

</html>