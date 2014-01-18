<div class="hero-unit">
    <h2>Create a new notice</h2>

    <?php if (isset($formNoticeError)) echo $formNoticeError; ?>

    <?php echo form_open('news/create') ?>
    <input type="hidden" name="addNoticeForm" value="addNoticeForm"/>
    <label for="title">Title</label> 
    <input type="input" name="title" class="input-xxlarge"/><br />

    <label for="text">Notice</label>
    <textarea name="text" rows="5" class="input-xxlarge"></textarea><br />

    <input type="submit" class="btn btn-primary btn-small" name="submit" value="Create new notice" /> 

</form>
</div>