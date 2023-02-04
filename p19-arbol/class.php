<?php
class Nodo {
    public $nodoI;
    public $value;
    public $nodoD;

    
    function __construct( $val = null) {
        $this->nodoI = null;
        $this->value = $val;
        $this->nodoD = null;
    }
}

class Arbol {

    public $raiz;

    function __construct() {
        $this->raiz = null;
    }

    
    public function insertar($r, $val) { /** Método que agrega un nuevo nodo al arbol en forma de "Árbol binario de búsqueda". */
        if ($this->raiz == null) {
            $this->raiz = new Nodo($val);
        } else if ($val < $r->value) {
            if ($r->nodoI == null) {
                $r->nodoI = new Nodo($val);
            } else {
                return insertar($r->nodoI, $val);
            }
        } else if ($val > $r->value) {
            if ($r->nodoD == null) {
                $r->nodoD = new Nodo($val);
            } else {
                return insertar($r->nodoD, $val);
            }
        } else {
            return "Error valor duplicado";
        }
        return "Registro exitoso";
    }

    public function altura($r) { /** Método que devolverá la altura del árbol. */
    
        if ($r == null) { //Si está vacío 0
            return 0;
        } else {
            return 1 + (max(altura($r->nodoI), altura($r->nodoD)));
        }
    }

    public function peso($r) { /** Método que devolverá el peso del árbol. */
        if ($r == null) { //Si está vacío 0
            return 0;
        } else {
            return $r->value + peso($r->nodoI) + peso($r->nodoD);
        }
    }

    public function cantidad($r) { /** Método que devolverá la cantidad de nodos en el árbol. */
        if ($r == null) { //Si está vacío 0
            return 0;
        } else {
            return 1 + cantidad($r->nodoI) + cantidad($r->nodoD);
        }
    }

    
    public function pesoPromedio($r) { /** Método que devolverá el peso promedio del árbol. */
        if ($r == null) { //Si está vacío 0
            return 0;
        } else {
            return  peso($r) / cantidad($r);
        }
    }

}