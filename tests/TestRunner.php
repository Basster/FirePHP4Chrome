<?php
/**
 * Test runner for Tests for FirePHP4Chrome
 *
 * This launches the 'custom' test suite - I'm not using anything like selenium for this and not an MVC whole webapp! :)
 * I just wanted something very simple to use to test stuff against my plugin while I develop.
 *
 * @author Aaron Saray
 */
?><!DOCTYPE html>
	<html>
		<head>
			<title>Test Runner For FirePHP4Chrome</title>
			<style>
				body {
					font-family: Tahoma, verdana, sans-serif;
					color: #444;
					padding: 10px 25px;
				}
			</style>
		</head>
		<body>
			<h1>Test Runner for FirePHP4Chrome</h1>
			<p>Choose one of the following tests.</p>
			<p><em>Please remember to open up the Developer tools panel first!</em></p>
			<p>
				<strong>Known issues:</strong>
				<ul>
					<li>Test the necessity of some frameworks needing the user agent modified (like older ZFs)</li>
				    <li>Validate that multi-line header of TRACE will display properly (should be based on proper sorting fixed above though)</li>
				</ul>
			</p>
			<hr>
			<?php
				require 'Tests.php';
				$tests = new \FirePHP4Chrome\Tests();

				echo '<ul>';
				foreach ($tests as $id=>$description) {
					echo "<li><a href='?id={$id}'>{$description}</a></li>";
				}
				echo '</ul>';

			    if (isset($_GET['id'])) {
					echo $tests->run($_GET['id']);
				}
			?>
		</body>
	</html>
