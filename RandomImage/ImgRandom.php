<?php
/*
 * Created on 30/08/2008
 *
 * OscarArzola
 * imgRandom
 * Obtiene un archivo aleatorio del Directorio seleccionado usando SPL
 */
class imgRandom{
    private $path;
    private $data;
    private $it;
    private $selected;
    function __construct($p){   
        $this->path = $p;
        $this->selectSwf();
    }
    function selectImg(){
        foreach(new DirectoryIterator($this->path) as $archivo){
            if(!$archivo->isDot())
                $this->data[] = $archivo->getFileName();
        }
        $this->selected = $this->data[$this->getRandom()];
    }
    private function getRandom(){
        return rand(0,count($this->data)-1);
    }
    
    function getImg(){
        return $this->selected;
    }
    
}
?>