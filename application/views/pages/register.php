<div class="hero-unit">
<?php echo form_open('pages/register') ?>
  <input type="hidden" name="formRegister" value="formRegister">
  <fieldset>
    <legend>Register</legend>
    <?php if (isset($formRegisterError)) {?>
    <div class="alert alert-error">
        <?php echo $formRegisterError; ?>
    </div>
    <?php }?>
    <label>Username</label>
    <div class="input-prepend input-append">
    <input type="text" class="span11" placeholder="Username" name="username">
    <span class="add-on alert-error">*</span>
    </div>
    <label>Password</label>
    <div class="input-prepend input-append">
    <input type="password" class="span11" name="password">
    <span class="add-on alert-error">*</span>
    </div>
    <label>E-mail</label>
    <div class="input-prepend input-append">
    <input type="email" class="span11" placeholder="E-mail" name="email">
    <span class="add-on alert-error">*</span>
    </div>
    <label>Name</label>
    <input type="text" class="span11" placeholder="Name" name="name">
    <label>Surname</label>
    <input type="text" class="span11" placeholder="Surname" name="surname">
    <button type="submit" class="btn btn-success">Register</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </fieldset>
</form>
</div>
