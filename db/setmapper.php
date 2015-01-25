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
        return $this->findEntity($sql, [$id]);
    }

    public function findAll() {
        $sql = 'SELECT * FROM *PREFIX*strengthtrainer_set';
        return $this->findEntities($sql);
    }

}