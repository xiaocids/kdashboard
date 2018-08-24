<?php

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/24/2018
 * Time: 2:53 PM
 */
class Migration_Add_profile extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'profile_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'kecamatan_id' => array(
                'type' => 'CHAR',
                'constraint' => '7',
                'null' => FALSE
            ),
            'kabupaten_id' => array(
                'type' => 'CHAR',
                'constraint' => '4',
                'null' => FALSE
            ),
            'provinsi_id' => array(
                'type' => 'CHAR',
                'constraint' => '2',
                'null' => FALSE
            ),
            'nama_kecamatan' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => FALSE,
            ),
            'tahun_pembentukan' => array(
                'type' => 'INT',
                'constraint' => '5',
                'null' => TRUE
            ),
            'dasar_hukum_pembentukan' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
            'kode_pos' => array(
                'type' => 'INT',
                'null' => TRUE
            ),
            'visi' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'misi' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'website' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => TRUE
            ),
            'no_telepon' => array(
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => TRUE
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => TRUE
            ),
            'batas_utara' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'batas_timur' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'batas_selatan' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'batas_barat' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'ketinggian' => array(
                'type' => 'INT',
                'null' => TRUE,
                'comment' => 'meter diatas permukaan laut (mdpl)'
            ),
            'tipologi' => array(
                'type' => 'TEXT',
            ),
        ));
        $this->dbforge->add_key('profile_id', TRUE);
        $this->dbforge->create_table('profile');

    }

    public function down()
    {
        $this->dbforge->drop_table('profile');
    }

}