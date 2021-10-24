<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">
           

        <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">QR Code Current Time</h5>
                      {!! QrCode::size(200)->generate($time) !!}
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Simple QR Code & backgroundColor</h5>
                      {!! QrCode::size(250)->backgroundColor(200,240,240)->generate('Hasy QR Code Generator') !!}
                    </div>
                  </div>
                </div>
         </div>
         <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">QR Code Time Format</h5>
                      {!! QrCode::size(200)->color(0, 255, 0)->generate($time2) !!}
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Red QrCode</h5>
                      {!! QrCode::size(150)->color(255, 0, 0)->generate('Red QrCode') !!}
                    </div>
                  </div>
                </div>
         </div>
    </div>
</body>
</html>