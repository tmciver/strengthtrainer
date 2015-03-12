<?php

namespace OCA\StrengthTrainer\Db;

use JsonSerializable;
use OCP\AppFramework\Db\Entity;

class Lift extends Entity implements JsonSerializable {

    protected $name;

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
