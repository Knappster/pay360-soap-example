<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum TransactionStatus: string {
    case PENDING = 'PENDING';
    case PROCESSING = 'PROCESSING';
    case COMPLETE = 'COMPLETE';
    case DECLINED = 'DECLINED';
    case EXPIRED = 'EXPIRED';
    case ERROR = 'ERROR';
}
