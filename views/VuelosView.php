<?php

class VuelosView {

    public function menu() {
        echo '<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Iberia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?controller=Vuelos&action=mostrarVuelos">Vuelos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?controller=Pasajes&action=insertarPasaje">Insertar Vuelos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>';
    }

    public function listarVuelos($vuelos) {
        echo '<table class="table mt-5 table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Identificador</th>
            <th scope="col">Aeropuerto Origen</th>
            <th scope="col">Aeropuerto Destino</th>
            <th scope="col">Pais Origen</th>
            <th scope="col">Pais Destino</th>
            <th scope="col">Tipo de vuelo</th>
            <th scope="col">Num. Pasajeros</th>
          </tr>
        </thead>';

        foreach ($vuelos as $vue) {
            echo '<tbody>
            <tr>
              <th scope="row">'.$vue['identificador'].'</th>
              <td>'.$vue['aeropuerto_origen_nombre'].' ('.$vue['aeropuerto_origen'].')</td>
              <td>'.$vue['aeropuerto_destino_nombre'].' ('.$vue['aeropuerto_destino'].')</td>
              <td>'.$vue['pais_origen'].'</td>
              <td>'.$vue['pais_destino'].'</td>
              <td>'.$vue['tipovuelo'].'</td>
              <td>'.$vue['pasajeros'].'</td>
            </tr>
          </tbody>';
        }
       echo '</table>';

    }


}
?>