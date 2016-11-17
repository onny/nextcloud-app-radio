<?php
namespace OCA\Radio\Db;

use JsonSerializable;

use OCP\AppFramework\Db\Entity;

class Stream extends Entity implements JsonSerializable {

    protected $title;
    protected $content;
    protected $userId;

    public function jsonSerialize() {
        return [
            'name' => $this->name,
            'url' => $this->url,
            'image' => $this->image
        ];
    }
}
