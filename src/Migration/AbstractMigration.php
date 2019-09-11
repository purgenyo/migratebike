<?php


namespace Migration;


abstract class AbstractMigration implements IMigration
{

    abstract public function up();

    abstract public function down();

    public function getName()
    {

    }
}