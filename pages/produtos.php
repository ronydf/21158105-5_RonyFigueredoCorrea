<div class="row" style="padding-top: 30px;">
    <?php for($i=0; $i<4; $i++) { ?> <!-- abre o laço de repetição para ler o array dos produtos disponíveis -->
        <!-- Monta os CARDs dos produtos -->
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                <!-- Foto do produto -->
                <img src="<?=$produtos[$i]["foto"]?>" class="card-img-top" alt="<?=$produtos[$i]["title"];?>">
                <!-- Nome e descrição do produto -->
                <div class="card-body">
                    <h5 class="card-title"><?=$produtos[$i]["title"];?></h5>
                    <p class="card-text"><?=$produtos[$i]["description"];?></p>
                    <a href="#" class="btn btn-warning">Saiba mais...</a>
                </div>
                </div>
            </div>
        <!-- Termina a montagem dos CARDs dos produtos -->
    <?php } ?> <!-- finaliza o FOR -->
</div>

