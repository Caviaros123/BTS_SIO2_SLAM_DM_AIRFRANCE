<div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
    <div class="carousel-inner h-100">
        <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/1440x600-bw-hp.jpeg" alt="Slide Image" style="z-index: -1;">
            <div class="container d-flex flex-column justify-content-center h-100">
                <div class="row">
                    <div class="col-md-6 col-lg-8 col-xl-4 offset-md-2">
                        <div style="max-width: 350px;">
                            <h1 class="display-6 text-uppercase fw-bold text-light">DES OFFRES QUI VONT VOUS FAIRE DÉCOLLER</h1>
                            <p class="text-start text-light my-3"> Envolez-vous vers la France et l’Europe dès 50 € TTC l’aller simple ! </p><a class="btn btn-primary btn-lg me-2" role="button" href="#">JE M'ENVOLE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/hp-blueweb-1440x600%20(1).jpeg" alt="Slide Image" style="z-index: -1;">
            <div class="container d-flex flex-column justify-content-center h-100">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-md-2">
                        <div style="max-width: 350px;">
                            <h1 class="text-uppercase fw-bold text-light">carte cadeau air france</h1>
                            <p class="text-light my-3"> Seul ou à plusieurs, offrez le ciel avec la carte cadeau ! </p><a class="btn btn-primary btn-lg me-2" role="button" href="#">J'EN PROFITE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/hp-blueweb-1440x600.jpeg" alt="Slide Image" style="z-index: -1;">
            <div class="container d-flex flex-column justify-content-center h-100">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-md-2">
                        <div style="max-width: 350px;">
                            <h1 class="text-uppercase fw-bold text-light">carte cadeau air france</h1>
                            <p class="text-light my-3"> Seul ou à plusieurs, offrez le ciel avec la carte cadeau ! </p><a class="btn btn-primary btn-lg me-2" role="button" href="#">J'EN PROFITE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
    </ol>
</div>

<div class="text-center m-5 b h1 card">
    <h1>Bienvenue chez Air France</h1>
</div>

<div>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Reservation</h1>
                        </div>
                        <form action="reservation.php" method="post">
                            <div class="form-group"> <input class="form-control" type="text" name="depart" value="paris" required placeholder="Depart"> <span class="form-label">Destination</span> </div>
                            <div class="form-group"> <input class="form-control" type="text" name="arrive" value="londres" required placeholder="Arrive"> <span class="form-label">Destination</span> </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" name="dateDepart" type="date" required> <span class="form-label">Entre le
                                        </span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" name="dateArrive" type="date" required> <span class="form-label">Et le
                                        </span> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" required>
                                            <option value="" hidden>Nombre de places</option>
                                            <?php

                                            for ($i = 0; $i < 11; $i++) {
                                                echo "<option selected value='$i'>$i</option>";
                                            }

                                            ?>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"> <select class="form-control" required>
                                            <option value="" hidden>Nombre d'adults</option>
                                            <?php

                                            for ($i = 0; $i < 11; $i++) {
                                                echo "<option selected value='$i'>$i</option>";
                                            }

                                            ?>
                                        </select> <span class="select-arrow"></span> <span class="form-label">Adults</span> </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"> <select class="form-control">
                                            <option value="" hidden>Nombre d'enfants</option>
                                            <?php

                                            for ($i = 0; $i < 11; $i++) {
                                                echo "<option selected value='$i'>$i</option>";
                                            }

                                            ?>
                                        </select> <span class="select-arrow"></span> <span class="form-label">Enfant</span> </div>
                                </div>
                            </div>
                            <div class="form-btn"> <button type="submit" name="reserver" class="submit-btn">Réserver maintenant</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>