<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum CardCategory: string {
    case CONSUMER = 'CONSUMER';
    case COMMERCIAL = 'COMMERCIAL';
}
