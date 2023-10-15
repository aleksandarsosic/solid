<?php

    // Liskov Substitution Principle - LSP
    //
    // All derived classes must behave according to the reasonable assumptions of the base class
    // Methods must take the same parameters
    // Methods must have the same name
    // Inherited methods should return the same type as that of its parent
    // Exception, if exist, must match

    namespace LiskovSubstitutionPrinciple;

    class LiskovSubstitution {

        public function getFuelPrices() {

            $arr = [
                (new CaliforniaFuelPrice)->getFuelPrice(),
                (new NewYorkFuelPrice)->getFuelPrice()
            ];

            return $arr;

        }

    }

    interface GetFuelPrice {

        public function getFuelPrice(): array;

    }

    class CaliforniaFuelPrice implements GetFuelPrice {

        public function getFuelPrice(): array
        {
            // TODO: Implement getFuelConsumption() method.
            // e.g. different prices and states

            $result = [
                'price' => '5.627',
                'state' => 'California'
            ];

            return $result;

        }

    }

    class NewYorkFuelPrice implements GetFuelPrice {

        public function getFuelPrice(): array
        {
            // TODO: Implement getFuelConsumption() method.

            $result = [
                'price' => '3.822',
                'state' => 'NewYork'
            ];

            return $result;

        }

    }