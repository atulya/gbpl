<h3>Search Products</h3>
<div class="panel panel-default sideContent">
  <div class="panel-body text-left">
  <form method="POST" action="searchResult.php" name="search">
    <label for="Keywords">
    	Keywords	
    	<input class="form-control" type="text" required="required" name="keyword" value="<?php if(isset($_POST['keyword'])){ echo $_POST['keyword']; } ?>" >
    </label>
    <label for="Product Category">
    	Product Category	
    	<select name="product_category" class="form-control">
    		<option value="0">ANY Product Category</option>
			<option value="1">PROMETHUS</option>
			<option value="2">Renaissant</option>
			<option value="3">Hemera</option>
			<option value="4">Zooker</option>
    	</select>
    </label>
    <label for="Preparation/Form">
    	Preparation/Form	
    	<select name="does_type" class="form-control" size="1" style="display: block;">
		<option value="0" selected="selected">ANY Preparation/Form</option>
		<option value="Boluses">Boluses</option><option value="Capsules">Capsules</option>
		<option value="Ear, Eye &amp; Nose Drops">Ear, Eye &amp; Nose Drops</option>
		<option value="Hospital Supplies ">Hospital Supplies </option>
		<option value="Injections">Injections</option><option value="Insecticide">Insecticide</option>
		<option value="Lab Equipment">Lab Equipment</option>
		<option value="Medical Disposable">Medical Disposable</option>
		<option value="Oral Solutions">Oral Solutions</option>
		<option value="Other Preparations">Other Preparations</option>
		<option value="Powder for Injection ">Powder for Injection </option>
		<option value="Powder for Suspension">Powder for Suspension</option>
		<option value="Powders and Granules">Powders and Granules</option>
		<option value="Raw Materials">Raw Materials</option>
		<option value="Syrup">Syrup</option>
		<option value="Tablets ">Tablets </option>
		<option value="Test Kits ">Test Kits </option>
		</select>
    </label>
    <label for="">
    	<input name="searchRecord" value="Submit" class="btn btn-primary" type="submit">
    </label>
	</form>
  </div>
</div>