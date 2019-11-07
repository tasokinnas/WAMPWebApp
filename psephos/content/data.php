<?php	
	require_once('include/DAO.php');
	require_once('include/form-helper.php');
	$dao = new Dao();
	
	if( !isAccessGranted() ) {
		$errors['restricted'] = "Access restricted. You must login first.";
		$_SESSION['errors'] = $errors;
		displayError('restricted'); 
} else { ?>
<section id="filter">	
		<h3>Data Query!</h3>
		<form method="GET" action="#table">
			<p>
				<label>City: </label>
				<input type="text" name="city" placeholder="city" />
			</p>
			
			<!-- Stretch Goal: ability to customize election year and cycle...
			<p>
				<span>Election Year</span>
				<label><input type="radio" name="year" value="2014" checked="checked"> 2014</label>
				<label><input type="radio" name="year" value="2012"> 2012</label>
				<label><input type="radio" name="year" value="2010"> 2010</label>
			</p>
			<p>
				<span>Election Cycle</span>
				<label><input type="radio" name="cycle" value="general" checked="checked"> General</label>
				<label><input type="radio" name="cycle" value="primary"> Primary</label>
			</p>  	
			-->

			<!-- submit (button?) -->
			<input type="submit" value="Retreive Dataset">
			<input type="reset" value="Clear">
		</form>
</section>	
<section id="output">
	<h3>Data Output!</h3>
	<?php	
				
		$city = $_GET['city'];
		$voterData =$dao->getVoterData($city);
		//var_dump($voterData);
		?>
		<table class="table">
			<tr>
				<th>First</th>
				<th>Last</th>
				<th>Street Number</th>
				<th>Street Name</th>
				<th>Unit</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>2014 General</th>
				<th>2014 Primary</th>
			</tr>
		<?php
		foreach ( $voterData as $row ) {
			echo "<tr><td>";
			echo $row['First_Name'];
			echo "</td><td>";
			echo $row['Last_Name'];
			echo "</td><td>";
			echo $row['Street_Number'];
			echo "</td><td>";
			echo $row['Street_Name'];
			echo "</td><td>";
			echo $row['Unit'];
			echo "</td><td>";
			echo $row['City'];
			echo "</td><td>";
			echo $row['State'];
			echo "</td><td>";
			echo $row['Zip'];
			echo "</td><td>";
			echo $row['2014_GENERAL_VOTE'];
			echo "</td><td>";
			echo $row['2014_PRIMARY_VOTE'];
			echo "</td>";
			echo "</tr>";
		}
		?>
		</table>
</section>
<?php } ?>