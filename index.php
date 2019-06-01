<?php
function printDesc()
{
  if(empty($_GET["name"]))
  {
    echo file_get_contents("desc/welcome");
  }
  else {
    $pathof_name = "desc/".$_GET["name"];
    echo file_get_contents($pathof_name);
  }
}
function printList()
{
  $desc_list = scandir('./desc');
  for($i = 0; $i < sizeof($desc_list);++$i)
  {
    if($desc_list[$i]=='.' || $desc_list[$i]=='..') continue;
    echo "<li><a href = \"index.php?name=$desc_list[$i]\"> $desc_list[$i]</a></li>\n";
  }
}
?>

<!doctype html>
<html>
  <head>
    <title>Web-1</title>
    <meta charset = "utf-8">
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
      printList()
      ?>
    </ol>
    <?php
      printDesc()
     ?>
  </body>
</html>
