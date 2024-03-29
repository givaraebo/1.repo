

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Havale Min</title>
    <script type="text/javascript" src="download/a076d05399.js"></script>
    <script type="text/javascript" src="download/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="script.js" defer></script>
    <link rel="stylesheet" href="style11.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
  <div class="main">
    <header>
      <nav> 
          <?php
            require('logo/logo.php')
          ?>
          <label for="" class="logo1">Havale Min</label>

          <label id = "icon">
            <i class="fas fa-bars"></i>
          </label>
        <ul>
          <li class="active"><a href="#">Startseite</a></li>
          <li><a href="exercises/index.php">Übungen</a></li>
        </ul>
        <script>
          $(document).ready(function() {
            $('#icon').click(function() {
              $('ul').toggleClass('show');
            });
          });
        </script>
      </nav>
    </header>

    <div class="content0">
      <h1>Startseite</h1>
      <div class="de-ar">
        <span class="deutsch">
          Die Webseite ist fürs Deutschlernen.
        </span>
        <span class="arabisch">
          .الصفحة لتعلم اللغة الألمانية
        </span>
      </div>
      <div class="counter">
        <?php
          require('counter.php')
        ?>
      </div>
      <div class="content1">
        <div class="content11">

        </div>
        <div class="content12">
            <?php
              require('deutsch_deutsch_daten.php')
            ?>

        </div>
      </div>
    </div>


    <footer>

    </footer>
  </div>
</body>
</html>

<!--
  
https://fontawesome.com/

-->