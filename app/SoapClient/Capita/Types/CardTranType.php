<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * Mandatory on card transactions
 * 09 - Sale, keyed (cardholder not present(CNP), mail order/batch)
 * 10 - Sale, swiped or chip (cardholder present)
 * 20 - Sale, keyed (cardholder present / magstripe fallback only)
 * B2 - Sale, e-commerce, keyed (CNP)
 * Z1 - Sale, swiped, voice-authorization
 * Z2 - Sale, keyed, voice-authorization
 * Z9 - Sale, keyed, voice-authorization (CNP)
 * 47 - Refund, keyed (CNP, mail order/batch)
 * 58 - Refund, swiped or chip (cardholder present)
 * 61 - Refund, keyed (cardholder present / magstripe fallback only)
 * B4 - Refund, e-commerce, keyed (CNP)
 * 25 - Sale reversal
 * 86 - Refund reversal
 */
enum CardTranType: string {
    case Value_09 = '09';
    case Value_10 = '10';
    case Value_20 = '20';
    case B2 = 'B2';
    case Z1 = 'Z1';
    case Z2 = 'Z2';
    case Z9 = 'Z9';
    case Value_47 = '47';
    case Value_58 = '58';
    case Value_61 = '61';
    case B4 = 'B4';
    case Value_25 = '25';
    case Value_86 = '86';
}
