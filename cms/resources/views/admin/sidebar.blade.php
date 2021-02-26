<div class="sidebar shadow">
	<div class="section-top">

		<!-- cabecera logo   -->
		<div class="logo">
			<img src="{{ url('static/images/logo.png') }}" class="img-fluid">
		</div>




		<!-- cuerpo  -->
		<div class="user">
			<span class="subtitle">Hola:</span>
			<div class="name">
				{{ Auth::user()->name }} {{ Auth::user()->lastname }}
				<!-- boton de salida   -->
				<a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
					<!-- muestra el correo electronico del que esta conectado  -->
			<div class="email">{{ Auth::user()->email }}</div>
		</div>
	</div>

	<div class="main">
		
	</div>
</div>