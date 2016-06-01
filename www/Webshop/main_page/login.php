<!DOCTYPE html>
<html>
	<head>
		<link rel="Stylesheet" href="main.css" >
	</head>
	<body>
		<p id="rubrik"> Log in </p>
		<main>
			<table>
				<!-- Ett formulär för att logga in på sidan -->
				<form action="skicka/index.php" method="post">
					<tr>
						<td>
							<p class="ptag">Mail:</p><p class="color-red">*</p><br>
							<input type="text" name="Mail" size="30" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Password:</p><p class="color-red">*</p><br>
							<input type="password" name="Password" size="40" required>
						</td>
					</tr>
					<tr>
						<td class="padding-0">
							<p class="color-red font-size-8 float-right"> * = Obligatoriskt </p>
						</td>
					</tr>
					<tr>
						<td class="center">
							<input type="submit" name="Submit" value="Skicka">
						</td>
					</tr>	
				</form>
			</table>
		</main>
	</body>	
</html>