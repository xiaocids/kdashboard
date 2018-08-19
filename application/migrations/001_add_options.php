<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/19/2018
 * Time: 4:58 PM
 */
class Migration_Add_options extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'option_id' => array(
                'type' => 'BIGINT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'option_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => FALSE
            ),
            'option_value' => array(
                'type' => 'LONGTEXT',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('option_id', TRUE);
        $this->dbforge->create_table('options');

    }

    public function down()
    {
        $this->dbforge->drop_table('options');
    }
}