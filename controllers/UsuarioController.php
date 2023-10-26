<?php
class UsuarioController {
    private $usuarioModel;

    public function __construct($usuarioModel) {
        $this->usuarioModel = $usuarioModel;
    }

    public function perfil() {
        // Lógica para exibir o perfil do usuário
        include(SITE_ROOT.'/views/website/pages/perfil.php'); // Carregando a view correspondente
    }
}