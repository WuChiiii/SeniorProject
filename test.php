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

<?php
echo password_hash( 'ICChang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'david@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'wyhwang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'ccchiang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'chtsai@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'showyang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'cjhuang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'scchou@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'cnyang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'sjyen@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'mtyang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'teresak@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'baolein@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'hcchi@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'guanling@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'sclo@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'mxchen@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'laich@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'tkchang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'yung@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'wcc@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'wcfang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";
echo password_hash( 'hjchang@gms.ndhu.edu.tw' , PASSWORD_DEFAULT ). "<br/>";

?>
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p class = "test">Click me too!</p>

<input type="file" name="file" id="File" style="width:0.1px;height:0px;"/>
<label for="File" style="color:red;">Choose a file</label>
</body>
</html>
