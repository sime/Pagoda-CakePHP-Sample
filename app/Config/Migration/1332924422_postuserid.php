<?php
class PostUserId extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'posts' => array(
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'after' => 'id'),
					'indexes' => array(
						'user_id' => array('column' => 'user_id', 'unique' => 0),
					),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'posts' => array('user_id', 'indexes' => array('user_id')),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
