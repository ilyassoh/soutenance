<div class="mb-3">
    <label for="ref" class="form-label">Référence de l'échantillon :</label>
    <input type="text" class="form-control" id="ref" name="ref">
</div>
<div class="mb-3">
    <label for="solvant" class="form-label">Solvant utilisé :</label>
    <input type="text" class="form-control" id="solvant" name="solvant">
</div>
<div class="mb-3">
    <label for="masse" class="form-label">Masse de l'échantillon :</label>
    <div class="input-group">
        <input type="text" class="form-control" id="masse" name="masse">
        <span class="input-group-text">précisez l'unité</span>
    </div>
</div>
<div class="mb-3">
    <label for="rmnDemandee" class="form-label">RMN demandée :</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="h1" id="h1" value="h1">
        <label class="form-check-label" for="rmn1H">1H</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="c13" id="c13" value="13C">
        <label class="form-check-label" for="rmn13C">13C</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="dept" id="dept" value="DEPT">
        <label class="form-check-label" for="rmnDEPT">DEPT</label>
    </div>
    <div class="form-check">
        <label class="form-check-label" for="rmnAutre">Autres à préciser :</label>
        <input type="text" class="form-control" id="autre" name="autre">
    </div>
</div>
<div class="row justify-content-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Envoyer
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Souhaitez-vous confirmer l'envoi de votre demande ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
            <button type="submit" class="btn btn-primary">Oui Envoyer</button>
        </div>
        </div>
    </div>
    </div>
</div>