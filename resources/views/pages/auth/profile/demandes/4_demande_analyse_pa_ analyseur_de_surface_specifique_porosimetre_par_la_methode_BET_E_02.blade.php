<div class="col-md-6">
    <label for="nombre-echantillons" class="form-label fw-bold mt-2">Nombre d'échantillons :</label>
    <input type="number" class="form-control"name="nbrEchant" id="nbrEchant">
    <label for="repetition" class="form-label mt-2 fw-bold">Nombre de répétitions :</label>
    <input type="number" name="nbrRep" class="form-control" id="repetition">
    <label for="natureEchant" class="form-label fw-bold mt-2">Nature d'échantillons :</label>
    <input type="text" class="form-control"name="natureEchant" id="natureEchant">
    <label class="fw-bold mt-2" for="toxicite">Toxicité:</label>
    <select class="form-select" id="toxicite" name="toxicite">
        <option>Toxiques</option>
        <option>Non toxiques</option>
        <option>Radioactifs</option>
    </select>
</div>
<div class="col-md-6">
    <label class="fw-bold mt-2" for="toxicite">Protocole d'analyse :</label>
    <select class="form-select" id="protocoleanalyse" name="protocoleanalyse">
        <option value="Conditions de dégazage">Conditions de dégazage</option>
        <option value="Conditions d’analyse ">Conditions d’analyse </option>
    </select>
    <label class="fw-bold mt-4" for="etat">Etat :</label>
    <select class="form-select" id="etat" name="etat">
        <option value="Solide">Solide</option>
        <option value="Solide hygroscopique">Solide hygroscopique</option>
    </select>
    <label class="fw-bold mt-2" for="ca">Conditionn d'analyse :</label>
    <select class="form-select" id="ca" name="ca">
        <option>BET</option>
        <option>Isotherme</option>
    </select>
    <label for="autreca" class="form-label fw-bold mt-2">Nature d'échantillons :</label>
    <input type="text" class="form-control"name="autreca" id="autreca">
</div>
<div class="col-md-12 mt-2 row border-top border-secondary border-3 pt-2">
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


