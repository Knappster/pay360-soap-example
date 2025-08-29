<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * M - MasterCard Secure
 * V - Verified By Visa
 */
enum SecurityAttempted: string {
    case M = 'M';
    case V = 'V';
}
