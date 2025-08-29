<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum Status: string {
    case SUCCESS = 'SUCCESS';
    case INVALID_REQUEST = 'INVALID_REQUEST';
    case CARD_DETAILS_REJECTED = 'CARD_DETAILS_REJECTED';
    case CANCELLED = 'CANCELLED';
    case LOGGED_OUT = 'LOGGED_OUT';
    case NOT_ATTEMPTED = 'NOT_ATTEMPTED';
    case ERROR = 'ERROR';
}
