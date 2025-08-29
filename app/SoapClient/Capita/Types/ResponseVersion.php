<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum ResponseVersion: string {
    case latest = 'latest';
    case Value_131 = '13.1';
    case Value_132 = '13.2';
    case Value_140 = '14.0';
    case Value_150 = '15.0';
    case Value_151 = '15.1';
    case Value_152 = '15.2';
    case Value_153 = '15.3';
    case Value_154 = '15.4';
}
