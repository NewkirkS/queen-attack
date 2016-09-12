<?php
    class Queen
    {
        private $x = 0;
        private $y = 0;

        function __construct($x, $y)
        {
            $this->x = (integer) $x;
            $this->y = (integer) $y;
        }

        function canAttack($targetX, $targetY)
        {
            if ($this->getX() == $targetX) {
                return true;
            }
        }

        function getX()
        {
            return $this->x;
        }

        function setX($newX)
        {
            $this->x = (integer) $newX;
        }

        function getY()
        {
            return $this->y;
        }

        function setY($newY)
        {
            $this->y = (integer) $newY;
        }
    }
 ?>
