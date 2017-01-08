<?php
namespace OCA\OwnNotes\Service;

use Exception;

use OCP\AppFramework\Db\DoesNotExistException;
use OCP\AppFramework\Db\MultipleObjectsReturnedException;

use OCA\OwnNotes\Db\Note;
use OCA\OwnNotes\Db\NoteMapper;


class NoteService {

    private $mapper;

    public function __construct(NoteMapper $mapper){
        $this->mapper = $mapper;
    }

    public function findAll($userId) {
        return $this->mapper->findAll($userId);
    }

    private function handleException ($e) {
        if ($e instanceof DoesNotExistException ||
            $e instanceof MultipleObjectsReturnedException) {
            throw new NotFoundException($e->getMessage());
        } else {
            throw $e;
        }
    }

    public function fav($id, $userId) {
        $station = new Station();
        $station->setId($id);
        $station->setUserId($userId);
        return $this->mapper->insert($station);
    }

    public function unfav($id, $userId) {
        try {
            $station = $this->mapper->find($id, $userId);
            $this->mapper->delete($station);
            return $station;
        } catch(Exception $e) {
            $this->handleException($e);
        }
    }

}
