<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <link href="css/*">
  
    <title>Bootstrap-Vite</title>

    @vite([
        'resources/css/app.css', 'resources/js/app.js', 'node_modules/bootstrap/dist/css/bootstrap.min.css','node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
  <div class="container ">
    <div class="row">
      <div class="col">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Sistema Web 2.0
            </a>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="consulta.php">Consultar</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Lista de usuários</a>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">&nbsp;</div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Observação</th>
          <th scope="col">Origem</th>
          <th scope="col">Data_contato</th>
        </tr>
      </thead>
      <tbody id="TableData">
      @foreach ($agendamentos as $agendatd)
        <tr>
          
          <td scope="col">{{$agendatd->name}} </td><!--matriz-->
          <td scope="col">{{$agendatd->telefone}}</td>
          <td scope="col">{{$agendatd->observacao}}</td>
          <td scope="col">{{$agendatd->origem}}</td>
          <td scope="col">{{$agendatd->data_contato}}</td>
          <!-- <td scope="col"> -->
            
          <!-- <button type="button" class="btn btn-dark" onclick="location.href='editar.php?id='" style="width 72px" >Editar</button> -->
          <!-- <button type="button" class="btn btn-dark" onclick="location.href='excluir.php?id='" style="width 72px" >Excluir</button>vai pro excluir junto da matriz do id -->
          <!-- </td> -->
        
        </tr>
        @endforeach
      </tbody>
    </table>
</body>
</html>