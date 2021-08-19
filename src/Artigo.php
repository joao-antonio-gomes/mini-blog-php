<?php

class Artigo
{
    /**
     * @var PDO
     */
    private $pdo;
    
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function exibirTodos(): array
    {
        $resultado = $this->pdo->query('SELECT * from artigos');
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}