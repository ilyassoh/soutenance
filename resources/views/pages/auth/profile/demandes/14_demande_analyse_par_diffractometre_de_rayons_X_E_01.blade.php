<p class="text-center text-danger fw-bold my-3">Il faut remplir ce formulaire avec précision, si votre demane contient des erreurs va etre déclinée.</p>
<div class="mb-3">
    <label for="nombreEchantillons" class="form-label">Nombre d'échantillons :</label>
    <input type="text" class="form-control" id="nombreEchantillons" name="nombreEchantillons">
</div>
<div class="mb-3">
  <label for="etatEchantillons" class="form-label">Etat des échantillons :</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="solide" id="solide" value="solide">
    <label class="form-check-label" for="solide">Solide</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="poudre" id="poudre" value="poudre">
    <label class="form-check-label" for="poudre">Poudre</label>
  </div>
</div>
<div class="mb-3">
  <label for="natureEchantillons" class="form-label">Nature des échantillons :</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="polymere" id="polymere" value="Polymère">
    <label class="form-check-label" for="polymere">Polymère</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="sectionPolie" id="sectionPolie" value="Section Polie">
    <label class="form-check-label" for="sectionPolie">Section polie</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="coucheMince" id="coucheMince" value="Couche Mince">
    <label class="form-check-label" for="coucheMince">Couche mince</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="lameMince" id="lameMince" value="Lame Mince">
    <label class="form-check-label" for="lameMince">Lame mince</label>
  </div>
  <div class="mb-3">
    <label for="autreNatureEchantillons" class="form-label fw-b">Autre (Préciser) :</label>
    <input type="text" class="form-control" id="autreNatureEchantillons" name="autreNatureEchantillons">
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
<div class="mb-3">
  <label for="modeAnalyse" class="form-label">Mode d'analyse :</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="braggBrentano" id="braggBrentano" value="Bragg Brentano">
    <label class="form-check-label" for="braggBrentano">Bragg Brentano</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="reflectiviteX" id="reflectiviteX" value="Réflectivité X (couches minces)">
    <label class="form-check-label" for="reflectiviteX">Réflectivité X (couches minces)</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="saxs" id="saxs" value="SAXS (couches minces, echantillons plats)">
    <label class="form-check-label" for="saxs">SAXS (couches minces, échantillons plats)</label>
  </div>
</div>
<div class="mb-3">
  <label for="parametresAnalyse" class="form-label">Paramètres de l'analyse :</label>
  <div class="row">
    <div class="col">
      <label for="thetaMin" class="form-label">2θ min (°) :</label>
      <input type="text" class="form-control" id="thetaMin" name="thetaMin">
    </div>
    <div class="col">
      <label for="thetaMax" class="form-label">2θ max (°) :</label>
      <input type="text" class="form-control" id="thetaMax" name="thetaMax">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="vitesseBalayage" class="form-label">Vitesse de balayage (°/min) :</label>
      <input type="text" class="form-control" id="vitesseBalayage" name="vitesseBalayage">
    </div>
    <div class="col">
      <label for="vitesseRotation" class="form-label">Vitesse de Rotation (tr/min) :</label>
      <input type="text" class="form-control" id="vitesseRotation" name="vitesseRotation">
    </div>
  </div>
</div>
<div class="mb-3">
  <label for="traitementResultats" class="form-label">Mode de traitement des résultats :</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="indexation" id="indexation" value="Indexation">
    <label class="form-check-label" for="indexation">Indexation</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="identificationPhase" id="identificationPhase" value="Identification de Phase">
    <label class="form-check-label" for="identificationPhase">Identification de phase</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="affinementRietveld" id="affinementRietveld" value="Affinement par Rietveld">
    <label class="form-check-label" for="affinementRietveld">Affinement par Rietveld</label>
  </div>
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