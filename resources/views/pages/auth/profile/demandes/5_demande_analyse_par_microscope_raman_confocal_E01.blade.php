<div class="col-md-6 my-2 border-top border-secondary border-3 pt-2">
    <label for="nbrEchant" class="form-label fw-bold ms-3">Nombre Echantillons : </label>
    <input type="text" class="form-control" name="nbrEchant">
    <span class="text-danger">@error('nbrEchant') {{$message}} @enderror</span>
    <div id="otherInput" class="mt-3">
        <label for="etatEchant">Etat Echantillons :</label>
        <select class="form-select" id="etatEchant" name="etatEchant">
            <option value="Solide">Solide</option>
            <option value="Poudre">Poudre</option>
        </select>
    </div>
    <div id="otherInput" class="mt-3">
        <label for="toxicite" class="form-label mb-1">Toxicité:</label>
        <select class="form-control" id="toxicite" name="toxicite">
            <option value="Toxiques">Toxiques</option>
            <option value="Non toxiques">Non toxiques</option>
            <option value="Radioactifs">Radioactifs</option>
        </select>
    </div>
</div>
<div class="col-md-6 my-2 border-top border-secondary border-3 pt-3">
    <h4>Nature des échantillons:</h4>
    <small>L’épaisseur des échantillons doit être inférieure à 5 cm</small>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="Biologique" value="Biologique" id="sols-et-sediments">
        <label class="form-check-label" for="sols-et-sediments">Biologique</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="Polymeres" value="polymeres" id="Polymeres">
        <label class="form-check-label" for="Polymeres">Polymères</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="sectionPolie" value="Section polie" id="sectionPolie">
        <label class="form-check-label" for="sectionPolie">Section polie</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="coucheMince" value="Couche mince" id="coucheMince">
        <label class="form-check-label" for="coucheMince">Couche mince</label>
    </div>
    <div class="form-check">
        <input class="form-check-input matrice-checkbox" type="checkbox" name="lameMince" value="Lame mince" id="lameMince">
        <label class="form-check-label" for="lameMince">Lame mince</label>
    </div>
    <div class="form-group mt-2">
        <input type="text" class="form-control" name="autreNatureEchant" placeholder="Autre à préciser">
    </div>
</div>
<div class="col-md-12 row border-top border-secondary border-3 pt-2">
    <h4 class="mt-2">Condtiton Analyse :</h4>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 form-check">
            <input class="form-check-input matrice-checkbox" type="checkbox" name="spectreRaman" value="Spectre Raman" id="spectreRaman">
            <label class="form-check-label" for="spectreRaman">Spectres raman</label>
        </div>
        <div class="col-md-4 form-check">
            <input class="form-check-input matrice-checkbox" type="checkbox" name="microscopieRaman" value="Microscopie Raman" id="microscopieRaman">
            <label class="form-check-label" for="microscopieRaman">Microscopie raman</label>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<div class="col-md-6 mb-3">
    <label for="spectralRange" class="form-label">Gamme spectrale (cm <sup>-1</sup> )</label>
    <input type="text" class="form-control" id="spectralRange" name="spectralRange" placeholder="Entrez la gamme spectrale">
</div>
<div class="col-md-6 mb-3">
    <label for="bands" class="form-label">Bandes à visualiser (cm <sup>-1</sup> )</label>
    <input type="text" class="form-control" id="bands" name="bands" placeholder="Entrez les bandes à visualiser">
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
<div class="col-md-1"></div>
    <p>NB : c'est le numéro de l'échantillon qui sera affiché au niveau du rapport d'analyse. Le nombre maximal d'échantillon à analyser par demande est 4. Les demandeurs ne peuvent déposer une nouvelle demande qu'après le traitement de la première.</p>
</div>
<div class="col-md-12 mb-3">
  <label for="conditions-stockage fw-b" class="form-label">CONDITIONS DE STOCKAGE DES ECHANTILLONS AVANT ANALYSE :</label>
  <textarea class="form-control" id="cdstockage" name="cdstockage" rows="4"></textarea>
</div>
<div class="col-md-12">
  <label for="chauffage" class="form-label fw-b">Voulez vous récupérer le reste des échantillons (s’il en reste) après analyse :</label>
  <select class="form-select" id="rrEchant" name="rrEchant">
        <option class="text-center" value="Oui">Oui</option>
        <option class="text-center" value="Non">Non</option>
    </select>
</div>
<p>Si oui, la récupération du reste des échantillons (s'il en reste) doit se faire au maximum 15 jours après la réception des résultats d'analyse. Dépassant ce délai, ils seront détruits. Si aucune case
<div class="row justify-content-center">
    <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
</div>
