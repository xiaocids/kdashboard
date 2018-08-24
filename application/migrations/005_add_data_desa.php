<?php

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/24/2018
 * Time: 3:21 PM
 */
class Migration_add_data_desa extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'desa_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'profile_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
            ),
            'id' => array(
                'type' => 'CHAR',
                'constraint' => '10',
                'null' => FALSE,
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => FALSE,
            ),
            'luas' => array(
                'type' => 'DOUBLE',
                'constraint' => '12,2',
                'null' => TRUE,
            ),
            'website' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('desa_id', TRUE);
        $this->dbforge->create_table('data_desa');

    }

    public function down()
    {
        $this->dbforge->drop_table('data_desa');
    }
}