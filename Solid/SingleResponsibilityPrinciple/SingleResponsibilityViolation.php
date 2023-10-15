<?php

    // This example would violate Single Responsibility Principle - SRP
    // The Class below should only care about method getCarData()
    // The main problem here is class need to take care about two other methods
    // In future, it will be possible that we need additional method/methods e.g. return HTML format
    // Solution for this problem is to create additional classes for every method

    namespace SingleResponsibilityPrinciple;

    // CAR STORE

    class SingleResponsibilityViolation
    {

        private string $brand;
        private string $model;
        private int $year;
        private int $miles;

        // ...

        public function __construct($brand, $model, $year, $miles)
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->miles = $miles;
        }

        public function getCarData(): array
        {

            return [
                'brand' => $this->brand,
                'model' => $this->model,
                'year' => $this->year,
                'miles' => $this->miles,
            ];

        }

        // e.g. for RENDER

        public function getArrayData(): array
        {

            return $this->getCarData();

        }

        // e.g. for DATABASE

        public function getJSONData(): string
        {

            return json_encode($this->getCarData());

        }

    }