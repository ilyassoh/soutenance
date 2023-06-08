
<div class="col-md-6 my-2 border-top border-secondary border-3 pt-2">
    <label for="typeanalyse" class="form-label fw-bold ms-3">Type d'Analyse : </label>
    <select id="myselect" class="form-select" aria-label="" name="typeanalyse">
        <option value="Qualitative">Qualitative</option>
        <option value="Quantitative">Quantitative</option>
    </select>
    <div id="otherInput" class="mt-3">
        <label for="nbrRep" class="form-label fw-bold ms-3">Autre type : </label>
        <input type="text" class="form-control" id="otherOption" name="autretypeanalyse">
    </div>
</div>
<div class="col-md-6 my-2 border-top border-secondary border-3 pt-2">
    <label for="nbrEchant" class="form-label fw-bold ms-3">Nombre Echantillons : </label>
    <input type="text" class="form-control" name="nbrEchant">
    <span class="text-danger">@error('nbrEchant') {{$message}} @enderror</span>
    <div id="otherInput" class="mt-3">
        <label for="nbrRep" class="form-label fw-bold ms-3">Nombre Répétitions : </label>
        <input type="text" class="form-control" name="nbrRep">
        <span class="text-danger">@error('nbrRep') {{$message}} @enderror</span>
    </div>
</div>
<div class="col-md-6 my-2 border-top border-secondary border-3 pt-3">
    <h4>Matrice des échantillons:</h4>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="solsEtSediments" value="solsEtSediments" id="sols-et-sediments">
        <label class="form-check-label" for="sols-et-sediments">Sols et sédiments</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="Polymeres" value="polymeres" id="Polymeres">
        <label class="form-check-label" for="Polymeres">Polymères</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="Plantes" value="plantes" id="Plantes">
        <label class="form-check-label" for="Plantes">Plantes</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="produitsPharmaceutiques" value="produits-pharmaceutiques" id="produits-pharmaceutiques">
        <label class="form-check-label" for="produits-pharmaceutiques">Produits pharmaceutiques</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" matrice-checkbox type="checkbox" name="produitsCosmetiques" value="produits-cosmetiques" id="produits-cosmetiques">
        <label class="form-check-label" for="produits-cosmetiques">Produits cosmétiques</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="produitsPetrochimiques" value="produits-petrochimiques" id="produits-petrochimiques">
        <label class="form-check-label" for="produits-petrochimiques">Produits pétrochimiques</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="collesVernir" value="colles-vernir" id="colles-vernir">
        <label class="form-check-label" for="colles-vernir">Colles, vernis</label>
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="matriceAutre" placeholder="Autre à préciser">
    </div>
</div>
<div class="col-md-6 my-2 border-top border-secondary border-3 pt-2">
    <label for="toxicite">Toxicité:</label>
    <select class="form-control" id="toxicite" name="toxicite">
        <option value="Toxiques">Toxiques</option>
        <option value="Non toxiques">Non toxiques</option>
        <option value="Radioactifs">Radioactifs</option>
    </select>
    <div class=" mt-3 border-top border-secondary border-3 pt-2">
        <h4>Choisir la configuration d’analyse selon les éléments à doser :</h4>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="configuration" id="configuration-chns" value="chns">
        <label class="form-check-label" for="configuration-chns">Configuration CHNS</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="configuration" id="configuration-o" value="o">
        <label class="form-check-label" for="configuration-o">Configuration O (Oxygène)</label>
        </div>
        <p class="text-muted">N.B: Une seule configuration est autorisée par demande.</p>
    </div>
</div>
<div class="col-md-12 row border-top border-secondary border-3 pt-2">
    <h4 class="col-md-8 mt-2">Préciser les éléments à doser :</h4>
    <div class="form-group float-end col-md-4">
      <input type="text" class="form-control" name="elementsAdoser">
    </div>
</div>
<div class="col-md-12 mt-2 row border-top border-secondary border-3 pt-2">
    <h4>Veuillez nommer vos échantillons avec vos initiales + un chiffre, de manière croissante et sans interruption.</h4>
    <div class="input-group mb-3">
      <input type="text" class="form-control" id="taskInput" placeholder="Add a new task">
      <span class="btn btn-primary" onclick="addTask()">Add Task</span>
    </div> 
    <ul class="list-group">
        <div id="taskList" class="row"></div>
    </ul>
    <input type="hidden" type="text" name="listreferences" id="listreferences">
</div>
<div class="col-md-12 mb-3">
  <label for="conditions-stockage fw-b" class="form-label">CONDITIONS DE STOCKAGE DES ECHANTILLONS AVANT ANALYSE :</label>
  <textarea class="form-control" id="cdstockage" name="cdstockage" rows="4"></textarea>
</div>




