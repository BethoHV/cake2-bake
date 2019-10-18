<?php
/**
 * Produto Fixture
 */
class ProdutoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome_produto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 220, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'preco' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'referencia' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'categoria_id' => array('column' => 'categoria_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nome_produto' => 'Lorem ipsum dolor sit amet',
			'categoria_id' => 1,
			'created' => '2019-10-17 11:21:36',
			'updated' => '2019-10-17 11:21:36',
			'preco' => 1,
			'referencia' => 1
		),
	);

}
