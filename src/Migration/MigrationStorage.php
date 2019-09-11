<?php


namespace Migration;


interface MigrationStorage
{

    /**
     * add migration to storage
     * @param IMigration $migration
     */
    public function add( IMigration $migration );

    /**
     * @return array
     */
    public function getActual(): array;

    /**
     * @return string
     */
    public function getName(): string;

}