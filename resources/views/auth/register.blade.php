<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h3">DDRSistemas</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Registrar un nuevo usuario</p>

        <form action="{{ route('register') }}" method="post">
           
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Nombre completo">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="text" name="cedula" class="form-control" placeholder="Cédula">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-number">CI</span>
                    </div>
                </div>
                @error('cedula')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="text" name="celular" max="11"  class="form-control" placeholder="Eje: 04009999999">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-number">Celular</span>
                    </div>
                </div>
                @error('celular')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Correo Electrónico">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" value="">
                <div class="input-group-append">
                   <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Repita la contraseña" value="">
                <div class="input-group-append">
                   <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block"><span class="fas fa-user-plus"></span>Registrar</button>
            </div>

            <div class="input-group mb-3">
              <div class="col-8">
                  <span class="fas fa-register"><a href="/login">Acceder</a></span>
              </div>
            </div>
            <a href="/" class="col-md-6 btn  btn-outline-secondary btn-sm" style="width: 100px; height: 45px;" class="tooltip-test" title="Volver">
    					<i class="fa fa-refresh"> Volver</i>
    					</a>


        </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

