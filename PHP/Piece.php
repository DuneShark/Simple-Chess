<?php

abstract class Piece
{

    private $isKilled = false;
    private $isWhite;

    function get_isKilled()
    {
        return $this->isKilled;
    }

    function set_isKilled($isKilled)
    {
        $this->isKilled = $isKilled;
    }

    function get_isWhite()
    {
        return $this->isWhite;
    }

    function set_isWhite($isWhite)
    {
        $this->isWhite = $isWhite;
    }

}

class King extends Piece {
    
}

class Queen extends Piece {

}

class Rook extends Piece {

}

class Bishop extends Piece {

}

class Knight extends Piece {

}

class Pawn extends Piece {
    
}

?>