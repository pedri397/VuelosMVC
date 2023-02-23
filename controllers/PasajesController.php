<?php

class PasajesController {

    private $model;
    private $view;

    public function __construct(){
        $this->model = new PasajesModel;
        $this->view = new PasajesView;
    }

    public function insertarPasaje() {
        $this->view->menu();
        $pasajeros = $this->model->getPasajeros();
        $vuelos = $this->model->getVuelos();
        $this->view->mostrarInsert($pasajeros, $vuelos);
    }

    public function insertarDatos() {
        $pasajerocod = filtrarInput("pasajercod", "POST");
        echo $pasajerocod;
    }
}
?>