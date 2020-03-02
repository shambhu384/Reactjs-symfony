<?php


class Model
{

    protected $attribute = [
        'name' => '',
        'age' => 0
    ];

    public function __set($name, $value)
    {
        if (!isset($this->attribute[$name])) {
            throw new  Exception(sprintf('Undefined property %s', $name));
        }

        $this->attribute[$name] = $value;
    }

    public function __get($name)
    {
        return $this->attribute[$name];
    }
}


$user = new Model();

$user->name1 = 'scott';

echo $user->name;
