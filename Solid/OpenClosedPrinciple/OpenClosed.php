<?php

    // Open/Closed Principle - OCP
    //
    // Software artifact should be open for extension, but closed for modification
    // A Class should be extendable without modifying the class itself
    // In this case, we can add as many classes as we need without touching OpenClosed class

    namespace OpenClosedPrinciple;

    interface GetCarURL {

        public function showURL();

    }

    class OpenClosed {

        public function showURL(GetCarURL $url):string {

            return $url->showURL();

        }

    }

    class LexusURL implements GetCarURL {

        public function showURL():string {

            return 'https://www.lexus.com/';

        }

    }

    class HondaURL implements GetCarURL {

        public function showURL():string {

            return 'https://www.honda.com/';

        }

    }