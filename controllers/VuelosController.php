<?php

class VuelosController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new VuelosModel();
        $this->view = new VuelosView();
    }

    public function mostrarVuelos() {
        $this->view->menu();
        $vuelos = $this->model->getAllVuelos();
        $this->view->listarVuelos($vuelos);
    }


}

?>