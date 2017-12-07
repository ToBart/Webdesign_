<?php $titulek = "STRABAG - Kontakt";
include ("01zahlavi_a_menu.php"); 
?>

  <main>
      <div class="container">
      <h1>Kontakt</h1>
      </div>
      <section id="sidlo">
          <div class="container">
        <h2>Sídlo společnosti</h2>
              <a target="_blank" href="https://www.google.cz/maps/place/Na+B%C4%9Blidle+198%2F21,+150+00+Praha-Sm%C3%ADchov/@50.0715804,14.4042753,17z/data=!3m1!4b1!4m5!3m4!1s0x470b9457efe1e8a5:0xd02182d745274dcc!8m2!3d50.0715804!4d14.406464?hl=cs"><img src="img/map.gif" alt="mapa sídla společnosti" class="right"></a>
          <p>STRABAG a.s.</p>
          <p>Na Bělidle 198/21</p>
          <p>CZ - 150 00 Praha 5 – Smíchov</p>
          <p>Tel. +420 222 868 111</p>
          <p>Fax +420 222 868 211</p>
          <p>info.cz@strabag.com</p>
            <br>
          <p>IČ: 60838744</p>
          <p>Společnost je zapsána v obchodním rejstříku u Městského soudu v Praze oddíl B, vložka 7634</p>
          </div>
      </section>
      <section id="contact">
      <div class="container">
        <h2>Kontaktní formulář</h2>
        <p>
            Pokud máte zájem můžete nás kontaktovat pomocí formuláře níže:
        </p>
        <form action="odeslano.php" method="post">
          <label>Předmět Vašeho dotazu.<input type="text" name="predmet" placeholder="..."></label>
          <textarea name="textarea" placeholder="Text vaší zprávy..." required></textarea>
          <label>Váš email<input type="email" name="email" placeholder="@" required></label>
          <br>
          <button type="submit">Odeslat</button>
        </form>
      </div>
    </section>
  </main>

<?php include_once ("02zapati.php"); ?>
