<?php 
    /**
     * Class contain basic information of a company's staff.
     */
    abstract class Staff {

        /**
         * Name of a staff member.
         *
         * @var string
         */
        protected string $name;

        /**
         * Position of a staff member..
         *
         * @var string
         */
        protected string $position;

        /**
         * Constructor.
         *
         * @param [type] $name
         * @param [type] $wage
         */
        public function __construct($name, $position) {
            $this->name = $name;
            $this->position = $position;
        }

        /**
         * Get staff name.
         *
         * @return void
         */
        public function getName() {
            return $this->name;
        }

        /**
         * Set staff name.
         *
         * @param [type] $name
         * @return void
         */
        public function setName($name) {
            $this->name = $name;
        }

        /**
         * Set staff position.
         *
         * @return void
         */
        public function getPosition() {
            return $this->position;
        }

        /**
         * Get staff position.
         *
         * @param [type] $position
         * @return void
         */
        public function setPosition($position) {
            $this->position = $position;
        }

    }
?>