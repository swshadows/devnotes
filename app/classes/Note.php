<?php

class Note {
    private int $id;
    private string $title;
    private string $body;
    private string $lang;

    public function __construct($t, $b, $l) {
        $this->title = $t;
        $this->body = $b;
        $this->lang = $l;
    }

    // Getters
    public function getId() {
        return $this->id;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getBody() {
        return $this->body;
    }
    public function getLang() {
        return $this->lang;
    }

    // Setters
    public function setId($i) {
        $this->id = $i;
    }
    public function setTitle($t) {
        $this->title = $t;
    }
    public function setBody($b) {
        $this->body = $b;
    }
    public function setLang($l) {
        $this->lang = $l;
    }
}

interface NoteDAOInterface {
    public function create(Note $n);
    public function findAll();
    public function findById(int $i);
    public function update(Note $n);
    public function delete(int $i);
}
