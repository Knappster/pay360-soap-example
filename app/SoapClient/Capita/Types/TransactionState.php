<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum TransactionState: string {
    case IN_PROGRESS = 'IN_PROGRESS';
    case COMPLETE = 'COMPLETE';
    case INVALID_REFERENCE = 'INVALID_REFERENCE';
}
