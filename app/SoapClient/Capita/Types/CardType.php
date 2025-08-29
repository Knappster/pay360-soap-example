<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * Mandatory on card transactions
 * D - Debit Card
 * C - Credit Card
 * N - No Auth
 */
enum CardType: string {
    case D = 'D';
    case C = 'C';
    case N = 'N';
}
