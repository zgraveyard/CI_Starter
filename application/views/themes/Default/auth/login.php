<div class='row'>
    <?php if ($message): ?>
        <div class="span16">
            <div class="alert-message block-message in fade">
                <a class="close" href="#">×</a>
                <span class="label warning pull-right">Warning</span>
                <?= $message; ?>
            </div>
        </div>
    <?php endif; ?>        
    <div class="span9" id="login">
        <h2>Login</h2>
        <div class="help-block">Please login with your email/username and password below.</div>
        <?php echo form_open("auth/login", array('class' => 'form-stacked')); ?>
        <div class="clearfix">
            <label for="identity">User Name / Email Address:</label>
            <div class="input">
                <div class="input-prepend">
                    <span class="add-on">@</span>
                    <?php echo form_input($identity); ?>                    
                </div>
            </div>
        </div>
        <div class="clearfix">
            <label for="password">Password:</label>
            <div class="input">
                <div class="input-prepend">
                    <span class="add-on">&nbsp;</span>
                    <?php echo form_input($password); ?>                   
                </div>
            </div>
        </div>
        <div class="clearfix">
            <label for="remember">Remember Me:</label>
            <div class="input">
                <div class="input-prepend">
                    <span class="add-on">
                        <?php echo form_checkbox('remember', '1', FALSE); ?>
                    </span>
                    <input type="text" class="span7 disabled" id="none" disabled="disabled" />
                </div>
            </div>
        </div>         
        <div class="action pull-right">
            <?php echo form_submit('submit', 'Login', 'class="btn primary"'); ?>
        </div>


        <?php echo form_close(); ?>        
    </div>
    <div class="span5">
        <ul class="media-grid center">
            <li>
                <?= anchor('http://www.mysafetysign.com/safety-floor-signs/adhesive-floor-sign/sku-sf-0063.aspx', img('assets/images/Restricted-Area-Floor-Sign-SF-0063.gif', 'class="thumbnail"'), 'taget="_blank"'); ?>
            </li>
        </ul>        
    </div>

</div>
