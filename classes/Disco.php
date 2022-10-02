<?PHP

class Disco {

	public $id;
	public $album;
	public $artista;
	public $genero;
	public $ano;
	public $discografia;
	public $descripcion;
	public $duracion;
	public $productor;
	public $imagen;
	public $precio;
	
	/**
     * Devuelve todos los discos 
     */
    public function todos_los_discos(): array
    {
        $coleccion = [];

        $JSON = file_get_contents('datos/discos.json');
        $JSONData = json_decode($JSON);

        foreach ($JSONData as $value) {
            $disco = new self();

            $disco->id = $value->id;
            $disco->album = $value->album;
            $disco->artista = $value->artista;
			$disco->genero = $value->genero;
            $disco->ano = $value->ano;
            $disco->discografia = $value->discografia;
            $disco->descripcion = $value->descripcion;
            $disco->duracion = $value->duracion;
            $disco->productor = $value->productor;
            $disco->imagen = $value->imagen;
            $disco->precio = $value->precio;

            $coleccion[] = $disco;
        }

        return $coleccion;
    }
	 
	     /**
     * Devuelve los discos en base a un artista en particular
     * @param string $artista y se usa su primera letra como variable,en este caso la $a 
     */
	 public function coleccion_por_artista(string $artista): array
		{

        $resultado = [];
        $coleccion = $this->todos_los_discos();

        foreach ($coleccion as $a) {
            if ($a->artista == $artista) {
                $resultado[] = $a;
            }
        }
        return $resultado;
		}

		/**
     * Devuelve el genero en base a un disco en particular
     * @param string $genero y se usa su primera letra como variable , en este caso la $g
     */
	 public function coleccion_por_genero(string $genero): array
		{

        $resultado = [];
        $coleccion = $this->todos_los_discos();

        foreach ($coleccion as $g) {
            if ($g->genero == $genero) {
                $resultado[] = $g;
            }
        }
        return $resultado;
		}
	
	/**
     * Devuelve el nombre de un productor en base a un determinado disco
     * @param string $productor y se usa su primera letra como variable 
     */
	 public function coleccion_por_productor(string $productor): array
		{
		
        $resultado = [];
        $coleccion = $this->todos_los_discos();
				
        foreach ($coleccion as $p) {
            if ($p->productor == $productor) {
                $resultado[] = $p;
            }
        }
        return $resultado;
		}
		


	/**
     * Esta función devuelve las primeras 5 palabras de su larga descripcion 
     * @param int $total Esta es el total de palabras a extraer 
     */
    public function descripcion_corta(int $total = 5): string
    {
        $texto = $this->descripcion;

        $array = explode(" ", $texto);
        if (count($array) <= $total) {
            $resultado = $texto;
        } else {
            array_splice($array, $total);
            $resultado = implode(" ", $array) . "...";
        }

        return $resultado;
    }	
		
	    /**
     * Devuelve el precio de la unidad, formateado correctamente
     */
    public function precio_formateado(): string
    {
        return number_format($this->precio, 2, ",", ".");
    }

    /**
     * Devuelve el nombre del productor, formateado sin sus guiones bajos 
     */
    public function productor_formateado(): string
    {
		return str_replace("_", " ", $this->productor);
	}


    /**
     * Devuelve el nombre del artista, formateado sin sus guiones bajos
     */
    public function artista_formateado(): string
    {
		return str_replace("_", " ", $this->artista);
	}

    /**
     * Devuelve el nombre del genero, formateado sin sus guiones bajos
     */
    public function genero_formateado(): string
    {
		return str_replace("_", " ", $this->genero);
	}
	
	    /**
     * Devuelve los datos del id de un producto en especifico
     * @param int $idDisco y declaro el Disco en lugar del array
	 para ver el id junto a sus detalles se clickea la imagen redonda de cada producto
     */
    public function id_por_disco(int $idDisco):Disco
    {
        $coleccion = $this->todos_los_discos();

        foreach ($coleccion as $d) {
            if ($d->id == $idDisco) {
                return $d;
            }
        }
        return null;
    }
	
}