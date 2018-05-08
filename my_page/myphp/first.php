<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>

<?php
$a=1;
$b=2;
function my_sum(){
  global$a+ global$b;
}
echo my_sum();
?>
</body>
</html>
