<html>

<?php
//include 'include/function.php';
//include 'include/mysql.php';
include 'include/pagesetup.php';
?>

<head>
<title><?php echo $title; ?></title>
</head>

<body <?php echo $bgc; echo $vlink; echo $link;?> >

<?php echo $fontc; ?>

<table align="center" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width ='16%' style="background-image:url('<?php echo $bgleft; ?>'); background-position:60px 16px; background-repeat:no-repeat;" background="<?php echo $bgleft; ?>">
			This is the left side
		</td>
		<td width='40%' style="background-image:url('<?php echo $bgmiddle; ?>'); background-repeat:repeat-x" background="<?php echo $bgmiddle; ?>">
			<center>
			<p><br><br><br><br><?php include 'header.php'; ?>
			<p>
			<?php include 'news.php'; ?>
			</center>
		</td>
		<td width ='16%' style="background-image:url('<?php echo $bgright; ?>'); background-position:0px -1px; background-repeat:no-repeat;" background="<?php echo $bgright; ?>">
	</tr>
</table>
<br>

<center>
<hr>


<?php include 'footer.php'; ?>
</center>

</body>

</html>
