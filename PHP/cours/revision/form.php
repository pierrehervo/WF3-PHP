<?php
//==============================================================================
// FORMULAIRE D'AJOUT ET DE MODIFICATION D'UN FILM
//==============================================================================
?>
<div>
    <label for="title">Titre du film</label>
    <input type="text" name="title" id="title" value="<?= $title ?>" required>
</div>

<div>
    <label for="description">Description du film</label>
    <textarea name="description" id="description" cols="30" rows="10"><?= $description ?></textarea>
</div>

<div>
    <label for="year">annee du film</label>
    <select name="year" id="year">
        <option value=""></option>
        <?php for($i=date('Y'); $i >= date('Y')-100; $i--): ?>
            <option value="<?= $i ?>" <?= ($year == $i) ? "selected" : null ?>>
                <?= $i ?>
            </option>
        <?php endfor; ?>
    </select>
</div>

<div>
    <label for="cover">Pochette du film</label>
    <input type="file" name="cover" id="cover">
</div>
     