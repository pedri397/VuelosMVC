<?php

class PasajesView {

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

    public function mostrarInsert($pasajeros, $vuelos, $clases) {

        echo '<form class="mx-auto col-4 mt-5" action="index.php?action=insertarDatos&controller=Pasajes" method="post">
        <div class="form-row mx-auto">
          <div class="form-group col-md-6">
          <input type="hidden" name="idpasaje" value="">
            <label for="inputEmail4">Codigo Pasajero</label>
            <select type="" class="form-control" placeholder="" name="pasajerocod">';

            foreach ($pasajeros as $pasa) {
                echo "<option value=".$pasa['pasajerocod'].">".$pasa['pasajerocod']."</option>";
            }

        echo '</select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Codigo Vuelo</label>
            <select type="" class="form-control" placeholder="" name="identificador">';

            foreach ($vuelos as $vue) {
                echo "<option value=".$vue['identificador'].">".$vue['identificador']."</option>";
            }

        echo '</select>
        </div>
      

        <div class="form-group col-md-6">
          <label for="inputAddress">Numero Asiento</label>
          <input type="text" class="form-control" name="numasiento">
        </div>

        <div class="form-group col-md-6">
        <label for="inputPassword4">Clase</label>
        <select type="" class="form-control" placeholder="" name="clase">';

        foreach ($clases as $cla) {
          echo "<option value=".$cla['clase'].">".$cla['clase']."</option>";
      }

  echo '</select>

        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Pvp</label>
            <input type="text" class="form-control" name="pvp">
          </div>
         
        <button type="" class="btn btn-primary mt-5">Insertar</button>
      </form>';
    }

    public function mostrarInsertE($pasajeros, $vuelos, $clases, $respuesta) {
      echo '<form class="mx-auto col-4 mt-5" action="index.php?action=insertarDatos&controller=Pasajes" method="post">
      <div class="form-row mx-auto">
        <div class="form-group col-md-6">
        <input type="hidden" name="idpasaje" value="">
          <label for="inputEmail4">Codigo Pasajero</label>
          <select type="" class="form-control" placeholder="" name="pasajerocod">';

          foreach ($pasajeros as $pasa) {
              echo "<option value=".$pasa['pasajerocod'].">".$pasa['pasajerocod']."</option>";
          }

      echo '</select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Codigo Vuelo</label>
          <select type="" class="form-control" placeholder="" name="identificador">';

          foreach ($vuelos as $vue) {
              echo "<option value=".$vue['identificador'].">".$vue['identificador']."</option>";
          }

      echo '</select>
      </div>
    

      <div class="form-group col-md-6">
        <label for="inputAddress">Numero Asiento</label>
        <input type="text" class="form-control" name="numasiento">
      </div>

      <div class="form-group col-md-6">
      <label for="inputPassword4">Clase</label>
      <select type="" class="form-control" placeholder="" name="clase">';

      foreach ($clases as $cla) {
        echo "<option value=".$cla['clase'].">".$cla['clase']."</option>";
    }

echo '</select>

      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Pvp</label>
          <input type="text" class="form-control" name="pvp">
        </div>
       <p class= "text-danger">'.$respuesta.'</p> 
      <button type="" class="btn btn-primary mt-5">Insertar</button>
    </form>';
  }
}
?>