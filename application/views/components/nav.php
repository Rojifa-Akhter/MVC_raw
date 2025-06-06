<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">User Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo BASE_URL; ?>/profileController">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <?php if (! $this->getSession('userId')): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/accountController">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/accountController/loginForm">Login</a>
        </li>
        <?php else:?>
           <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL; ?>/profileController/fruitForm">Add Fruit</a>
        </li>
     <?php endif; ?>

      </ul>
      <?php if ($this->getSession('userId')): ?>
      <ul class="my-2 my-lg-0">
        <a href="<?php echo BASE_URL; ?>/profileController/logout" class="btn btn-success">Logout</a></ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!-- close navbar -->