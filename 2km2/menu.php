<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$indexLink = curPageName() == "index.php" ? "<u>home</u>" : "<a href='index.php'>home</a>";
$forewordLink = curPageName() == "foreword.php" ? "<u>foreword</u>" : "<a href='foreword.php'>foreword</a>";
$ch1Link = curPageName() == "initial.php" ? "initial 2km<sup>2</sup>" : "<a href='initial.php'>initial 2km<sup>2</sup></a>";
$ch2Link = curPageName() == "monochrome.php" ? "b&w 2km<sup>2</sup>" : "<a href='monochrome.php'>b&w 2km<sup>2</sup></a>";
$ch3Link = curPageName() == "2km.php" ? "2km<sup>2</sup>" : "<a href='2km.php'>2km<sup>2</sup></a>";
$contactLink = curPageName() == "contact.php" ? "<u>contact</u>" : "<a href='contact.php'>contact</a>";
?>

<table width="100%">
	<tr>
		<td>
			<?php echo $indexLink; ?>
			<br/><br/><br/>
		</td>
	</tr>	
	<tr>
		<td>
			<?php echo $forewordLink; ?>
			<br/><br/>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $ch1Link; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $ch2Link; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $ch3Link; ?>
			<br/><br/><br/><br/>
		</td>
	</tr>
	<tr>
		<td>
      <a href='/'>LL Home</a>
		</td>
	</tr>
		<tr>
		<td>
			<?php echo $contactLink; ?>
		</td>
	</tr>

</table>
