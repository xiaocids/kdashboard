<?php

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/24/2018
 * Time: 3:10 PM
 */
class Migration_add_struktur_organisasi extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'organization_id' => array(
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
            'camat' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'sekretaris_camat' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'kasie_pemerintahan_umum' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'kasie_kesejahteraan_masyarakat' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'kasie_pemberdayaan_masyarakat' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'kasie_pelayanan_umum' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'kasie_ketentraman_ketertiban' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'file_struktur' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('organization_id', TRUE);
        $this->dbforge->create_table('struktur_organisasi');

    }

    public function down()
    {
        $this->dbforge->drop_table('struktur_organisasi');
    }
}