
<h2 class="text-muted text-center"><?= $doces_descricao[$d]["title"]; ?></h2><br>
<img src="<?=$produtos[$d]["foto"] ?>" class=" img-fluid rounded-circle" alt="<?= $doces_descricao[$d]["title"]; ?>">
<br><br>
<p> <?= $doces_descricao[$d]["description"]; ?> </p>
    <ul>
        <li>Ingredientes: <?=  $doces_descricao[$d]["ingrediente"]; ?> </li>
        <li>Embalagem: <?= $doces_descricao[$d]["embalagem"]; ?></li>
        <li>Valor Nutriconal: <?= $doces_descricao[$d]["calorias"]; ?></li>
        <li>Preço: <?= $doces_descricao[$d]["preco"]; ?> (frete não incluso)</li>
    </ul>





