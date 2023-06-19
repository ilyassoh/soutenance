<div class="mb-3">
    <label for="referenceEchantillon" class="form-label">Référence de l'échantillon :</label>
    <input type="text" class="form-control" id="referenceEchantillon" name="referenceEchantillon">
</div>
<div class="mb-3">
<label for="solvantUtilise" class="form-label">Solvant utilisé :</label>
<input type="text" class="form-control" id="solvantUtilise" name="solvantUtilise">
</div>
<div class="mb-3">
<label for="masseEchantillon" class="form-label">Masse de l'échantillon :</label>
<div class="input-group">
    <input type="text" class="form-control" id="masseEchantillon" name="masseEchantillon">
    <span class="input-group-text">précisez l'unité</span>
</div>
</div>
<div class="mb-3">
<label for="rmnDemandee" class="form-label">RMN demandée :</label>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="rmnDemandee[]" id="rmn1H" value="1H">
    <label class="form-check-label" for="rmn1H">1H</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="rmnDemandee[]" id="rmn13C" value="13C">
    <label class="form-check-label" for="rmn13C">13C</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="rmnDemandee[]" id="rmnDEPT" value="DEPT">
    <label class="form-check-label" for="rmnDEPT">DEPT</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="rmnDemandee[]" id="rmnAutre" value="Autre">
    <label class="form-check-label" for="rmnAutre">Autres à préciser :</label>
    <input type="text" class="form-control" id="rmnAutrePrecise" name="rmnAutrePrecise">
</div>
</div>