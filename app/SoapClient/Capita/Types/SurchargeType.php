<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * F - Fixed Amount
 * N - None
 * P - Percentage
 */
enum SurchargeType: string {
    case F = 'F';
    case N = 'N';
    case P = 'P';
}
