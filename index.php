<?php

    require_once './vendor/autoload.php';

    echo "Single Responsibility Principle - SRP<br><br>";

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

    echo "Open/Closed Principle - OCP<br><br>";

    use OpenClosedPrinciple\OpenClosed as OCP;

    $url = new OCP();

    echo $url->showURL(new \OpenClosedPrinciple\LexusURL());
    echo "<br>";
    echo $url->showURL(new \OpenClosedPrinciple\HondaURL());

    // $u = new \OpenClosedPrinciple\OpenClosedViolation();
    // echo $u->showURL(new \OpenClosedPrinciple\LexusURLAddress());

    echo "<br><br><br>";