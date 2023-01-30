<?php
require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
        private string $titulo;
        private string $avaliacao;
        private int $views;
        private int $curtidas;
        private bool $reproduzindo;

    /**
     * @param string $titulo
     * @param string $avaliacao
     * @param int $views
     * @param int $curtidas
     * @param bool $reproduzindo
     */
    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function play()
    {
        $this->reproduzindo = true;
    }

    public function pause()
    {
        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->curtidas ++;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }


    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }


    public function getAvaliacao(): string
    {
        return $this->avaliacao;
    }


    public function setAvaliacao(string $avaliacao): void
    {

        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }


    public function getViews(): int
    {
        return $this->views;
    }


    public function setViews(int $views): void
    {
        $this->views = $views;
    }


    public function getCurtidas(): int
    {
        return $this->curtidas;
    }


    public function setCurtidas(int $curtidas): void
    {
        $this->curtidas = $curtidas;
    }


   // public function isReproduzindo(): bool
    public function getReproduzindo(): bool
    {
        return $this->reproduzindo;
    }


    public function setReproduzindo(bool $reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }


}