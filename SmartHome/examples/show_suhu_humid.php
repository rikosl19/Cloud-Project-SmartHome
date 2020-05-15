<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!--Graph-->
            <div class="row">
          <div class="col-8">
            <div class="card card-chart">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category"></h5>
                    <h3 class="card-title">Graph Temp - Humidity</h3>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>

              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>

              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h3 class="card-title"><i class="tim-icons icon-label text-primary"></i> Summary Temp & Humidity</h3>
              </div>

              <div class="card-body">
                <div class="chart-area">
                <br>
                <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-7">
                      <button type="button" style="width: 150px;" class="btn btn-primary">
                          <div id="Suhu"></div>
                          <br>
                          <img src="../img/mercury.png" width="48px">
                      </button></div>
                      <div class="col-md-2"></div>
                      </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                <br>
                <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-7">
                      <button type="button" style="width: 150px;" class="btn btn-success">
                          <div id="Humid"></div>
                          <br>
                          <img src="../img/humidity.png" width="64px">
                      </button></div>
                      <div class="col-md-2"></div>
                      </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>