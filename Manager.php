<?php

class Manager {

    public function __construct(
        private array $missiles = []
    ) {}

    public function shootRandom(float $latitude, float $longitude) {
        $this->missiles[array_rand($this->missiles)]->shoot($latitude, $longitude);
    }
}

class Missile {

    public function __construct(
        private Silo $silo
    ) {}

    public function shoot() {
        echo "pew, pew\n";
        echo "hehe, jk, putin\n";
    }
}

class Silo {

    public function __construct(
        public string $id,
        public float $latitude,
        public float $longitude
    ) {}
}
