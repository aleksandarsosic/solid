<?php

    // This example would violate Dependency Inversion Violation - DIP
    //
    // Class CarV depends on class EngineV
    // Both classes should depend on abstractions e.g. interfaces

    namespace DependencyInversionPrinciple;

    class DependencyInversionViolation { // for demonstration purpose

        public function callDIPV() {

            $arr = new CarV(new EngineV());
            return $arr->parkCar();

        }

    }

    class EngineV {

        public function engineOn() {

            return 'Engine is ON!';

        }

        public function engineOff() {

            return 'Engine is OFF!';

        }

    }

    class CarV {

        private EngineV $engine;

        public function __construct(EngineV $engine)
        {
            $this->engine = $engine;
        }

        public function driveCar() {

            return $this->engine->engineOn();

        }

        public function parkCar() {

            return $this->engine->engineOff();

        }

    }