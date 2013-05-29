<div class="hero-unit">
<h2>Create a new notice</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Title</label> 
	<input type="input" name="title" class="input-xxlarge"/><br />

	<label for="text">Notice</label>
	<textarea name="text" rows="5" class="input-xxlarge"></textarea><br />
	
	<input type="submit" class="btn btn-primary btn-small" name="submit" value="Create new notice" /> 

</form>
</div>