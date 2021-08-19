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
    
    public function getTodosArtigos(): array
    {
        $resultado = $this->pdo->query('SELECT * from artigos');
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getArtigoById(string $id)
    {
        $resultado = $this->pdo->query('select * from artigos where id =' . $id);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insertNovoArtigo(string $titulo, string $conteudo)
    {
        $query = "insert into `main.artigos` (titulo, conteudo) values(:titulo, :conteudo)";
        $insereArtigo = $this->pdo->prepare($query);
        $insereArtigo->bindValue(':titulo', $titulo, PDO::PARAM_STR);
        $insereArtigo->bindValue(':conteudo', $conteudo, PDO::PARAM_STR);
        $insereArtigo->execute();
    }
}