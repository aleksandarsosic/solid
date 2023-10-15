<?php

    // This example would violate Interface Segregation Principle - ISP
    //
    // We should not force classes to implement methods that they do not need it at all
    // e.g. class ElectricCarsV do not need method petrolConsumption
    // Solution for this problem is to do Interface Segregation

    namespace InterfaceSegregationPrinciple;

    interface CarsConsumptionV {

        public function petrolConsumption();
        public function energyConsumption();

    }

    class InterfaceSegregationViolation { // for demonstration purpose

        public function getCarsConsumption() {

            $arr = [
                (new PetrolCarsV) -> petrolConsumption(),
                (new PetrolCarsV) -> energyConsumption(),
                (new HybridCarsV) -> petrolConsumption(),
                (new HybridCarsV) -> energyConsumption(),
                (new ElectricCarsV) -> petrolConsumption(),
                (new ElectricCarsV) -> energyConsumption()
            ];

            return $arr;

        }

    }

    class PetrolCarsV implements CarsConsumptionV {

        public function petrolConsumption()
        {
            // TODO: Implement petrolConsumption() method.

            return 'Petrol Consumption';
        }

        public function energyConsumption()
        {
            // Violation
        }

    }

    class HybridCarsV implements CarsConsumptionV {

        public function energyConsumption()
        {
            // TODO: Implement energyConsumption() method.

            return 'Energy Consumption';
        }

        public function petrolConsumption()
        {
            // TODO: Implement petrolConsumption() method.

            return 'Petrol Consumption';
        }

    }

    class ElectricCarsV implements CarsConsumptionV {

        public function energyConsumption()
        {
            // TODO: Implement energyConsumption() method.

            return 'Energy Consumption';
        }

        public function petrolConsumption()
        {
            // Violation
        }

    }