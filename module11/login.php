<?php

include("header.php");
?>

<div class="login">
<form class="form-signin" action="loginLogic.php" method="post">

<h1 class="h3 mb-3 font-weight-normal"></h1>

<label for="inputEmail" class="sr-only">Username</label>
<input type="text" id="inputEmail" class="from-control" placeholder="Username" name="username" require autofocus>

<label for="inputPassword" class="sr-only">Password</label>
<input type="Password" id="inputPassword" class="from-control" placeholder="Password" name="password" require autofocus>

<button class="btn btn-log btn-primary btn-block" type="submit"></button>

<small>Don't have account ? <a href="signup.php">Sign up</a></small>
<p class="mt-5 mb-3 text-muted">Digital School &copy;</p>


</form>
</div>






















<?php
include("footer.php");
?>