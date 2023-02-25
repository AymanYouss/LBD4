<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</head>

<body>
  <form method="post" action="">
    <div class="row form-group">
      <label for="status" class="col-form-label col-2">Status</label>
      <select name="status" id="status" class="form-control col-3">
        <option value="salarie">Salarié</option>
        <option value="fonctionnaire">Fonctionnaire</option>
        <option value="liberale">Profession Libérale</option>
      </select>
    </div>
    <div class="row form-group">
      <label for="nom" class="col-form-label col-2">Nom</label>
      <input required type="text" name="nom" id="nom" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="prenom" class="col-form-label col-2">Prénom</label>
      <input required type="text" name="prenom" id="prenom" class="form-control col-3">
    </div>
    <div class="row form-group">
      <label for="montant" class="col-form-label col-2" for="montant">Montant de financement</label>
      <input type="number" required min="0" step="any" class="form-control col-3 " id="montant" name="montant">
    </div>
    <div class="row form-group">
      <label for="duree" class="col-form-label col-2">Durée (en mois)</label>
      <input type="number" required min="6" max="300" class="form-control col-3" id="duree" name="duree">
    </div>
    <div class="row form-group">
      <label for="assurance" class="col-form-label col-2 form-check-label">Voulez-vous une assurance?</label>
      <input type="checkbox" class="form-check" checked name="assurance" id="assurance">
    </div>
    <input type="submit" value="Afficher le tableau d'amortissement">
  </form>

  <?php
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['montant']) && isset($_POST['duree'])) {
    $status = $_POST['status'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $capitale_emprunte = $_POST['montant'];
    $montant_restant = $capitale_emprunte;
    $duree = $_POST['duree'];
    $date = strtotime("today");
    $date_str = date("d/m/Y", $date);

    switch ($status) {
      case 'salarie':
        $taeg = 0.05 / 12;
        break;
      case 'fonctionnaire':
        $taeg = 0.04 / 12;
        break;
      case 'liberale':
        $taeg = 0.06 / 12;
        break;
    }
    if (isset($_POST["assurance"])){
        $assurancePrice = ((0.04 / 100) * $capitale_emprunte);
    }
    else{
        $assurancePrice = 0;
    }

    $mensualite = $capitale_emprunte * pow( $taeg / ($taeg - 1),$duree);
      ?>

    <div class="container d-flex justify-content-center">
      <table class="table table-striped table-bordered table-hover w-75 mb-4">
        <thead>
          <tr class="bg-secondary text-white">
            <th>Date Ech</th>
            <th>Mensualité</th>
            <th>Intérêt</th>
            <th>Amortissement </th>
            <th>Cap. restant dû </th>
          </tr>
        </thead>
        <tbody class="text-right">
          <?php
          for ($i = 0; $i < $duree; $i++) {
            $interet = $montant_restant * $taeg;
            $amortissement = $mensualite - $interet;
            $montant_restant -= $amortissement;
          ?>
            <tr>
              <td><?php echo $date_str; ?></td>
              <td><?php echo $mensualite + $assurancePrice ?></td>
              <td><?php echo $interet?></td>
              <td><?php echo $amortissement ?></td>
              <td><?php echo $montant_restant ?></td>
            </tr>
          <?php
            $date = strtotime("+1 month", $date);
            $date_str = date("d-m-Y", $date);
          }

          ?>



        </tbody>
      </table>
    </div>

  <?php
  }
  ?>


</body>

</html>