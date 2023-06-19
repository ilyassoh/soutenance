<div class="mb-3">
    <label for="nombreEchantillons" class="form-label">Nombre d'échantillons :</label>
    <input type="text" class="form-control" id="nombreEchantillons" name="nombreEchantillons">
  </div>
  <div class="mb-3">
    <label for="etatEchantillons" class="form-label">Etat des échantillons :</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="etatEchantillons" id="solide" value="solide">
      <label class="form-check-label" for="solide">Solide</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="etatEchantillons" id="poudre" value="poudre">
      <label class="form-check-label" for="poudre">Poudre</label>
    </div>
  </div>
  <div class="mb-3">
    <label for="natureEchantillons" class="form-label">Nature des échantillons :</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="natureEchantillons" id="polymere" value="polymere">
      <label class="form-check-label" for="polymere">Polymère</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="natureEchantillons" id="sectionPolie" value="sectionPolie">
      <label class="form-check-label" for="sectionPolie">Section polie</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="natureEchantillons" id="coucheMince" value="coucheMince">
      <label class="form-check-label" for="coucheMince">Couche mince</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="natureEchantillons" id="lameMince" value="lameMince">
      <label class="form-check-label" for="lameMince">Lame mince</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="natureEchantillons" id="autre" value="autre">
      <label class="form-check-label" for="autre">Autre</label>
    </div>
    <div class="mb-3">
      <label for="autreNatureEchantillons" class="form-label">Préciser :</label>
      <input type="text" class="form-control" id="autreNatureEchantillons" name="autreNatureEchantillons">
    </div>
  </div>
  <div class="mb-3">
    <label for="toxicite" class="form-label">Toxicité :</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="toxicite" id="toxiques" value="toxiques">
      <label class="form-check-label" for="toxiques">Toxiques</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="toxicite" id="nonToxiques" value="nonToxiques">
      <label class="form-check-label" for="nonToxiques">Non toxiques</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="toxicite" id="radioactifs" value="radioactifs">
      <label class="form-check-label" for="radioactifs">Radioactifs</label>
    </div>
  </div>
  <div class="mb-3">
    <label for="modeAnalyse" class="form-label">Mode d'analyse :</label>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="modeAnalyse[]" id="braggBrentano" value="braggBrentano">
      <label class="form-check-label" for="braggBrentano">Bragg Brentano</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="modeAnalyse[]" id="reflectiviteX" value="reflectiviteX">
      <label class="form-check-label" for="reflectiviteX">Réflectivité X (couches minces)</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="modeAnalyse[]" id="saxs" value="saxs">
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
      <input class="form-check-input" type="checkbox" name="traitementResultats[]" id="indexation" value="indexation">
      <label class="form-check-label" for="indexation">Indexation</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="traitementResultats[]" id="identificationPhase" value="identificationPhase">
      <label class="form-check-label" for="identificationPhase">Identification de phase</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="traitementResultats[]" id="affinementRietveld" value="affinementRietveld">
      <label class="form-check-label" for="affinementRietveld">Affinement par Rietveld</label>
    </div>
  </div>
  <div class="mb-3">
    <label for="referencesEchantillons" class="form-label">Références des échantillons :</label>
    <div class="row">
      <div class="col">
        <label for="numeroEchantillon1" class="form-label">N° échantillon :</label>
        <input type="text" class="form-control" id="numeroEchantillon1" name="numeroEchantillon1">
      </div>
      <div class="col">
        <label for="refEchantillon1" class="form-label">Réf échantillon :</label>
        <input type="text" class="form-control" id="refEchantillon1" name="refEchantillon1">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="numeroEchantillon2" class="form-label">N° échantillon :</label>
        <input type="text" class="form-control" id="numeroEchantillon2" name="numeroEchantillon2">
      </div>
      <div class="col">
        <label for="refEchantillon2" class="form-label">Réf échantillon :</label>
        <input type="text" class="form-control" id="refEchantillon2" name="refEchantillon2">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="numeroEchantillon3" class="form-label">N° échantillon :</label>
        <input type="text" class="form-control" id="numeroEchantillon3" name="numeroEchantillon3">
      </div>
      <div class="col">
        <label for="refEchantillon3" class="form-label">Réf échantillon :</label>
        <input type="text" class="form-control" id="refEchantillon3" name="refEchantillon3">
      </div>
    </div>
    <p>NB: c'est le numéro de l'échantillon qui sera affiché au niveau du rapport d'analyse.</p>
  </div>
  <div class="mb-3">
    <label for="demandeur" class="form-label">Demandeur :</label>
    <input type="text" class="form-control" id="demandeur" name="demandeur">
  </div>
  <div class="mb-3">
    <label for="dateDemande" class="form-label">Date de la demande :</label>
    <input type="date" class="form-control" id="dateDemande" name="dateDemande">
  </div>
  <div class="mb-3">
    <label for="demandeSuivante" class="form-label">Demande suivante :</label>
    <input type="text" class="form-control" id="demandeSuivante" name="demandeSuivante">
    <p>Le nombre maximal d'échantillons à analyser par demande est 9. Les demandeurs ne peuvent déposer une nouvelle demande qu'après traitement de la première. Seule la personne détentrice des échantillons a le droit d'assister à l'analyse et de récupérer les résultats.</p>
  </div>