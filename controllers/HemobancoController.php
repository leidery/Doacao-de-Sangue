<?php
class HemobancoController {
    private $hemobancoModel;

    public function __construct($hemobancoModel) {
        $this->hemobancoModel = $hemobancoModel;
    }

    public function listarHemobancos() {
        // Lógica para listar os hemobancos
        include(WEBSITE_PAGES.'/lista_hemobancos.php'); // Carregando a view correspondente
    }

    // ... Outros métodos do controlador
}