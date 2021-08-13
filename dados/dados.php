<?php
	$quem_somos = array(
		'empresa' =>'Doces Vovó Benedita',
		'photo'=>'logo.png',
		'ramo' => 'Fabricação de Doces Caseiros',
		
	);

	$produtos = array(
		0 => array('id'=>1, 'title'=> 'Doce de Leite', 'description' => "Tradicional doce de leite mineiro, feito com o mais puro leite da fazenda.", 'foto' => './images/doce-de-leite.jpg'),
		1 => array('id'=>2, 'title'=> 'Doce de Goiaba', 'description' =>  "Doce de goiaba estilo goiano, feito com frutas selecionadas produziadas em agrotóxico.", 'foto' => './images/doce-de-goiaba.jpg' ),
		2 => array('id'=>3,  'title'=> 'Doce de mamão', 'description' => "Doce de mamão verde ralado com especiarias, um festival de sabor em sua boca.", 'foto' => './images/doce-de-mamao.jpg'),
        3 => array('id'=>3,  'title'=> 'Doce de Laranja', 'description' => "Nada combina tão bem como o citrico e o açucar, uma delicia de doce para ser consumido após as refeições.", 'foto' => './images/doce-de-laranja.jpg')
    );

	$doces_descricao = array(
		0 => array(
            'title' => 'Doce de Leite', 
			'description' => 'Sem adição de amido, o doce de leite é puro e extremamente cremoso. Produzido com matéria-prima selecionada e um cuidado especial no processo, é ideal para lanches e receitas. Conheça todos os sabores para uma experiência ainda mais especial.',
			'ingrediente' => 'leite e açucar',
            'nutricional' => '',
			'calorias' => '67 kcal'
        ),
		1 => array(
            'title' => 'Doce de Goiaba', 
			'description' => 'Nesta aula iremos iniciar nossos estudos a linguagem de programação PHP, linguagem esta responsável por mais de 80% do funcionamento dos web sites da Web. Se o HTML é a responsável por marcar os conteúdos a serem renderizados em nossas página, o PHP é responsável por todas as regrasde negócios de nossa aplicação e gerenciamento dos conteúdos.',
			'ingrediente' => 'leite e açucar',
			'calorias'=> '67 kcal'
        ),
		2 => array(
            'title' => 'Doce de mamão', 
			'description' => 'Partindo da aula anterior, iremos aprofundar nossos conhecimentos nas estruturas da linguagem, ou seja, nesta aula vamos aplicar as estruturas de controle: condição e repetição',
			'ingrediente' => 'leite e açucar',
			'calorias'=> '67 kcal'
        ),
		3 => array(
            'title' => 'Doce de Laranja', 
			'description' => 'Para fechar a disciplina iremos trabalhar com inclusão de arquivos e funções. Este conteúdo é de extrema importância pois permite o reuso de códigos.',
			'ingrediente' => 'leite e açucar',
			'calorias'=> '67 kcal')
	);