<?php

namespace OCA\StrengthTrainer\Db;

use OCP\AppFramework\Db\Entity;

class Set extends Entity {

    protected $date;
    protected $liftId;
    protected $numSets;
    protected $numReps;

    public function getDate() {
        return $this->date;
    }

    public function getLiftId() {
        return $this->liftId;
    }

    public function getNumSets() {
        return $this->numSets;
    }

    public function getNumReps() {
        return $this->numReps;
    }
}
