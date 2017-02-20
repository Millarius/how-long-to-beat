<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>
    Login
</h1>
<form action="<?php echo base_url(); ?>index.php/login" method="post">
<div class="input-group">
    <span class="input-group-addon" id="sizing-addon2">@</span>
    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2" required name="username">
</div>

<div class="input-group">
    <span class="input-group-addon" id="sizing-addon2">@</span>
    <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" required name="password">
</div>

<button type="submit" class="btn btn-default">Login</button>

</form>
