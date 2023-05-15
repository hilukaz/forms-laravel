
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-group{
            margin: 10px;
        }
        .navbar-brand{
            margin:10px;
        }
    </style>
    <title>Bootstrap-Vite</title>

    @vite([
        'resources/css/app.css', 'resources/js/app.js', 'node_modules/bootstrap/dist/css/bootstrap.min.css','node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
				<a class="navbar-brand" href="#">SISTEMA WEB</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="">Cadastrar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('consultar') }}">Consultar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
					<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
					<p>
						<form method="POST" action="/atualizar/{{ $agendamentos->id }}" id="form" name="form">
							<!-- route deixa explicito que é uma rota -->
							@csrf
            				@method('PUT')
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input value="{{$agendamentos->name}}" type="text" class="form-control" name="txtNome" required id="txtNome">
								
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input value="{{$agendamentos->telefone}}" type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Origem:</label>
								<select class="form-control" required name="txtOrigem" id="txtOrigem">
									<option {{ $agendamentos->origem === 'Celular' ? "selected" : ''}} >Celular</option>
									<option {{ $agendamentos->origem === 'Fixo' ? "selected" : ''}}  >Fixo</option>
									<option {{ $agendamentos->origem === 'Whatsapp' ? "selected" : ''}}  >Whatsapp</option>
									<option {{ $agendamentos->origem === 'Facebook' ? "selected" : ''}} >Facebook</option>
									<option {{ $agendamentos->origem === 'Instagram' ? "selected" : ''}} >Instagram</option>
									<option {{ $agendamentos->origem === 'Google Meu Negocio' ? "selected" : ''}}  >Google Meu Negocio</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input value="{{$agendamentos->data_contato}}" type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea  class="form-control" name="txtObservacao" id="txtObservacao" rows="3">{{ $agendamentos->observacao }}</textarea>
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Atualizar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>