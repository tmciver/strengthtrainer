<?php
namespace OCA\StrengthTrainer\Db;

use OCP\IDb;
use OCP\AppFramework\Db\Mapper;

class LiftMapper extends Mapper {

    public function __construct(IDb $db) {
        parent::__construct($db, 'strengthtrainer_lift', '\OCA\StrengthTrainer\Db\Lift');
    }

    public function find($id) {
        $sql = 'SELECT * FROM *PREFIX*strengthtrainer_lift WHERE id = ?';
        return $this->findEntity($sql, [$id]);
    }

    public function findAll() {
        $sql = 'SELECT * FROM *PREFIX*strengthtrainer_lift';
        return $this->findEntities($sql);
    }

}