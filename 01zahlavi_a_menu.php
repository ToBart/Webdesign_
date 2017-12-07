<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title><?php echo $titulek; ?></title>
  <!-- https://css-tricks.com/snippets/html/responsive-meta-tag/ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css" type="text/css" rel="stylesheet">
  <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<header>
    <div class="background">    
      <div>
        <a href="index.php"><img src="img/STRABAG.png" alt="logo STRABAG"></a>
      </div>
      </div>
  </header>

<nav>
  <div class="navcontainer">
  
<?php echo "";
if ($titulek=="STRABAG")
    {echo "<a class='pushed'>Úvod</a>";} else
    {echo "<a href='index.php'>Úvod</a>";} ?>

<?php echo "";
if ($titulek=="STRABAG - O nás")
    {echo "<a class='pushed'>O nás</a>";} else
    {echo "<a href='o-nas.php'>O nás</a>";} ?>
    
<?php echo "";
if ($titulek=="STRABAG - Služby")
    {echo "<a class='pushed'>Služby</a>";} else
    {echo "<a href='sluzby.php'>Služby</a>";} ?>
    
<?php echo "";
if ($titulek=="STRABAG - Vize")
    {echo "<a class='pushed'>Vize a strategie</a>";} else
    {echo "<a href='vize.php'>Vize a strategie</a>";} ?>

<?php echo "";
if ($titulek=="STRABAG - Kontakt")
    {echo "<a class='pushed'>Kontakt</a>";} else
    {echo "<a href='kontakt.php'>Kontakt</a>";} ?>
    
<?php echo "";
if ($titulek=="STRABAG - O webu")
    {echo "<a class='pushed'>O webu</a>";} else
    {echo "<a href='o-webu.php'>O webu</a>";} ?>    

      <img src="img/strabag-logo.png" alt="Strabag logo" class="navlogo">

  </div>
</nav>
  