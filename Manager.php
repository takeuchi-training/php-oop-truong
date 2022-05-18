<?php 
    class Manager extends Staff implements WageCalculatorInterface {
        private const BASE_WAGE = 2000;
        private const EFFICIENCY = 3; 
        private $bonus;

        public function __construct($name, $position, $bonus) {
            Parent::__construct($name, $position);
            $this->bonus = $bonus;
        }

        public function calculateWage() {
            return self::BASE_WAGE * self::EFFICIENCY
                + $this->bonus;
        }
    }
?>