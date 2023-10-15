<?php

    require_once './vendor/autoload.php';

    echo "****************Single Responsibility Principle - SRP****************<br><br>";

    use SingleResponsibilityPrinciple\SingleResponsibility as SRP;

    $car = new SRP('Lexus', 'IS350', 2015, '70000');

    echo "class getArrayData<br>";
    $getArrayData = new \SingleResponsibilityPrinciple\getArrayData();
    print_r($getArrayData->returnData($car));

    echo "<br><br>";

    echo "class getJSONData<br>";
    $getJSONData = new \SingleResponsibilityPrinciple\getJSONData();
    print_r($getJSONData->returnData($car));

    echo "<br><br><br>";

    echo "****************Open/Closed Principle - OCP****************<br><br>";

    use OpenClosedPrinciple\OpenClosed as OCP;

    $url = new OCP();

    echo $url->showURL(new \OpenClosedPrinciple\LexusURL());
    echo "<br>";
    echo $url->showURL(new \OpenClosedPrinciple\HondaURL());

    // $u = new \OpenClosedPrinciple\OpenClosedViolation();
    // echo $u->showURL(new \OpenClosedPrinciple\LexusURLAddress());

    echo "<br><br><br>";

    echo "****************Liskov Substitution Principle - LSP****************<br><br>";

    use LiskovSubstitutionPrinciple\LiskovSubstitution as LSP;

    $fuelPrices = new LSP();
    var_dump($fuelPrices->getFuelPrices());

    echo "<br><br><br>";

    echo "****************Interface Segregation Principle - ISP****************<br><br>";

    echo "Good Interface Segregation<br><br>";

    use InterfaceSegregationPrinciple\InterfaceSegregation as ISP;

    $ISP = new ISP();

    var_dump($ISP->getCarsConsumption());

    echo "<br><br>Violation<br><br>";

    $ISPV = new \InterfaceSegregationPrinciple\InterfaceSegregationViolation();

    var_dump($ISPV->getCarsConsumption());

    echo "<br><br><br>";