<!DOCTYPE html>
<html>
<head>
	<title>Person Profile</title>
</head>
<body>
<table border="1" width="700px">
<tr>
<td>
	<center><h1>Person Profile</h1></center>
	</td>
</tr>
</table>
	<form>
	<fieldset>
		
		<center>
	<table border="1" width="300px">
		<tr>
			<td>Name:</td>
			<td c><input type="text" name="" value=""/></td>
			
			<tr>
			<td>Email:</td>
			<td c><input type="text" name="" value=""/></td>
			
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
		<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		
		
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSc.
				<input type="checkbox" name="">MSc.

			</td>
		</tr>
		
		<tr>
			<td>Photo:</td>
			<td>
				<input type="file">
			</td>
		</tr>
		
		
		<tr>
			<td></td>
			<td>
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
	</center>
	</fieldset>
</body>
</html>