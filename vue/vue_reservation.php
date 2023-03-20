<div>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h2 class="text-light fw-bold">Réservation</h2>
                        </div>
                        <form method="post">
                            <div class="form-group"> <input class="form-control" type="text" name="depart" value="marseilles" required placeholder="Depart"> <span class="form-label">Destination</span> </div>
                            <div class="form-group"> <input class="form-control" type="text" name="arrive" value="paris" required placeholder="Arrive"> <span class="form-label">Destination</span> </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" name="dateDepart" type="date"> <span class="form-label">Entre le
                                        </span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" name="dateArrive" type="date"> <span class="form-label">Et le
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
                            <div class="form-btn"> <button name="reserver" value="reserver" class="submit-btn">Réserver maintenant</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>