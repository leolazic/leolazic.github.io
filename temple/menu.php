<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$imagesLink = curPageName() == "images.php" ? "<u style='color:#FFFFFF'>Gallery</u>" : "<a class='menulink' href='images.php'>Gallery</a>";
$wordsLink = curPageName() == "words.php" ? "<u style='color:#FFFFFF'>Text</u>" : "<a class='menulink' href='words.php'>Text</a>";
$contactLink = curPageName() == "contact.php" ? "<u style='color:#FFFFFF'>Contact</u>" : "<a class='menulink' href='contact.php'>Contact</a>";
$indexLink = curPageName() == "index.php" ? "<u style='color:#FFFFFF'>TemplM</u>" : "<a class='menulink' href='index.php'>TempleM</a>";
?>
<p class="pos_fixed">
<?php echo $imagesLink; ?>
<br>
<?php echo $wordsLink; ?>
<br>
<?php echo $contactLink; ?>
<br>
<?php echo $indexLink; ?>
<br/>
<a class='menulink' href='/'>Leo Lazic</a>
<br>
<br>
</p>
