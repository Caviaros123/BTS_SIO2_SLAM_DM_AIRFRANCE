<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-6 ">
            
           <!-- information sur le vol a reserver -->
            <div class="card">
                <div class="card-header pt-3">
                    <?php
                        $idUnique = uniqid();
                        echo "<h5>Numéro de réservation : <strong class='text-danger'>" . $idUnique . "</strong></h5>";
                    ?>
                </div>
                <div class="card-body m-auto py-5">
                <?php

                    $id = $_GET['idVol'];
                    $depart = $_GET['depart'];
                    $arrive = $_GET['arrive'];
                    $action = $_GET['action'];
                   

                    echo "<h1>Vol de <strong class='text-danger' >" . $depart . "</strong> à <strong class'text-info'>" . $arrive . "</strong></h1>";
                    echo "<h2>Numéro de vol : " . $id . "</h2>";
                    echo "<h5>Type : " . $action . "</h5>";
                    


                ?>
                </div>
            </div>
        </div>
        <div class="col-6 card p-4">
            <form class="row g-3">
                <?php 
                     echo "<input type='hidden' name='idVol' value='$idUnique'>";
                 ?>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Région</label>
                    <select id="inputState" name="region" class="form-select">
                        <option selected>Choisir...</option>
                        <option value="idf">
                            Ile-de-France
                        </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Code P.</label>
                    <input type="text" class="form-control" name="cp" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check ">
                        <input class="form-check-input " type="checkbox" name="terms" id="gridCheck">
                        <label class="form-check-label " for="gridCheck">
                             J'accepte les <a href="#" class="text-danger">termes et conditions</a>
                        </label>
                    </div>
                </div>
                <div class="col-12 ">
                    <button type="submit" class="btn btn-primary">Reserver</button>
                </div>
            </form>
        </div>
    </div>
</div>