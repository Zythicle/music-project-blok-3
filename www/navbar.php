<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLARIS JAPAN</title>
</head>
<body>
    <header>
<nav>

    <ul class="flex space-x-6">
      <li><b><a href="index.php" class="text-gray-300 hover:text-white">SOLARIS JAPAN</a></b></li>
      <li><b><a href="figures.php" class="text-gray-300 hover:text-white">Figures</a></b></li>
      <li><b><a href="nextgen.php" class="text-gray-300 hover:text-white">NextGen</a></b></li>
      <li><b><a href="retro.php" class="text-gray-300 hover:text-white">Retro</a></b></li>
      <li><b><a href="trading-cards.php" class="text-gray-300 hover:text-white">Trading Cards</a></b></li>
      <li><b><a href="media.php" class="text-gray-300 hover:text-white">Media</a></b></li>
      <li><b><a href="#" class="text-gray-300 hover:text-white">Goods</a></b></li>
      <li><b><a href="#" class="text-gray-300 hover:text-white">Micomsoft</a></b></li>
      <li><b><a href="#" class="text-gray-300 hover:text-white">Blog</a></b></li>
      <?php if (isset($_SESSION['email'])): ?>
      <li><b><a href="logout.php" class="text-gray-300 hover:text-white">Logout</a></b></li>
      <?php else: ?>
      <li><b><a href="login.php" class="text-gray-300 hover:text-white">Login</a></b></li>
      <?php endif; ?>


    </ul>
</nav>
    </header>
</body>
</html>