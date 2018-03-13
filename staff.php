<?php require('views/partials/head.php') ?>

	<div id="header">
		<h1 id="titulo">Fox Corp</h1>
	</div>

	<div id="main">
		<table id="structure">
			<tr>
				<td id="navigation">
					&nbsp;
				</td>
				<td id="page">
					<h2>Staff Menu</h2>
					<p>Welcome to the staff area</p>
					<ul>
						<li><a href="content.php">Manage Website</a></li>
						<li><a href="new_user.php">Add staff User</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>

	<h1>Content Area</h1>

<?php require('views/partials/footer.php') ?>
