<?php
$pokemonsList = $viewVars['pokemonsList'];
?>
    <main>

        <?php 
        foreach ($pokemonsList as $pokemon) : ?>
        <div class="main-img"><img src="img/<?= $pokemon->getNumero() ?>.png" alt="<?= $pokemon->getNom() ?>"><a href="./pokemon<?= $pokemon->getId() ?>"><?php echo '#' . $pokemon->getNumero() . ' ' . $pokemon->getNom() ?></a></div>
        <?php
        endforeach;
        ?>
        

    </main>