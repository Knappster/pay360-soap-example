<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum SecurityResult: string {
    case Y = 'Y';
    case A = 'A';
    case U = 'U';
    case N = 'N';
}
