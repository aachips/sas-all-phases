<header>
<div class="logo">
            <h1 class="logo-text"><span id="logo"><a href="<?php echo BASE_PATH . 'index.php'?>" class="logo"><img src="<?php echo LOGO_PATH . "/bloghorizontal.png" ?>" alt="#" height="50" width="230">aachips</a></span></h1>
        </div>

        
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_PATH . '/index.php' ?>">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . 'admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . 'logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_PATH . 'register.php' ?>"><s>Sign Up</s></a></li>
        <li><a href="<?php echo BASE_PATH . 'login.php' ?>"><s>Login</s></a></li>
      <?php endif; ?>
    </ul>
</header>


    <!-- <header>

        <i class="fa fa-bars menu-toggle"></i>
        <nav>
            <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="resources.html">Resources</a></li>
                <li><a href="register.html">Sign Up</a></li>
                <li><a href="login.html">Login</a></li>
                
                <li>
                    <a href="#">
                        <i class="fa fa-user">April's Apple Chips</i>
                    </a>
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-user">April Cyr</i>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    </header> -->