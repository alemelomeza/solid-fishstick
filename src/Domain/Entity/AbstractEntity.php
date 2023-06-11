<?php

namespace CleanPhp\Invoicer\Domain\Entity;

abstract class AbstractEntity {
    protected $id;

    public function getId() {
        return $this->id;
    }

    public function setId() {
        $this->id = $id;
        return $this;
    }
}
