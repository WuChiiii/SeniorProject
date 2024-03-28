<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".test").click(function(){
    $(this).hide();
  });
});
</script>
</head>
<body>
<?php

foreach (getenv() as $key => $value) {
  echo $key . ' - ' . $value . '<br/>' ;
}
echo "+++" . getenv('DBpassw') . "+++" ; 
?>
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p class = "test">Click me too!</p>

<input type="file" name="file" id="File" style="width:0.1px;height:0px;"/>
<label for="File" style="color:red;">Choose a file</label>
</body>
</html>
