<?php 
    class Employee extends Staff implements WageCalculatorInterface {
        private const BASE_WAGE = 500;
        private const EFFICIENCY = 2.1;
        private const HOUR_WAGE = 50;

        private $overTime;

        public function __construct($name, $position, $overTime) {
            Parent::__construct($name, $position);
            $this->overTime = $overTime;
        }

        public function calculateWage() {
            return $this->overTime * self::HOUR_WAGE 
                + self::BASE_WAGE * self::EFFICIENCY;
        }
    }
?>