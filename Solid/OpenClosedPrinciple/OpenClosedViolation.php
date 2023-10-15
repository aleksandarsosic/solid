<?php

    // This example would violate Open/Closed Principle - OCP
    //
    // The problem here is that we always need to modify class OpenClosedViolation
    // e.g. If we add new class ToyotaURLAddress, we also need to add addditional elfeif in showURL() method

    namespace OpenClosedPrinciple;

    class OpenClosedViolation {

        public function showURL($url) {

            if ($url instanceof LexusURLAddress){

                return $url->showLexusURL();

            } elseif ($url instanceof HondaURLAddress) {

                return $url->showHondaURL();

            } else {

                throw new \Exception('Nothing to show!');

            }

        }

    }

    class LexusURLAddress {

        public function showLexusURL():string {

            return 'https://www.lexus.com/';

        }

    }

    class HondaURLAddress {

        public function showHondaURL():string {

            return 'https://www.honda.com/';

        }

    }