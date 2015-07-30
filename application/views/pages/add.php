<h2><?php echo $title ?></h2>

<div style="max-width:400px;">
<div style="color:#ff0000">	
<?php echo validation_errors(); ?>
</div>
<?php echo form_open('students/add') ?>

	<div class="form-group">
    <label for="name">Full Name</label>
    <input type="input" name="name" class="form-control" /><br />
	</div>

	<div class="form-group">
    <label for="address">Residence Address</label>
    <textarea name="address" class="form-control"></textarea><br />
	</div>

	<div class="form-group">
    <label for="Male">Male</label>
    <input type="radio" name="gender" value="Male" class="form-control">
	</div>

	<div class="form-group">	
    <label for="female">Female</label>
    <input type="radio" name="gender" value="Female" class="form-control">
	</div>

	<div class="form-group">
    <label for="eyop">Expected Year Of Passing:</label>
    <select name="eyop" class="form-control">
    	<option value="">--Select a year--</option>
    	<option value="2015">2015</option>
    	<option value="2016">2016</option>
    	<option value="2017">2017</option>
    	<option value="2018">2018</option>
    </select>
	</div>

    <div class="form-group">
    Extra Curricular Interests:
    <input type="checkbox" name="interests[]" value="sports" class="form-control">
    <label for="sports">sports</label>
    <input type="checkbox" name="interests[]" value="programming" class="form-control">
    <label for="programming">programming</label>
    <input type="checkbox" name="interests[]" value="arts" class="form-control">
    <label for="arts">arts</label>
    <input type="checkbox" name="interests[]" value="music" class="form-control">
    <label for="music">music</label>
	</div>

    <input type="submit" class="btn btn-primary" name="submit" value="Add" />
    &nbsp;
    <a href="<?php echo site_url('students')?>" class="btn btn-default"/>Cancel</a>

</form>

</div>