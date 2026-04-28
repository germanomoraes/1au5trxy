<?php

class Cliente {
    public function __construct(public int $id, public string $nome, public string $telefone, public string $endereco) {}
}