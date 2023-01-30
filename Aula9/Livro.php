<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private string $titulo;
    private string $autor;
    private int $totPaginas;
    private int $pagAtual;
    private bool $aberto;
    private Pessoa $leitor;


    public function __construct(string $titulo, string $autor, int $totPaginas, Pessoa $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "Livro: ".$this->titulo. " escrito por ".$this->autor."\n";
        echo "Paginas: ".$this->totPaginas." atual: ".$this->pagAtual."\n";
        echo "Sendo lido por: ".$this->leitor->getNome()."\n\n";

    }

    public function getTitulo()
    {
        return $this->titulo;
    }


    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }


    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }


    public function getTotPaginas()
    {
        return $this->totPaginas;
    }


    public function setTotPaginas(int $totPaginas): void
    {
        $this->totPaginas = $totPaginas;
    }


    public function getPagAtual()
    {
        return $this->pagAtual;
    }


    public function setPagAtual(int $pagAtual): void
    {
        $this->pagAtual = $pagAtual;
    }


    public function getAberto()
    {
        return $this->aberto;
    }


    public function setAberto(bool $aberto): void
    {
        $this->aberto = $aberto;
    }


    public function getLeitor()
    {
        return $this->leitor;
    }


    public function setLeitor(string $leitor): void
    {
        $this->leitor = $leitor;
    }


    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear(int $p)
    {
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else
            $this->pagAtual = $p;
    }

    public function avancarPag()
    {
        $this->pagAtual ++;
    }

    public function voltarPag()
    {
        $this->pagAtual --;
    }
}