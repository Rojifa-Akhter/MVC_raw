<?php $this->flash('accountCreated', 'alert alert-success'); ?>

<h2>User Login</h2>
<form action="<?php echo BASE_URL; ?>/accountController/userLogin" method="post">
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email..."
        value="<?php if (!empty($data['email'])): echo $data['email']; endif; ?>">
        <div class="error">
            <?php if (!empty($data['emailError'])): echo $data['emailError']; endif; ?>
        </div>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password..."
        value="<?php if (!empty($data['password'])): echo $data['password']; endif; ?>">
        <div class="error">
            <?php if (!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control" name="login" class="btn btn-primary" value="Login">
    </div>
    <!-- close form-froup -->
</form>