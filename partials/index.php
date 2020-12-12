<?php
session_start();
if(isset($_POST['submit'])){
$text = $_POST['text-captcha'];
if($_SESSION['code'] == $text){
    echo 'matched';
}else{
    echo 'Mismatch';
}}
?>
<form action="index.php" method="post">
<img src="_image.php" name="captcha">
<input type="text" name="text-captcha">
<button type="submit" name="submit">submit</button>
<?php echo $_SESSION['code']; ?>
</form>
