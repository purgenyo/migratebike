<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.09.2019
 * Time: 23:27
 */

namespace Migration;


class FileStorage implements MigrationStorage
{

    /**
     * add migration to storage
     * @param IMigration $migration
     */
    public function add(IMigration $migration)
    {

    }

    /**
     * @return array
     */
    public function getActual(): array
    {
        // TODO: Implement getActual() method.
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        // TODO: Implement getName() method.
    }
}