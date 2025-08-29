<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * 0 - Signed voucher
 * 1 - Mail order/telephone order/CNP
 * 2 - Continuous authority
 * 3 - PIN verified (on-line)
 * 4 - PIN verified (off-line)
 * 5 - Signed voucher (swiped)
 * 6 - Signed voucher (keyed)
 * 7 - Unattended device without PIN
 * 8 - PIN verified transaction (recovered after sale)
 * 9 - Signed voucher (recovered after sale)
 * G - Secure e-commerce transaction with cardholder certificate
 * H - Non-authenticated security transaction with SET merchant certificate
 * J - Non-authenticated security transaction without SET merchant certificate (e.g. SSL)
 * K - Non-secure transaction
 * R - Reversal (used in reversal file only)
 */
enum KeySwipe: string {
    case Value_0 = '0';
    case Value_1 = '1';
    case Value_2 = '2';
    case Value_3 = '3';
    case Value_4 = '4';
    case Value_5 = '5';
    case Value_6 = '6';
    case Value_7 = '7';
    case Value_8 = '8';
    case Value_9 = '9';
    case G = 'G';
    case H = 'H';
    case J = 'J';
    case K = 'K';
    case R = 'R';
}
