<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo base_url() ?>index.php/home">Notice</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="<?php echo base_url() ?>index.php/home">Home</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/about">About</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>            
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>index.php/news">View Notice</a></li>                
                            <li><a href="<?php echo base_url() ?>index.php/news/create">Create Notice</a></li>                
                        </ul>
                    </li>
                </ul>          
                <?php $attributes = array('class' => 'navbar-form pull-right');
                echo form_open('templates/menu', $attributes);
                ?>
                <input type="hidden" name="formLogin" value="formLogin">
                <input class="span2" type="text" placeholder="Username" name="username">
                <input class="span2" type="password" placeholder="Password" name="password">
                <button type="submit" class="btn btn-success">Sign in</button>
                <a href="<?php echo base_url() ?>index.php/register" class="btn btn-primary">Register</a>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
    <?php if (isset($formLoginError)) { ?>
    <div class="alert alert-error pull-right loginError">
    <?php echo $formLoginError; ?>
    </div>
<?php
}?>