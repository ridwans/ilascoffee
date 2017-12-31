<?php 
include_once("function.php");

include_once("_template/top.php");
include_once("_template/header.php");
?>
	<table class="bar-title">
		<tr>
			<td>
				<table class="content-title">
					<tr>
						<td><h2>Welcome to Ila's Coffee</h2></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="nav-vert">
		<tr>
			<td><a href="<?= BASE_URL ?>food">Food</a></td>
		</tr>
		<tr>
			<td><a href="<?= BASE_URL ?>beverages">Beverages</a></td>
		</tr>
		<tr>
			<td><a href="<?= BASE_URL ?>account/?mod=history">History</a></td>
		</tr>
		<tr>
			<td><a href="<?= BASE_URL ?>about-us">About Us</a></td>
		</tr>
	</table>
<?php 
include_once("_template/footer.php");
include_once("_template/bottom.php");
?>
