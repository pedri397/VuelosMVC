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

    public function mostrarInsert($pasajeros, $vuelos) {

        echo '<form class="mx-auto col-4">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Codigo Pasajero</label>
            <select type="" class="form-control" placeholder="">';

            foreach ($pasajeros as $pasa) {
                echo "<option>".$pasa['pasajerocod']."</option>";
            }

        echo '</select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Codigo Vuelo</label>
            <select type="" class="form-control" placeholder="">';

            foreach ($vuelos as $vue) {
                echo "<option>".$vue['identificador']."</option>";
            }

        echo '</select>
        </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>';
    }
}
?>