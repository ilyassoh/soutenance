<div class="form-group">
  <label for="nombre-echantillons">Nombre d'échantillons :</label>
  <input type="number" class="form-control" id="nbrEchantillons" name="nbrEchantillons">
</div>
<div class="form-group">
  <label for="nombre-repetitions">Nombre de répétitions si nécessaire :</label>
  <input type="number" class="form-control" id="nbrRepetitions" name="nbrRepetitions">
</div>
<div class="form-group">
  <label for="typeAnalyse">Type d'analyse :</label>
  <select class="form-control" id="typeAnalyse" name="typeAnalyse">> 
    <option value="Qualitative">Qualitative</option>
    <option value="Quantitative">Quantitative</option>
  </select>
</div>
<div class="form-group">
  <label for="nombre-standards">Nombre de standards (à fournir par le demandeur) :</label>
  <input type="number" class="form-control" id="nbrStandards" name="nbrStandards">
</div>
<div class="form-group">
  <label for="temperature-injecteur">Température de l'injecteur :</label>
  <input type="text" class="form-control" id="tmpInjecteur" name="tmpInjecteur">
</div>
<div class="form-group">
  <label for="temperature-injecteur">Température de Détecteur :</label>
  <input type="text" class="form-control" id="tmpDetecteur" name="tmpDetecteur">
</div>
<div class="form-group">
  <label for="nature-echantillons">Nature des échantillons :</label>
  <input type="text" class="form-control" id="natureEchantillons" name="natureEchantillons">
</div>
<div class="form-group">
  <label for="molecules-identifier">Molécules à identifier :</label>
  <input type="text" class="form-control" id="mols" name="mols">
</div>
<div class="form-group">
  <label for="debit-gaz-vecteur">Débit du gaz vecteur au niveau de la colonne (en ml/min) :</label>
  <input type="number" class="form-control" id="debitGazNiveau" name="debitGazNiveau">
</div>
<div class="form-group">
  <label for="type-echantillon">Type de l'échantillon :</label>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="pure" value="Pure" name="pure">
    <label class="form-check-label" for="type-echantillon-pure">
      Pure
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" id="dilue" name="dilue" value="Dilue">
    <label class="form-check-label" for="type-echantillon-dilue">
      Dilué dans un solvant
    </label>
  </div>
  <div class="form-group">
    <label for="solvent-utilise">Veuillez préciser le solvant utilisé :</label>
    <input type="text" class="form-control" id="solvant" name="solvant">
  </div>
</div>
<div class="mb-3">
<label for="toxicite" class="form-label mb-1">Toxicité:</label>
<select class="form-select" id="toxicite" name="toxicite">
    <option value="Toxiques">Toxiques</option>
    <option value="Non toxiques">Non toxiques</option>
    <option value="Radioactifs">Radioactifs</option>
</select>
</div>
<div class="form-group">
  <h3>Gradient de température de la colonne :</h3>
  <div class="row">
    <div class="col-md-4">
      <label for="">Vitesse de montée en T° : </label>
      <input type="text" id="v" class="form-control w-100">
    </div>
    <div class="col-md-3">
      <label for="">Température : </label>
      <input type="text" id="tp" class="form-control w-100">
    </div>
    <div class="col-md-3">
      <label for="">Temps : </label>
      <input type="text" id="t" class="form-control w-100">
    </div>
    <div class="col-md-2 text-success">
      <a class="btn btn-success text-light fw-b fs-5 mt-4 w-100 h-50 pb-2" onclick="ajouterGrad()"><i class="fa-solid fa-plus"></i></a>
    </div>
  </div>
</div>
<div class="form-group mt-3 text-center fw-b" id="containerGrads"></div>
<input type="hidden" type="text" name="listgrads" id="listgrads">
<div class="form-group mt-3">
<small>NB : c'est le numéro de l'échantillon qui sera affiché au niveau du rapport d'analyse. Le nombre maximal d'échantillon à analyser par demande est 10. Les demandeurs ne peuvent déposer une nouvelle demande qu'après traitement de la première.</small>
</div>
<div class="mt-2 row pt-2">
<h4>Veuillez nommer vos échantillons avec vos initiales + un chiffre, de manière croissante et sans interruption.</h4>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="taskInput" placeholder="Nommer vos échantillions">
  <span class="btn btn-primary" onclick="addTask()">Ajouter</span>
</div> 
<ul class="list-group mb-3">
    <div id="taskList" class="row"></div>
</ul>
<input type="hidden" type="text" name="listreferences" id="listreferences">
</div>
  <p>NB: c'est le numéro de l'échantillon qui sera affiché au niveau du rapport d'analyse.</p>
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
