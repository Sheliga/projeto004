<?php

class Table{
    
    function render(){
        private $name;
	function __construct($name){
		$this->name = $name;
	}
        $this -> $this->buffer = "<table border =\"1\">";
        foreach ($categoria -> listAll() as $cat) {
            $this->buffer .= "  <tr>";
            $this->buffer .= "      <td> {$cat->getId()}  </td>";
            $this->buffer .= "      <td> {$cat->getDescricao()}</td>";
            $this->buffer .= "  </tr>";
        }
        $this->buffer .="</table>";
    }

    function show(){
		echo $this->Render();
	}
}

class Button{
	private $name;
	
	function __construct($name){
		$this->name = $name;
	}
	function render(){
		return "<button type=\"button\" class=\"btn btn-primary\">{$this->name}</button>";
	}
	
	function show(){
		echo $this->Render();
	}
}

class TextArea{
	private $id;
	
	function __construct($id){
		$this->id = $id;
	}
	function render(){
		return "<textarea id = \"{$this->id}\" class=\"form-control rows = \"10\" id=\"exampleFormControlTextarea5\" rows=\"3\"></textarea>";
	}
	
	function show(){
		echo $this->render();
	}
}



class FileChooser{
	function __construct(){
		
	}
	
	function render(){
		$this->buffer = "<div class=\"custom-file\">";
		$this->buffer .= "<input type=\"file\" class=\"custom-file-input\" id=\"customFileLang\" lang=\"es\">";
		$this->buffer .= "<label class=\"custom-file-label\" for=\"customFileLang\">Seleccionar Archivo</label>";
		
		return $this->buffer;
	
	}
	function show(){
		echo $this->render();
	}
		
}