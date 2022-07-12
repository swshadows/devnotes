<?php

require_once __APP_SRC__ . '/models/Note.php';

class NoteDAO implements NoteDAOInterface {
    private PDO $connection;

    public function __construct(PDO $p) {
        $this->connection = $p;
    }

    public function create(Note $n) {
        $query = "INSERT INTO notes(title, body ,lang) VALUES (:title, :body, :lang)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':title', $n->getTitle());
        $stmt->bindValue(':body', $n->getBody());
        $stmt->bindValue(':lang', $n->getLang());
        $stmt->execute();

        $insert = $this->connection->lastInsertId();
        return $insert;
    }
    public function findAll() {
        $query = "SELECT * FROM notes";
        $stmt = $this->connection->query($query);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function findById(int $i) {
        $query = "SELECT * FROM notes WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":id", $i);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function update(Note $n) {
        $query = "UPDATE notes SET title = :title, body = :body, lang = :lang WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':title', $n->getTitle());
        $stmt->bindValue(':body', $n->getBody());
        $stmt->bindValue(':lang', $n->getLang());
        $stmt->bindValue(':id', $n->getId());
        $stmt->execute();
    }

    public function delete(int $i) {
        $query = "DELETE FROM notes WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":id", $i);
        $stmt->execute();
    }
}
