<?php


namespace Migration;


interface IMigration
{

    public function up();

    public function down();

}