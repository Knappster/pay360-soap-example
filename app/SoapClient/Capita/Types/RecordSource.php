<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * 0 - Holding
 * 1 - History
 */
enum RecordSource: string {
    case Value_0 = '0';
    case Value_1 = '1';
}
