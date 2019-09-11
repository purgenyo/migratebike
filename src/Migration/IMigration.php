<?php


namespace Migration;


interface IMigration
{

    /**
     * @return mixed
     */
    public function up();

    /**
     * @return mixed
     */
    public function down();

}