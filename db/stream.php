<?php
namespace OCA\Radio\Db;

use JsonSerializable;

use OCP\AppFramework\Db\Entity;

class Stream extends Entity implements JsonSerializable {

    protected $userId;

    public function jsonSerialize() {
        return [
            'id' => $this->id
        ];
    }
}
