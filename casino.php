<?php
//Script laden zodat je nooit pagina buiten de index om kan laden
include("includes/security.php");
?>

<div class="content">

    <div style="float: right;" >
        <img src="/images/casino.gif" >
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <a href="?page=multiblackjack"><h1>Blackjack multiplayer<span style="color:red; font-size:bold;"><sup>new</sup></h1></span></a>
    <a href="?page=flip-a-coin"><h1><?php echo $txt['menu_flipacoin']; ?></h1></a>
    <a href="?page=slots"><h1>Pok&eacute;slots<span style="color:red; font-size:bold;"><sup>new</sup></h1></span></a>
    <a href="?page=who-is-it-quiz"><h1><?php echo $txt['menu_who_is_it_quiz']; ?></h1></a>
    <a href="?page=wheel-of-fortune"><h1><?php echo $txt['menu_wheeloffortune']; ?></h1></a>
    <a href="?page=poke-scrambler"><h1>Pok&eacute;mon naam raden</h1></a>
    <a href="?page=kluis"><h1>Kraak de kluis</h1></a>
    <a href="?page=mystery-gift"><h1>Geheime code</h1></a>

</div>
