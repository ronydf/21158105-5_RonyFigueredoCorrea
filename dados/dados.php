<?php
	$quem_somos = array(
		'empresa' =>'Doces Vovó Benedita',
		'photo'=>'logo.png',
		'ramo' => 'Fabricação de Doces artesanais',
        'endereco' => 'St. Hab. Cascalheira, BR080, Chácara 150, Brazlândia/DF',
        'email' => 'contato@vovobenedita.com.br',
        'telefone'=>'987654321'
	);

	$produtos = array(
		0 => array('id'=>1, 'title'=> 'Doce de Leite', 'description' => "Tradicional doce de leite mineiro, feito com o mais puro leite da fazenda.", 'foto' => './images/doce-de-leite.jpg'),
		1 => array('id'=>2, 'title'=> 'Doce de Goiaba', 'description' =>  "Doce de goiaba estilo goiano, feito com frutas selecionadas produziadas sem agrotóxico.", 'foto' => './images/doce-de-goiaba.jpg' ),
		2 => array('id'=>3,  'title'=> 'Doce de mamão', 'description' => "Doce de mamão verde ralado com especiarias, um festival de sabor em sua boca.", 'foto' => './images/doce-de-mamao.jpg'),
        3 => array('id'=>3,  'title'=> 'Doce de Laranja', 'description' => "Nada combina tão bem como o citrico e o açucar, uma delicia de doce para ser consumido após as refeições.", 'foto' => './images/doce-de-laranja.jpg')
    );

	$doces_descricao = array(
		0 => array(
            'title' => 'Doce de Leite', 
			'description' => 'Sem adição de amido, o doce de leite é puro e extremamente cremoso. Produzido com matéria-prima selecionada e um cuidado especial no processo, é ideal para lanches e receitas. Conheça todos os sabores para uma experiência ainda mais especial. Sem adição de conservantes ou produtos químicos. Contém lactose',
			'ingrediente' => 'leite e açucar',
            'embalagem' => 'Pote de 400g',
			'calorias' => '367 kcal',
			'preco' => 'R$10,00'
        ),
		1 => array(
            'title' => 'Doce de Goiaba', 
			'description' => 'São apenas três ingrediente nessa receita maravilhosa, água, goiabas frescas selecionadas e açucar. Sem adição de conservantes ou produtos químicos. Não contém glutem e lactose',
			'ingrediente' => 'água, goiaba e açucar',
			'embalagem' => 'Pote de 400g',
			'calorias' => '207 kcal',
			'preco' => 'R$12,50'
        ),
		2 => array(
            'title' => 'Doce de mamão', 
			'description' => 'São apenas três ingrediente nessa receita maravilhosa, água, goiabas frescas selecionadas e açucar. Sem adição de conservantes ou produtos químicos. Não contém glutem e lactose',
			'ingrediente' => 'água, mamão verde e açucar',
			'embalagem' => 'Pote de 400g',
			'calorias' => '267 kcal',
			'preco' => 'R$25,00'
        ),
		3 => array(
            'title' => 'Doce de Laranja', 
			'description' => 'São apenas três ingrediente nessa receita maravilhosa, água, goiabas frescas selecionadas e açucar. Sem adição de conservantes ou produtos químicos. Não contém glutem e lactose.',
			'ingrediente' => 'água, laranja e açucar',
			'embalagem' => 'Pote de 400g',
			'calorias' => '67 kcal',
			'preco' => 'R$10,00'),
	);