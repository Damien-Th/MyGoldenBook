
<div class="row">
<div class="col-m-4"></div>
<div class="col-m-4"></div>
<?php
      require_once 'class/Compteur.php';
      require_once 'class/DoubleCompteur.php';

      $compteur = new Compteur('compteur');
      $compteur->incrementer();
      $vues = $compteur->recuperer();

      $compteurDouble = new DoubleCompteur('compteur');
      $compteurDouble->incrementer();
      $vues2 = $compteurDouble->recuperer();
?>

      
      <p> Ce site à été consulté <?= $vues ?> fois<br> soit +10 = <?= $vues2 ?> fois</p>
      
      
<div class="col-m-4"></div>
      <ul class="d-flex p-2 bd-highlight">
      <?= nav_menu()?>
      </ul>
</div>

<p class="text-muted">Created and open sourced by the Bootstrap team. Licensed MIT.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script type="module" src="assets/js/starter.js"></script>
  </body>
</html>
