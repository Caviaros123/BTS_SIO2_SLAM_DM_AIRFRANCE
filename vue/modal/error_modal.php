

<div class="modal fade modal-lg" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fw-semibold fs-5" id="errorModalLabel">Erreur</h1>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <?php
                if (isset($erreur)) {
                    echo "<div class='text-center alert alert-danger'>";
                    echo $erreur ?? "Vérifiez vos identifiants";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"  data-dismiss="modal">Fermer</button>
        </div>
        </div>
    </div>
</div>
