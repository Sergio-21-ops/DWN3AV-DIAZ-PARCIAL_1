<?PHP
$id = $_GET['id'] ?? FALSE;
$miObjetoDisco = new Disco();
$disco = $miObjetoDisco-> id_por_disco($id);
?>

<h3 class="text-center my-5"><?=$titulo; ?></h3>
			
<div class="container">
<?PHP if (isset($disco)) { ?>
    <div class="row mb-3">
            <div class="col-md" id="imagen">
			<img class="img-fluid" id="tapa" src="imagenes/<?= $disco->imagen; ?>" alt="Tapa de <?= $disco->artista; ?>">
			</div>
			<div class="col-md">
			<h3> <?= $disco->album; ?></h3>
			<p>Artista: <?= $disco->artista_formateado() ?> </p>
			<p>Genero: <?= $disco->genero_formateado() ?> </p>
			<p>Año: <?= $disco->ano; ?></p>
			<p> Descripcion:<?= $disco->descripcion; ?></p> 
			<p>Sello discografico: <?= $disco->discografia; ?></p>
			<p>Duracion: <?= $disco->duracion; ?> </p>
			<p>Productor: <?= $disco->productor_formateado() ?> </p>
			<p>Precio: $<?= $disco->precio_formateado() ?> </p>
			</div>
    </div>
<?PHP }else{ ?>
<p class="lead">No se encontro al productor solicitado</p>
<?PHP } ?>
</div>