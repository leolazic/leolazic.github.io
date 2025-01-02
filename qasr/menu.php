<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$indexLink = curPageName() == "index.php" ? "<u>Qasr Sing</u>" : "<a href='index.php'>Qasr Sing</a>";
$imagesLink = curPageName() == "images.php" ? "<u>Images</u>" : "<a href='images.php'>Images</a>";
$wordsLink = curPageName() == "words.php" ? "<u>Words</u>" : "<a href='words.php'>Words</a>";
$contactLink = curPageName() == "contact.php" ? "<u>Contact</u>" : "<a href='contact.php'>Contact</a>";
?>
<p class="pos_fixed">
<?php echo $imagesLink; ?>
<br>
<?php echo $wordsLink; ?>
<br>
<?php echo $contactLink; ?>
<br>
<?php echo $indexLink; ?>
<br>
<a href='/'>Leo Lazic</a>
<br>
</p>
