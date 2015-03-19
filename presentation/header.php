<div role="navigation" class="navbar navbar-default navbar-fixed-top">
  <div class="container" style="width:90%;">
    <div class="navbar-header">
      <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Story Box</a>
    </div>
    <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo strpos($_SERVER['SCRIPT_NAME'], 'index.php') === false ? '' : 'class="active"';?>>
          <a href="index.php">Home</a>
        </li>
        <li <?php echo strpos($_SERVER['SCRIPT_NAME'], 'why.php') === false ? '' : 'class="active"';?>>
          <a href="why.php" style="color:#e74c3c;">Why StoryBox</a>
        </li>
        <li <?php echo strpos($_SERVER['SCRIPT_NAME'], 'unique-demo.php') !== false
                       || strpos($_SERVER['SCRIPT_NAME'], 'basic-demo.php') !== false
                       || strpos($_SERVER['SCRIPT_NAME'], 'zen-demo.php') !== false
                       || strpos($_SERVER['SCRIPT_NAME'], 'demo.php') === false ? '' : 'class="active"';?>>
          <a href="demo.php">Demonstration</a>
        </li>
        <li <?php echo strpos($_SERVER['SCRIPT_NAME'], 'unique-demo.php') === false ? '' : 'class="active"';?>>
          <a href="unique-demo.php">Unique Demonstration</a>
        </li>
        <li <?php echo strpos($_SERVER['SCRIPT_NAME'], 'basic-demo.php') === false ? '' : 'class="active"';?>>
          <a href="basic-demo.php">Spartan Demonstration</a>
        </li>
        <li <?php echo strpos($_SERVER['SCRIPT_NAME'], 'zen-demo.php') === false ? '' : 'class="active"';?>>
          <a href="zen-demo.php" style="color:#428BCA;">Zen Demonstration</a>
        </li>
      </ul>
    </nav>
  </div>
</div>