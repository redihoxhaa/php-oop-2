<?php

trait Name
{
    private $name;

    public function setName($name)
    {
        $this->names = $name;

        if (!is_string($name)) {
            throw new Exception("Usa delle lettere");
        }
    }

    public function getName()
    {
        return $this->name;
    }
}
