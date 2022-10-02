<?PHP
$artistaSeleccionado = $_GET['art'] ?? FALSE;
$miObjetoDisco = new Disco();
$discompleto = $miObjetoDisco -> todos_los_discos();
?>

<h2 class="text-center my-5">Todos los <?=$titulo; ?></h2>

<nav class="nav nav-masthead justify-content-center">
<a class="nav-item nav-link" href="index.php?sec=productos&$discos">Todos</a>

<ul>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?sec=productos&art" role="button" aria-haspopup="true" aria-expanded="false">Artistas</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?sec=productos_por_artista&art=Faith_no_more">Faith no more</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_artista&art=Hermetica">Hermetica</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_artista&art=Paramore">Paramore</a>
  </div>
  </li>
 </ul> 
  
  <ul>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?sec=productos&genero" role="button" aria-haspopup="true" aria-expanded="false">Genero</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Metal_alternativo">Metal alternativo</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Rock_alternativo">Rock alternativo</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Funk_metal">Funk metal</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Trash_metal">Thrash metal</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Speed_metal">Speed metal</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Thrash_metal_y_speed_metal">Thrash metal, speed metal</a>
	  <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Pop_punk">Pop punk</a>	
	  <a class="dropdown-item" href="index.php?sec=productos_por_genero&genero=Pop_rock">Pop rock</a>
  </div>
  </li>
  </ul>
  
  
  <ul>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.php?sec=productos&pro" role="button" aria-haspopup="true" aria-expanded="false">Productor</a>
   <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Matt_Wallace">Matt Wallace</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Roli_Mosimann">Roli Mosimann</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Billy_Gould">Billy Gould</a>
	  <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Hermetica">Hermetica</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Ricardo_Iorio">Ricardo Iorio</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Walter_Kolm">Walter Kolm</a>   
	  <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Sergio_Fasanelli">Sergio Fasanelli</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=James_Paul_Wisner">James Paul Wisner</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=David_Bendeth">David Bendeth</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Rob_Cavallo">Rob Cavallo</a>
      <a class="dropdown-item" href="index.php?sec=productos_por_productor&pro=Justin_Meldal_Johnsen">Justin Meldal-Johnsen</a>
  </div>
  </li>
  </ul>
</nav>
<div class="container">
<div class="row mb-3">
<?PHP if (count($discompleto)) { ?>
    <?PHP foreach ($discompleto as $disco) { ?>
        <div class="col-sm-4">
		<a href="index.php?sec=detalle&id=<?= $disco->id; ?>">
			<img class="rounded-circle img-thumbnail" src="imagenes/<?= $disco->imagen; ?>" alt="Portada de <?= $disco->album; ?>" >
		</a>
		 <div>
			<h2 class="text-center"><?= $disco->album; ?></h2>
			<p>Artista: <?= $disco->artista_formateado() ?></p>
			<p>Año: <?= $disco->ano; ?></p>
			<p>Sello discografico: <?= $disco->discografia; ?></p>
			<p>Duracion: <?= $disco->duracion; ?></p>
			<p>Descripcion: <?= $disco->descripcion_corta() ?></p>
			<p>Productor: <?= $disco->descripcion_corta() ?></p>
			</div>
		</div>
    <?PHP } ?>
<?PHP }else{ ?>
<p class="lead">No se encontro el disco</p>
<?PHP } ?>
</div>
</div>