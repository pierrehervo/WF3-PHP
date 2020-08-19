<?php
//==============================================================================
// FORMULAIRE D'AJOUT ET DE MODIFICATION D'UN FILM
//==============================================================================
?>
<div>
    <label for="marque">Marque</label>
    <input type="text" name="marque" id="marque" value="<?= $marque ?>" required>
</div>

<div>
    <label for="model">Model</label>
    <input type="text" name="model" id="model" value="<?= $model ?>" required>
</div>

<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"><?= $description ?></textarea>
</div>



<div>
    <label for="photo">Image de la voiture</label>
    <input type="file" name="photo" id="photo">
</div>
     