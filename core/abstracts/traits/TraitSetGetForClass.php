<?php

namespace core\abstracts\traits;

/**
 * Trait TraitSetGetForClass
 *
 * Класс работает с магическими методами __set __get
 *
 * @package core\abstracts\traits
 */
trait TraitSetGetForClass
{
    /**
     * Список переменных сохраненных в массиве
     *
     * @var array
     */
    protected $valueArray = [];

    /**
     * Задаем магическим методом переменную
     *
     * @param $key
     * @param $value
     *
     * @return void
     */
    public function __set($key, $value)
    {
        $this->valueArray[$key] = $value;
    }

    /**
     * Получаем магическим методом переменную
     *
     * @param $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (!empty($this->valueArray[$key])) {
            return $this->valueArray[$key];
        }
    }
}