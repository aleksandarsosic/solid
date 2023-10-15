<?php

    // This example would violate Liskov Substitution Principle - LSP
    //
    // Inherited method should not have more conditionals that change the return of that method
    // Below is an example with throwing an Exception

    namespace LiskovSubstitutionPrinciple;

    class LiskovSubstitutionViolation {

        public function getFuelPrices() {

            $arr = [
                (new CaliforniaFuelPriceV)->getFuelPrice(),
                (new NewYorkFuelPriceV())->getFuelPrice()

            ];

            return $arr;

        }

    }

    interface GetFuelPriceViolation {

        public function getFuelPrice(): array;

    }

    class CaliforniaFuelPriceV implements GetFuelPriceViolation {

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

    class NewYorkFuelPriceV implements GetFuelPriceViolation {

        public function getFuelPrice(): array
        {
            // TODO: Implement getFuelConsumption() method.

            $result = [
                'price' => '3.822',
                'state' => 'NewYork'
            ];

            if (!empty($result)){

                return $result;

            } else {

                throw new \Exception("Empty array!");

                // Violation

            }

        }

    }