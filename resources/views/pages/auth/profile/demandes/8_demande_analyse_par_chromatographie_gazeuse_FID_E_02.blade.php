<h4 class="mb-4">CONDITIONS D’ANALYSE ET IDENTIFICATION DES ECHANTILLONS</h4>
<div class="mb-3">
  <label for="typeAnalyse" class="form-label">Type d’analyse:</label>
  <select class="form-select" id="typeAnalyse" name="typeAnalyse">
    <option value="qualitative">Qualitative</option>
    <option value="quantitative">Quantitative</option>
  </select>
  <div id="standardHelp" class="form-text">*Le standard est à fournir par le demandeur</div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="mb-3">
      <label for="nbrEchantillons" class="form-label">Nombre d’échantillons:</label>
      <input type="number" class="form-control" id="nbrEchantillons" name="nbrEchantillons">
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-3">
      <label for="nbrRepetitions" class="form-label">Nombre de répétitions si nécessaire:</label>
      <input type="number" class="form-control" id="nbrRepetitions" name="nbrRepetitions">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="mb-3">
      <label for="tempInjecteur" class="form-label">Température de l’injecteur (°C):</label>
      <input type="text" class="form-control" id="tempInjecteur" name="tempInjecteur">
    </div>

    <div class="mb-3">
      <label for="debitGazVecteur" class="form-label">Débit du gaz vecteur (ml/min):</label>
      <input type="text" class="form-control" id="debitGazVecteur" name="debitGazVecteur">
    </div>
  </div>

  <div class="col-md-6">
    <div class="mb-3">
      <label for="pressionGazVecteur" class="form-label">Pression du gaz vecteur (kPa):</label>
      <input type="text" class="form-control" id="pressionGazVecteur" name="pressionGazVecteur">
    </div>

    <div class="mb-3">
      <label for="typeEchantillon" class="form-label">Type de l’échantillon:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="typeEchantillon" id="typeEchantillonPure" value="pure">
        <label class="form-check-label" for="typeEchantillonPure">Pure</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="typeEchantillon" id="typeEchantillonDilue" value="dilue">
        <label class="form-check-label" for="typeEchantillonDilue">Dilué dans un solvant</label>
      </div>
      <input type="text" class="form-control mt-2" id="solvantEchantillon" name="solvantEchantillon" placeholder="Préciser le solvant dans lequel est soluble">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="mb-3">
      <label for="volEchantillon" class="form-label">Volume de l’échantillon à injecter (µl):</label>
      <input type="text" class="form-control" id="volEchantillon" name="volEchantillon">
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="echantillonVisqueux" name="echantillonVisqueux">
      <label class="form-check-label" for="echantillonVisqueux">Echantillon visqueux</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="mb-3">
      <label for="tempTransfert" class="form-label">Température de la ligne de transfert (°C):</label>
      <input type="text" class="form-control" id="tempTransfert" name="tempTransfert">
    </div>

    <div class="mb-3">
      <label for="toxicite" class="form-label">Toxicité:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="toxicite" id="toxiciteToxiques" value="toxiques">
        <label class="form-check-label" for="toxiciteToxiques">Toxiques</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="toxicite" id="toxiciteNonToxiques" value="non-toxiques">
        <label class="form-check-label" for="toxiciteNonToxiques">Non toxiques</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="toxicite" id="toxiciteRadioactifs" value="radioactifs">
        <label class="form-check-label" for="toxiciteRadioactifs">Radioactifs</label>
      </div>
    </div>
  </div>
</div>

