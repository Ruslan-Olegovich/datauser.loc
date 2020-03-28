<?php

  class User
  {

    private $words;


    public function setWords($words) {
        $this->words = $words;
    }

    public function getWords() {
        return $this->words;
    }

    public function sayIt() {
        return $this->getWords();
    }
  }
