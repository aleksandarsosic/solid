<?php

    // Dependency Inversion Principle - DIP
    //
    // Entities must depend on abstractions, not on concretions
    // High level modules should not depend on low level modules
    // This example show us that both classe depend on interface Engine
    // Never depend on anything concrete

    namespace DependencyInversionPrinciple;

    class DependencyInversion {

        public function callDIP() {

            $arr = new Car(new EngineCar());
            return $arr->driveCar();

        }

    }

    interface Engine {

        public function engineOn();
        public function engineOff();

    }

    class EngineCar implements Engine {

        public function engineOn() {

            return 'Engine is ON!';

        }

        public function engineOff() {

            return 'Engine is OFF!';

        }

    }

    class Car {

        private Engine $engine;

        public function __construct(Engine $engine) {

            $this->engine = $engine;

        }

        public function driveCar() {

            return $this->engine->engineOn();

        }

        public function parkCar() {

            return $this->engine->engineOff();

        }

    }