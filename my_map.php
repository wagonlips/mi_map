<?php 
  function shift_x_coord($x) {
    $x = $x + 10000;
    return $x;
  }
  function shift_y_coord($y) {
    $y = $y + 10000;
    return $y;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Div</title>
<style type="text/css">
.location {border:1px dashed gray;height:20px;width:20px;position:absolute;}
#limit {top:20000px;left:20000px;}
<?php echo "#_001 {left:" . shift_x_coord(64) . "px;top:" . shift_y_coord(280) . "px;}"; ?> /* arrow bay */
<?php echo "#_002 {left:" . shift_x_coord(-712) . "px;top:" . shift_y_coord(499) . "px;}"; ?> /* 2nd nether portal (obsidian farm) */
/*  64            63              280     arrow bay
  -712  32              499 2nd nether portal (obsidian farm)
  -201  64              305     the hobbit house
  -391  64              213 lava pool
  -269  64              239 craft table
  -242  69              253 tree torch
  */
</style>
</head>
<body>
<p><?php echo "-712<br />"; echo shift_x_coord(-712); ?></p>
<div id="menu" class="fixed">
  <ul>
    <li><a href="#_001">Arrow Bay</a></li>
    <li><a href="#_002">2nd nether portal (obsidian farm)</a></li>
  
  </ul>
</div>
<div id="_001" class="location">1</div>
<div id="_002" class="location">2</div>
<div id="test3" class="location">3</div>
<div id="test4" class="location">4</div>
<div id="limit" class="location"></div>
</body>
</html>
