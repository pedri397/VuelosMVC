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
        $clases = $this->model->getClases();
  
        $this->view->mostrarInsert($pasajeros, $vuelos, $clases);
    }



    public function insertarDatos() {
        $this->view->menu();
        $idpasaje = filtrarInput("ìdpasaje", "POST");
        $pasajerocod = filtrarInput("pasajerocod", "POST");
        $identificador = filtrarInput("identificador", "POST");
        $numasiento = filtrarInput("numasiento", "POST");
        $clase = filtrarInput("clase", "POST");
        $pvp = filtrarInput("pvp", "POST");

        $respuesta = $this->model->postPasaje($idpasaje, $pasajerocod, $identificador, $numasiento, $clase, $pvp);
      
        if($respuesta = "El pasajero ya se encuetra en ese vuelo" || $respuesta = "El asiento elegido esta ocupado" || $respuesta = "Registro completado:"){
            $pasajeros = $this->model->getPasajeros();
            $vuelos = $this->model->getVuelos();
            $clases = $this->model->getClases();
            $this->view->mostrarInsert($pasajeros, $vuelos, $clases);
        } 
    }
}
?>