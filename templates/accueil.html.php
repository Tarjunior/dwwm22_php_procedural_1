

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="imageCaroussel w-100"src="https://images.unsplash.com/photo-1587279484796-61a264afc18b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="imageCaroussel w-100" src="https://images.unsplash.com/photo-1590595978583-3967cf17d2ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="imageCaroussel w-100"src="https://images.unsplash.com/photo-1587279484796-61a264afc18b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="container py-5">

<div class="row align-items-center justify-space-around">

    <?php foreach($products as $product) : ?>
    
    <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
    <div class="card">
  <img class="imageCard" src="<?= $product["imagePath"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $product["name"]?></h5>
    <p class="card-text"><?=formatPriceEuro ($product["price"])?> </p>
    <a href="pageproduit.php?id=<?= $product["id"] ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

    <?php endforeach ?>

    



<div class="card bg-dark text-white">
    <img class="overlayPerso" src="https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2970&q=80" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Conf??rence sur l'univers Star wars</h5>
        <p class="card-text">Obiwan Kenobi en sp??cial guest</p>
        <p class="card-text">Le 14 janvier 2022 au U-Arena (La D??fense)</p>
    </div>
</div>
