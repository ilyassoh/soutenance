
<div class="col-md-4">
  <label for="nombre-echantillons" class="form-label fw-bold mt-2">Nombre d'échantillons :</label>
  <input type="number" class="form-control"name="nbrEchant" id="nbrEchant" max="4" required>
  <label for="repetition" class="form-label mt-2 fw-bold">Nombre de répétitions :</label>
  <input type="number" name="nbrRep" class="form-control" id="repetition">
</div>
<div class="col-md-4">
<label for="nature-echantillons" class="form-label fw-bold">Nature des échantillons :</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="argile" id="argile" value="Argile">
    <label class="form-check-label" for="nature-argile">Argile</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="phosphate" name="phosphate" value="Phosphate">
    <label class="form-check-label" for="nature-phosphate">Phosphate</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="oxyde" name="oxyde" value="Oxyde">
    <label class="form-check-label" for="nature-oxyde">Oxyde</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="silicate" name="silicate" value="Silicate">
    <label class="form-check-label" for="nature-silicate">Silicate</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="cellulose" name="cellulose" value="Cellulose">
    <label class="form-check-label" for="nature-cellulose">Cellulose</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="polymere" name="polymere" value="Polymère">
    <label class="form-check-label" for="nature-polymere">Polymère</label>
  </div>
  <div class="mb-3">
    <label for="autrene" class="form-label">Autre, à préciser :</label>
    <input type="text" class="form-control" id="autrene" name="autrene">
  </div>
</div>
<div class="col-md-4">
    <label class="fw-bold mt-2" for="toxicite">Toxicité:</label>
    <select class="form-select" id="toxicite" name="toxicite">
      <option value="Toxiques">Toxiques</option>
        <option value="Non toxiques">Non toxiques</option>
        <option value="Radioactifs">Radioactifs</option>
    </select>
    <label class="fw-bold mt-2" for="toxicite">Type d'analyse:</label>
    <select class="form-select" id="toxicite" name="typeanalyse">
        <option value="ATD-ATG">ATD-ATG</option>
        <option value="ATD">ATD</option>
        <option value="ATG">ATG</option>
    </select>
</div>
<div class="col-md-6 mb-3">
  <label for="chauffage" class="form-label fw-b">Vitesse de chauffage (°C/min) :</label>
  <select class="form-select" id="vitessechauff" name="vitessechauff">
        <option class="text-center" value="" selected>Vitesse Chaufage</option>
        <option class="text-center" value="4">5</option>
        <option class="text-center" value="10">10</option>
    </select>
    <label for="chauffage-autre" class="form-label fw-b">Autre, à préciser :</label>
    <input type="text" class="form-control" id="autrevitessechauff" name="autrevitessechauff">
</div>
<div class="col-md-6">
  <label for="temp-fusion" class="form-label fw-b">Température de fusion de l'échantillon :</label>
  <input type="text" class="form-control" id="tfe" name="tfe">
  <label for="domaine-temp" class="form-label fw-b">Domaine de température d'analyse :</label>
  <input type="text" class="form-control" id="dta" name="dta">
</div>
<div class="col-md-12">
  <label for="gaz-degages" class="form-label fw-b">Gaz dégagés :</label>
  <input type="text" class="form-control" id="gazdeg" name="gazdeg">
</div>
<div class="mb-3">
<p>Les creusets sont à la charge du demandeur. Veuillez trouver ci-après les références des creusets adaptés à l’appareil labSys evo :</p>
<ul>
<li>Creuset en Alumine (Al2O3) pour des températures entre 25 et 1400°C : S08/GR.29467</li>
<li>Creuset en Aluminium (Al) pour des températures entre 25 et 600°C à condition qu'il n'y ait pas de réactions avec l'échantillon : S08/GAF.37875</li>
<li>Creuset en platine (Pt) : 08/GR.30092</li>
</ul>
</div>
<div class="col-md-1"></div>
<div class="col-md-10 mt-2 row border-top border-secondary border-3 pt-2">
    <h4>Veuillez nommer vos échantillons avec vos initiales + un chiffre, de manière croissante et sans interruption.</h4>
    <div class="input-group mb-3">
      <input type="text" class="form-control" id="taskInput" placeholder="Add a new task">
      <span class="btn btn-primary" onclick="addTask()">Add Task</span>
    </div> 
    <ul class="list-group mb-3">
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

