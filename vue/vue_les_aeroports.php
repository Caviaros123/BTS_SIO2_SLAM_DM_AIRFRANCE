<section style="padding-left: 280px;padding-right: 280px; padding-bottom: 180px;">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-lg-flex align-items-lg-center">
                        <h4 class="d-flex d-lg-flex align-items-lg-center">Liste des aéroports</h4>
                    </div>
                    <div class="col-md-6" style="text-align: left;">
                        <form class="d-flex justify-content-center flex-wrap justify-content-lg-end my-2" method="post">
                            <div class="my-2"><input class="form-control" type="text" name="mot" placeholder="Filtrer la table" /></div>
                            <div class="my-2"><button class="btn btn-primary ms-sm-2" type="submit" name="Filtrer" value="Filtrer">Filtrer</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id aeroport</th>
                            <th>Nom</th>
                            <th>Pays</th>
                            <?php
                            if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') {
                                echo '<th style="width: 150px;">Actions</th>';
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lesAeroports as $unAeroport) {
                            echo "<tr>";
                            echo "<td>" . $unAeroport["idaeroport"] . "</td>";
                            echo "<td>" . $unAeroport["nom"] . "</td>";
                            echo "<td>" . $unAeroport["pays"]. "</td>";

                            if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') {
                                echo "<td>
                                    <div class='col-md-6 col-lg-12' style='text-align: left;'>
                                        <a class='btn btn-danger' href='index.php?page=1&action=sup&idaeroport=" . $unAeroport["idaeroport"] . "' style='width: 54px;height: 34px;margin: 8px;margin-right: 30;margin-left: 0;padding: 0;'><i class='far fa-trash-alt'></i></a>
                                        <a class='btn btn-warning' href='index.php?page=1&action=edit&idaeroport=" . $unAeroport["idaeroport"] . "' style='width: 54px;height: 34px;padding: 0;'><i class='far fa-edit' style='margin: 0;'></i></a>
                                    </div>
                                 </td>";
                            }
                            echo "</tr>";
                        }
                        if ($lesAeroports == null) {
                            echo '<tr><td colspan="4" ><h1 class="text-danger">Pas d\'aéroports</h1></td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>