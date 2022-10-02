
         <h2 class="text-center my-5"><?=$titulo; ?></h2>
       	<form action="index.php?sec=procesar_datos" method="POST">
        <div class="row">
		<div class="col">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Inserte su nombre…" required>
		</div>
        <div class="col">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Inserte su apellido…" required>
        </div>
		</div>
		<div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
		<div class="form-group">
            <label for="mensaje">Mensaje:</label>
			<textarea id="mensaje" name="mensaje" class="form-control" cols="30" rows="5" required ></textarea>
        </div>
		<div class="form-group">
        <button type="submit" id="boton-enviar">Enviar</button>
		<button type="reset" id="boton-limpiar">Limpiar</button>
		</div>
		</form>