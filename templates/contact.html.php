






<div class="container py-5">

<div class="row align-items-center justify-space-around">


<?php foreach($membres as $membre) : ?>

<div class="col-sm-12 col-md-6 col-lg-4 mt-2">
    <div class="card">
  <img class="imageCard" src="<?= $membre["imagePath"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><strong><?= $membre["nomComplet"]?></strong></h5>
    <p class="card-text"><?= $membre["telephone"]?></p>
    <a href="pagestaff.php?id=<?= $membre["id"] ?>" class="btn btn-primary w-100">Voir</a>
    
  </div>
</div>
</div>

<?php endforeach ?>


</div>
</div>





