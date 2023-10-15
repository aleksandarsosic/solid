<?php

    // Single Responsibility Principle - SRP
    //
    // A Class or a method should do only one thing
    // A Class or a method should be responsible for only one thing
    // A Class should have only one reason to change
    // A Class should have only one job

    namespace SingleResponsibilityPrinciple;

    // CAR STORE

    class SingleResponsibility
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

    }

    interface returnCarData {

        public function returnData(SingleResponsibility $getCarData);

    }

    class getArrayData implements returnCarData {

        public function returnData(SingleResponsibility $getCarData)
        {

            return $getCarData->getCarData();

        }

    }

    class getJSONData implements returnCarData {

        public function returnData(SingleResponsibility $getCarData)
        {

            return json_encode($getCarData->getCarData());

        }

    }