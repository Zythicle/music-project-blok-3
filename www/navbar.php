<nav>    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'employee') { ?>
            <li><a href="dashboard.php">Dashboard</a></li>
        <?php } elseif(isset($_SESSION['role']) && $_SESSION['role'] == 'member') { ?>
            <li><a href="dashboard_user.php">Dashboard</a></li>
        <?php } ?>

        <?php if(!isset($_SESSION['username'])) { ?>
        <li><a href="register.php">Register</a></li>
        <?php } else { ?>
        <!-- nothing to show -->
        <?php } ?>

        <?php if(isset($_SESSION['username'])) { ?>
            <li><a href="logout.php">Logout</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
        <?php } ?>
    </ul>
</nav>
