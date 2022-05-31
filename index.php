<?php
ini_set('display_errors', 1);
require_once __DIR__ . '/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>JS-Start</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous">
      <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <ul>
      <li>
        <a href="index.php?url=Main">Index</a>
      </li>
      <li>
        <a href="index.php?url=About">About</a>
      </li>
      <li>
        <a href="index.php?url=Contacts">Contacts</a>
      </li>
    </ul>
  </body>
</html>
