<?php
/**
 * Created by IntelliJ IDEA.
 * User: Isuru 1
 * Date: 18/12/2015
 * Time: 22:19
 */
echo form_open("auth/check_login"); ?>
Username
<input type="text" name="username">
Password
<input type="text" name="password">
<button type="submit">Submit</button>
<?php echo form_close(); ?>