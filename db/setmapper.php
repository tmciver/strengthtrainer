<?php
namespace OCA\StrengthTrainer\Db;

use OCP\IDb;
use OCP\AppFramework\Db\Mapper;

class SetMapper extends Mapper {

    public function __construct(IDb $db) {
        parent::__construct($db, 'strengthtrainer_set', '\OCA\StrengthTrainer\Db\Set');
    }

    public function find($id) {
        $sql = 'SELECT * FROM *PREFIX*strengthtrainer_set WHERE id = ?';
        $set = $this->findEntity($sql, [$id]);

        $this->addLiftName($set);

        return $set;
    }

    public function findAll() {
        $sql = 'SELECT * FROM *PREFIX*strengthtrainer_set';
        $sets = $this->findEntities($sql);

        // add the lift name to each one
        foreach ($sets as $set) {
            $this->addLiftName($set);
        }

        return $sets;
    }

    private function addLiftName($set) {
        // set up SQL
        $nameColumnName = 'name';
        $sql = "SELECT `" . $nameColumnName . "` FROM *PREFIX*strengthtrainer_lift WHERE id = ?";

        // get the name of the lift
        $liftName = $this->findOneQuery($sql, array($set->getLiftId()))[$nameColumnName];

        // add it to the set entity
        $set->setLiftName($liftName);
    }

}
