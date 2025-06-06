  <h2>Create New Account</h2>
 
  <form action="<?php echo BASE_URL; ?>/accountController/createAccount" method="post">
      <div class="form-group">
          <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name..."
              value="<?php if (!empty($data['fullName'])) : echo $data['fullName'];
                        endif; ?>">
          <div class="error">
              <?php if (!empty($data['fullNameError'])): echo $data['fullNameError'];
                endif; ?>

          </div>
      </div>
      <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email..."
              value="<?php if (!empty($data['email'])) : echo $data['email'];
                        endif; ?>">
          <div class="error">
              <?php if (!empty($data['emailError'])): echo $data['emailError'];
                endif; ?>

          </div>
      </div>
      <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password..."
              value="<?php if (!empty($data['password'])) : echo $data['password'];
                        endif; ?>">
          <div class="error">
              <?php if (!empty($data['passwordError'])): echo $data['passwordError'];
                endif; ?>

          </div>
      </div>
      <div class="form-group">
          <input type="submit" class="form-control" name="signupBtn" value="Register">
      </div>
      <!-- close form-froup -->
  </form>