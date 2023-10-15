<?php

    // Interface Segregation Principle - ISP
    //
    // A client should never be forced to implement an interface that it does not use
    // A client should not be forced to depend on methods they do not use

    namespace InterfaceSegregationPrinciple;

    interface CarsConsumptionPetrol {
        public function petrolConsumption();

    }

    interface CarsConsumptionEnergy {
        public function energyConsumption();

    }

    class InterfaceSegregation { // for demonstration purpose

        public function getCarsConsumption() {

            $arr = [
                (new PetrolCars) -> petrolConsumption(),
                (new HybridCars) -> petrolConsumption(),
                (new HybridCars) -> energyConsumption(),
                (new ElectricCars) -> energyConsumption()
            ];

            return $arr;

        }

    }

    class PetrolCars implements CarsConsumptionPetrol {

        public function petrolConsumption()
        {
            // TODO: Implement petrolConsumption() method.

            return 'Petrol Consumption';
        }

    }

    class HybridCars implements CarsConsumptionPetrol, CarsConsumptionEnergy {

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

    class ElectricCars implements CarsConsumptionEnergy {

        public function energyConsumption()
        {
            // TODO: Implement energyConsumption() method.

            return 'Energy Consumption';
        }

    }