<?php

namespace OCA\StrengthTrainer\Db;

use OCP\AppFramework\Db\Entity;

class Lift extends Entity {

    protected $name;

    public function getName() {
        return $this->name;
    }
}
