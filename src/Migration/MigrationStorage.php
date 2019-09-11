<?php


namespace Migration;


interface MigrationStorage
{

    /**
     * add migration to storage
     * @param $data
     */
    public function add($data);

    /**
     * @return array
     */
    public function getActual(): array;

    /**
     * @return string
     */
    public function getName(): string;

}