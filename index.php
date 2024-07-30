<?php 
include "random.php"; // Ajout du point-virgule ici

?><h1>armes magiques:</h1> <h3><span>degats, bonus aux dégats, nom, effet</span></h3><hr>

<?php

for ($i = 1; $i <= 4; $i++) {
   ?><p><?php echo(unearmet()); ?></p>
   <br>
   <?php
}
?><h1>armure magiques:</h1><h3><span>CA, bonus potentiel, nom, effet</span></h3> <hr><?php
for ($i = 1; $i <= 3; $i++) {
    ?><p><?php echo(unearmure()); ?></p>
    <br>
    <?php
 }

 ?><h1>Objet magiques:</h1><h3><span>nom, effet</span></h3>
 
 <hr><?php
 for ($i = 1; $i <= 3; $i++) {
    ?><p><?php echo(unobjet()); ?></p>
    <br>
    <?php
 }
?>
