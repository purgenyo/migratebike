<?php


namespace Migration;


interface Generator
{

    /**
     * @param \IConfig $config
     * @return mixed
     */
    public function generate(\IConfig $config);
}