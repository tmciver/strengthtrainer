<?php

namespace OCA\StrengthTrainer\Db;

use OCP\AppFramework\Db\Entity;

class Set extends Entity {

    protected $date;
    protected $liftId;
    protected $weight;
    protected $numSets;
    protected $numReps;

}
