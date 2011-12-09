<div class='row'>
    <div class="span-two-thirds">
        <h2>Login</h2>
        <p>Please login with your email/username and password below.</p>
        <?php echo form_open("auth/login"); ?>
        <p>
            <label for="identity">Email/Username:</label>
            <?php echo form_input($identity); ?>
        </p>

        <p>
            <label for="password">Password:</label>
            <?php echo form_input($password); ?>
        </p>

        <p>
            <label for="remember">Remember Me:</label>
            <?php echo form_checkbox('remember', '1', FALSE); ?>
        </p>


        <p><?php echo form_submit('submit', 'Login'); ?></p>


        <?php echo form_close(); ?>        
    </div>
    <div class="span-one-third"><?php echo $message; ?></div>

</div>
