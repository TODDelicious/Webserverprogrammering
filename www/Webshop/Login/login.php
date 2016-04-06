<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="login.css" >

	</head>
	
	<body>
		
		<p id="rubrik"> Formulär </p>
		
		<main>
		
			<table>
			
				<form action="skicka/index.php" method="post">

					<tr>
						<td>
							<p>Mail:</p><p class="color-red">*</p><br>
							<input type="text" name="Mail" size="30" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Password:</p><p class="color-red">*</p><br>
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