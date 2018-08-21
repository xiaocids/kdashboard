<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/19/2018
 * Time: 4:58 PM
 */
class Migration_Add_user extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'BIGINT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => FALSE
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => FALSE,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => FALSE
            ),
            'level' => array(
                'type' => 'INT',
                'null' => FALSE
            ),
        ));
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('user');

    }

    public function down()
    {
        $this->dbforge->drop_table('user');
    }
}