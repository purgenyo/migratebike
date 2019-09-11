<?php


namespace Migration;


class MigrationRunner
{

    /**
     * @var array|\IConfig
     */
    private $_config = [];

    /**
     * @var Generator|null
     */
    private $_generator = null;

    /**
     * @var MigrationStorage|null
     */
    private $_storage = null;

    /**
     * MigrationRunner constructor.
     * @param \IConfig $config
     * @param Generator $generator
     * @param MigrationStorage $storage
     */
    public function __construct(\IConfig $config, Generator $generator, MigrationStorage $storage)
    {
        $this->_config = $config;
        $this->_generator = $generator;
        $this->_storage = $storage;
    }

    /**
     * @return Generator
     */
    public function getGenerator()
    {
        return $this->_generator;
    }

    /**
     * @return MigrationStorage
     */
    public function getStorage()
    {
        return $this->_storage;
    }

    public function getList()
    {
        foreach ($this->getStorage()->getActual() as $migration) {
            $this->outputMigrationInfo($migration);
        }
    }

    public function outputMigrationInfo(MigrationStorage $migration)
    {
        echo $migration->getName();
    }

    public function generate(): IMigration
    {
        $migration = $this->getGenerator()->generate($this->_config);
        $this->store($migration);
        $this->outputMigrationInfo($migration);
    }

    private function store($migration)
    {
        $this->_storage->add($migration);
    }

    public function migrate()
    {
        $this->upMigrations($this->getStorage()->getActual());
    }

    private function upMigrations(IMigration ...$migrations)
    {
        foreach ($migrations as $migration) {
            $migration->up();
        }
    }

    private function downMigrations(IMigration ...$migrations)
    {
        foreach ($migrations as $migration) {
            $migration->down();
        }
    }

}