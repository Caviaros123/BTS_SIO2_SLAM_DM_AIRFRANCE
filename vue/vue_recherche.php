<!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fw-semibold fs-5" id="exampleModalLabel">Nous avons trouvés - <spa class="fw-bold text-danger"><?php echo count($searchResults); echo  count($searchResults) >= 2 ? " Vols" : " Vol" ?> </spa> </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="searchResultBody">
                <!-- Show logo with border rounded -->
                <img src="assets/img/Air_France_Logo.svg.png" class="rounded mx-auto w-50 h-50 m-5 d-block" alt="logo"  height="100">
                <h4 class="text-center fw-bold text-info my-3 ">Profitez de nos réductions de minuit</h4>

                <?php
                   if(count($searchResults) > 0){
                    foreach ($searchResults as $result) {
                        echo "<ul class='nav navbar container mt-2 text-center alert alert-info rounded'>
                            <li class='col-lg-12'>
                                <div class='row g-0 justify-content-around'>
                                    <div class='col-sm-6 card bg-info m-auto py-2 col-md-6'>
                                        <div class='d-flex'>
                                            <h1 class='fs-5 m-auto text-light'>".$result['villedepart']."</h1>
                                            <i class='fas fa-arrow-right m-auto text-light'></i>
                                            <h1 class='fs-5 m-auto text-light'>".$result['villearrive']."</h1>
                                        </div>
                                    </div>
                                    <div class='col-sm-4 col-md-4 m-auto justify-content-end'>
                                        <h1 class='fs-5 m-auto'><span class=' fw-bold text-danger'>".$result['prix']." €</span></h1>
                                    </div>
                                    <div class='col-sm-2 col-md-2 justify-content-end'>
                                        <a class='btn btn-danger' href='index.php?action=reservation&depart=".$result['villedepart']."&arrive=".$result['villearrive']."' class='btn btn-primary'>Réserver</a>
                                    </div>
                                </div>
                            </li>";
                        echo "</ul>";
                    }
                   }else{
                       echo "<h1 class='text-center text-danger mt-5'>Aucun résultat trouvé</h1>";
                   }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>