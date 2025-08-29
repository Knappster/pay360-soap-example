<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum CardDescription: string {
    case VISA = 'VISA';
    case MASTERCARD = 'MASTERCARD';
    case AMERICANEXPRESS = 'AMERICAN EXPRESS';
    case LASER = 'LASER';
    case DINERS = 'DINERS';
    case JCBC = 'JCBC';
    case NONE = 'NONE';
}
