<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<title>Formulario</title>
</head>
<body>
	<div class="title1">
		<p>Ingresa tus datos</p>
	</div>
	<form action="send_form" method="post" class="form">
		{{ csrf_field() }}
		<p class="input_space"><input name="name" type="text" placeholder="Nombre completo*"></p>
		<p class="input_space"><input name="document_number" type="text" placeholder="Número de identificacíon*"></p>
		<p class="input_space"><input name="email" type="text" placeholder="Correo electrónico*"></p>
		<p class="input_space"><input name="telephone" class="input_telefono placeholder_style" type="text" placeholder="Teléfono*"></p>
		<p class="input_space"><input name="city" class="input_ciudad" type="text" placeholder="Ciudad de residencia*"></p>
		<p class="input_space"><input name="costume_purchase" type="text" placeholder="Lugar donde realizo la compra del traje*"></p>
		<p class="input_space"><input name="date_purchase" type="date" placeholder="Fecha de realización de la compra del traje*"></p>
		<p class="input_space"><input name="invoice_number" type="text" placeholder="Número de la factura de la compra*"></p>
		<div class="radio">
			<input type="radio" name="radio-group" id="first-choice" value="First Choice" />
			<label for="first-choice"><p class="text1">Acepto</p><br><p class="text2">Términos y condiciones</p></label>
		</div>
		<button class="button">Participar</button>
	</form>
	@if (session('success'))
    	<p class="text_success">{{ session('success') }}</p>
    @endif
	@if (count($errors) > 0)
	<p class="text_validation">Faltan algunos campos por llenar*</p>
    <div class="validation_fileds">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>