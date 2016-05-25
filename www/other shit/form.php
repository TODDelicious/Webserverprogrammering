<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="/CSS/Anmalan.css" >

	</head>
	
	<body>
		
		<p id="rubrik"> Formulär </p>
		
		<main>
		
			<table>
			
				<form action="/skicka/index.php" method="post">
				
					<tr>
						<td>
							<p>Namn:</p><p class="color-red">*</p><br>
							<input type="text" name="Anmälare" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Mail:</p><p class="color-red">*</p><br>
							<input type="text" name="Mail" size="30" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Kort beskrivning:</p><p class="color-red">*</p><br>
							<input type="text" name="Kort_beskrivning" size="40" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Detaljerad beskrivning:</p><br>
							<textarea type="text" name="Detaljerad_beskrivning" rows="5" cols="40"></textarea>
						</td>
					</tr>
					
					<tr>
						<td>
							<p> Prioritet</p><p class="color-red">*</p><br>
							<input type="radio" name="Prioritet" value="1" required> Mycket Hög
							<input type="radio" name="Prioritet" value="2"> Hög
							<input type="radio" name="Prioritet" value="3" checked> Medel  
							<input type="radio" name="Prioritet" value="4"> Låg 
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