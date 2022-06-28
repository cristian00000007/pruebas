<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pruebas";



  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

  $select="SELECT*FROM users";
    $resultado=mysqli_query($conn,$select);
    $result = mysqli_fetch_all($resultado, MYSQLI_ASSOC);


    $consulta = mysqli_query($conn, "SELECT * FROM users");
    $valores = mysqli_fetch_array($consulta);
    $fname = $valores['name'];
    $lname = $valores['surname'];
    $email = $valores['email'];
    ?>
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body">
        @csrf

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../public">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Perfil del usuario</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->


          <div class="row gutters-sm">
            <div class="col-md-4 mb-3" >
              <div class="card">
                <div class="card-body" style="background:#1699B6 ;">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4></h4>
                      <br>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $fname;?>
                    </div>
                  </div>
                  <br>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Apellido: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $lname;?>
                    </div>
                  </div>
                  <br>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $email;?>
                    </div>
                  </div>
                  <br>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}

.btn-outline-info{
    background: white;
    color: black;
}

.btn-outline-info:hover{
    color: white;
    background: #0C5464;
}


.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>

