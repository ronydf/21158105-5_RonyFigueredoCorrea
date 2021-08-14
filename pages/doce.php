
<h2 class="text-muted text-center"><?= $doces_descricao[$d]["title"]; ?></h2><br>
<img src="<?=$produtos[$d]["foto"] ?>" class="shadow-lg p-1 mb-5 bg-body rounded img-fluid rounded-circle mx-auto d-block" alt="<?= $doces_descricao[$d]["title"]; ?>">
<br><br>
<p> <?= $doces_descricao[$d]["description"]; ?> </p>
    <ul>
        <li>Ingredientes: <?=  $doces_descricao[$d]["ingrediente"]; ?> </li>
        <li>Embalagem: <?= $doces_descricao[$d]["embalagem"]; ?></li>
        <li>Valor Nutriconal: <?= $doces_descricao[$d]["calorias"]; ?> a cada 20g</li>
        <li>Preço: <?= $doces_descricao[$d]["preco"]; ?> (frete não incluso)</li>
    </ul>





