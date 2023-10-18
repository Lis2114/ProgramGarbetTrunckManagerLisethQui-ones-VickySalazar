
<form action="/trabajoFinal"  method="post" align="right"><button  class="regresar" >Regresar</button></form>

<form action="../services/auth.php" method="post" class="form">
<h1>INICIAR SESIÓN </h1>

<div class="mb-3 row  ">
    <label id=""  for="staticEmail" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
    <input type="text"  class="input-group" id="staticEmail" name="user" >
    </div>
</div>

<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
    <input type="password" class="input-group " id="inputPassword"  name="pwd" >
    </div>
</div>
<div class="col-auto  ">
        <button type="submit" class="sep-button">INGRESAR</button>
    </div>
        </div>
        <div class="col-3">

        </div>
</form>

<div class= "container text-center">
<?php
  //session_start(); //  incluir iniciar sección en el index
 if(isset($_SESSION['login'])){
  if($_SESSION['login'] ==true){
    include '../pages/home.php';

  }else{
    include '../pages/login.php';
  }
 }
 else
 ?>
</div>
