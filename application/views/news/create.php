<div class="hero-unit">
    <h2>Create a new notice</h2>

    <?php if (isset($formNoticeError)) echo $formNoticeError; ?>

    <?php
    if ($this->session->userdata('login_state') == true) {
        echo form_open('news/create')
        ?>
        <input type="hidden" name="addNoticeForm" value="addNoticeForm"/>
        <label for="title">Title</label> 
        <input type="input" name="title" class="input-xxlarge"/><br />

        <label for="text">Notice</label>
        <textarea name="text" rows="5" class="input-xxlarge"></textarea><br />

        <input type="submit" class="btn btn-primary btn-small" name="submit" value="Create new notice" /> 

    </form>
<?php } else { ?>
    <div class="alert alert-error">
        <p>You dont have access for this page!</p>
        <p><a href="http://localhost/notice/home" class="btn btn-primary btn-small">Home</a></p>
    </div>
<?php } ?>
</div>