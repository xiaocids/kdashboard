<?php

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/25/2018
 * Time: 1:35 AM
 */
class Migration_Add_roles
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('role_id', TRUE);
        $this->dbforge->create_table('roles');

    }

    public function down()
    {
        $this->dbforge->drop_table('roles');
    }
}