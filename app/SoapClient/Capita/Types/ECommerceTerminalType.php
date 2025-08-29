<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * For E-commerce transactions
 * 22 - Chip and Pin transaction
 * 25 - Unattended Chip and Pin transaction, controlled by merchant
 * 30 - Secure transaction with cardholder certificate
 * 31 - Non-authenticated security transaction with SET merchant certificate
 * 32 - Non-authenticated security transaction without SET merchant certificate(eg SSL)
 * 33 - No additional information (considered as unsecured)
 * 35 - Unattended Chip and Pin transaction, controlled by cardholder
 */
enum ECommerceTerminalType: string {
    case Value_22 = '22';
    case Value_25 = '25';
    case Value_30 = '30';
    case Value_31 = '31';
    case Value_32 = '32';
    case Value_33 = '33';
    case Value_35 = '35';
}
