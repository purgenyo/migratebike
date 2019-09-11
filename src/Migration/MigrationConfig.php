<?php


namespace Migration;


class MigrationConfig implements \IConfig
{

    /**
     * @var array
     */
    private $_items = [];

    /**
     * @param string $name
     * @param $value
     */
    public function set(string $name, $value)
    {
        $this->_items[$name] = $value;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
        return array_key_exists($name, $this->_items);
    }

    /**
     * @param string $name
     * @return mixed|null
     */
    public function get(string $name)
    {
        return self::has($name) ? $this->_items[$name] : null;
    }
}