<div class="mb-3">
  <label for="natureEchantillons" class="form-label">Nature des échantillons:</label>
  <textarea class="form-control" id="natureEchantillons" name="natureEchantillons" rows="3"></textarea>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="mb-3">
      <label for="timeMS" class="form-label">Time (min):</label>
      <input type="text" class="form-control" id="timeMS" name="timeMS">
    </div>
    <div class="mb-3">
      <label for="stopMS" class="form-label">Stop after (min):</label>
      <input type="text" class="form-control" id="stopMS" name="stopMS">
    </div>
  </div>

  <div class="col-md-6">
    <div class="mb-3">
      <label for="formuleMolecules" class="form-label">Veuillez préciser la formule brute des molécules qui vous intéressent (si vous connaissez):</label>
      <input type="text" class="form-control" id="formuleMolecules" name="formuleMolecules">
    </div>
    <div class="mb-3">
      <label for="intervalleMasse" class="form-label">Un intervalle de masse:</label>
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="form-control" id="masseMin" name="masseMin" placeholder="De">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="masseMax" name="masseMax" placeholder="À">
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="massesExactes" class="form-label">Ou des masses exactes (uma):</label>
      <input type="text" class="form-control" id="massesExactes" name="massesExactes">
    </div>
  </div>
</div>

<div class="mb-4">
  <label for="gradientTempColonne" class="form-label">Gradient de température de la colonne:</label>
  <textarea class="form-control" id="gradientTempColonne" name="gradientTempColonne" rows="3"></textarea>
</div>

<div class="mb-4">
  <label for="refEchantillons" class="form-label">Veuillez indiquer la référence de vos échantillons:</label>
  <textarea class="form-control" id="refEchantillons" name="refEchantillons" rows="3"></textarea>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Vitesse de montée en T°</th>
      <th scope="col">Température</th>
      <th scope="col">Temps</th>
      <th scope="col">N° échantillon</th>
      <th scope="col">Réf échantillon</th>
      <th scope="col">N° échantillon</th>
      <th scope="col">Réf échantillon</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" class="form-control" name="vitesseMontee[]" /></td>
      <td><input type="text" class="form-control" name="temperature[]" /></td>
      <td><input type="text" class="form-control" name="temps[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" name="vitesseMontee[]" /></td>
      <td><input type="text" class="form-control" name="temperature[]" /></td>
      <td><input type="text" class="form-control" name="temps[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" name="vitesseMontee[]" /></td>
      <td><input type="text" class="form-control" name="temperature[]" /></td>
      <td><input type="text" class="form-control" name="temps[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" name="vitesseMontee[]" /></td>
      <td><input type="text" class="form-control" name="temperature[]" /></td>
      <td><input type="text" class="form-control" name="temps[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
    </tr>
    <tr>
      <td><input type="text" class="form-control" name="vitesseMontee[]" /></td>
      <td><input type="text" class="form-control" name="temperature[]" /></td>
      <td><input type="text" class="form-control" name="temps[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="numEchantillon[]" /></td>
      <td><input type="text" class="form-control" name="refEchantillon[]" /></td>
    </tr>
  </tbody>
</table>

<div class="form-text mb-4">
  *La présente demande dûment remplie doit être obligatoirement retournée au CAC jointe à une méthode normalisée ou un article scientifique adapté à la phase stationnaire : 5% diphenyl / 95% dimethylpolysiloxane.<br>
  NB: c’est le numéro de l’échantillon qui sera affiché au niveau du rapport d’analyse.<br>
  Le nombre maximal d’échantillon à analyser par demande est 10. Les demandeurs ne peuvent déposer une nouvelle demande qu’après traitement de la première.
</div>

<div class="mb-3">
  <label for="demandeurNom" class="form-label">Nom du demandeur:</label>
  <input type="text" class="form-control" id="demandeurNom" name="demandeurNom">
</div>

<div class="mb-3">
  <label for="demandeurEmail" class="form-label">Email du demandeur:</label>
  <input type="email" class="form-control" id="demandeurEmail" name="demandeurEmail">
</div>

<div class="mb-3">
  <label for="demandeurTelephone" class="form-label">Téléphone du demandeur:</label>
  <input type="text" class="form-control" id="demandeurTelephone" name="demandeurTelephone">
</div>