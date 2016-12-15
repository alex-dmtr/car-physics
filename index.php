<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="stylesheets/bootstrap.min.css"/>
    <!--<link rel="stylesheet" href="stylesheets/bootstrap-theme.css"/>-->
    <link rel="stylesheet" href="stylesheets/style.css"/>
    <script src="javascripts/jquery-1.12.3.min.js"></script>
    <script src="javascripts/bootstrap.js"></script>
    <script src="javascripts/script.js" type="text/javascript"></script>
    <title>Mecanica unei masini aflate in miscare</title>
  </head>
  
  <body>
        <div class="container">
          <div id="menu" class="form-group">
            <div class="row">
              <div class="col-lg-3">
                <label for="inclinedPlaneRotation">Unghiul planului (grade):</label>
                <input id="inclinedPlaneRotation" type="number" step="0.01" min="25" max="45" name="inclinedPlaneRotation" value="30" class="form-control"/>
                <label for="rho">Densitatea aerului:</label>
                <input id="rho" type="number" step="0.01" name="rho" value="1.2" class="form-control"/>
                <label for="frictionCoef">Coeficientul de frecare:</label>
                <input id="frictionCoef" type="number" step="0.01" name="frictionCoef" value="0.30" class="form-control"/>
              </div>
              <div class="col-lg-3">
                <label for="carMass">Masa masinii [kg/m^3]:</label>
                <input id="carMass" type="number" step="1" name="carMass" value="1500" disabled="disabled" class="form-control"/>
                <label for="massSlider">Distributia de masa:</label>
                <input id="massSlider" type="number" name="massSlider" step="0.01" min="0.25" max="0.75" value="0.6" class="form-control"/>
                <label for="enginePower">Puterea motorului [kW]</label>
                <input id="enginePower" type="number" name="enginePower" value="73.54" disabled="disabled" class="form-control"/>
              </div>
              <div class="col-lg-6">
                <h3>Informatii</h3>
                <p>Proiect realizat de Alex Dumitru, Andrei Tosu si Ingrid Axinte. © 2016</p>
                <p>Prof. coordonator Andrei Craifaleanu. </p>
                <p>
                  <input id="isWater" type="checkbox" name="isWater" checked="checked"/>                        Exista apa?
                </p>
                <p>
                  <input id="showForces" type="checkbox" name="showForces" checked="checked"/>                        Vizualizare forte
                </p>
                <p>
                  <input id="autoAcc" type="checkbox" name="autoAcc" checked="checked"/>    Accelerare automata
                  <button onclick="play()" style="margin-left:15px" class="btn btn-primary">Play</button>
                </p>
              </div>
            </div>
            <img id="car" src="images/car.png" style="width:300; height:78" hidden="true"/><img id="wheel" src="images/wheel.png" style="width:55; height:55" hidden="true"/>
          </div>
        </div>
        <div class="container-fluid">
          <canvas id="canvas" width="1000" height="800" style="width:100%; height:auto"></canvas>
        </div>

    </body>

</html>
