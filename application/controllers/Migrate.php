<?php

/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 8/19/2018
 * Time: 5:01 PM
 */
class Migrate extends CI_Controller
{
    /** Migration initial tables */
    public function index()
    {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }

        echo 'Migration success! <br>';
    }

    /** Seeding initial tables */
    public function seeding()
    {
        /** @var  $table_options
         * Seeding initial setting options on table "options"
         */
        $table_options = 'options';

        $this->db->truncate($table_options);

        $data_options = array(
            array(
                'option_name' => 'base_url',
                'option_value' => 'http://localhost:8000/',
            ),
            array(
                'option_name' => 'kecamatan_id',
                'option_value' => '1110011',
            )
        );

        if(!$this->db->insert_batch($table_options, $data_options))
        {
            show_error($this->db->error());
        }

        echo 'Seeding Table Options success!<br>';
        /* End options seeding */

        /** @var  $table_user
         * Seeding initial user admin on table "user"
         */
        $table_user = 'user';

        $this->db->truncate($table_user);

        $data_users = [
            'username' => 'admin',
            'password' => md5('password'),
            'email' => 'admin@mail.com',
            'level' => 1
        ];

        if(!$this->db->insert($table_user, $data_users))
        {
            show_error($this->db->error());
        }

        echo 'Seeding Table User success!<br>';
        /* End user seeding */
    }

}