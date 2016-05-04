<!DOCTYPE html>
<html>
	<head>
		<link rel="Stylesheet" href="main.css" >
	</head>
	<body>
		<p id="rubrik"> Register </p>
		<main>
			<table>
				<form action="register_function.php" method="post">
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
						<td>
							<p class="ptag">Name:</p><p class="color-red">*</p><br>
							<input type="text" name="First_name" size="40" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Sir name:</p><p class="color-red">*</p><br>
							<input type="text" name="Last_name" size="40" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Social security number:</p><p class="color-red">*</p><br>
							<input type="text" name="Social_Security_Number" size="40" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Adress:</p><p class="color-red">*</p><br>
							<input type="text" name="Adress" size="40" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Postal code:</p><p class="color-red">*</p><br>
							<input type="text" name="Postal_code" size="40" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Country:</p><p class="color-red">*</p><br>
							<input type="text" name="Country" size="40" required>
						</td>
					</tr>
					<tr>
						<td>
							<p class="ptag">Phone numer:</p><p class="color-red">*</p><br>
							<input type="text" name="Phone_number" size="40" required>
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