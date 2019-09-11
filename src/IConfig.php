<?php


interface IConfig
{

    public function set(string $name, $value);

    public function get(string $name);

    public function has(string $name);

}
