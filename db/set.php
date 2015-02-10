<?php

namespace OCA\StrengthTrainer\Db;

use OCP\AppFramework\Db\Entity;

class Set extends Entity {

    protected $date;
    protected $liftId;
    protected $weight;
    protected $numSets;
    protected $numReps;

    private $liftName;

    public function setLiftName($liftName) {
        $this->liftName = $liftName;
    }

    public function getLiftName() {
        return $this->liftName;
    }
}
