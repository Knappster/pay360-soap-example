<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum RequestType: string {
    case payOnly = 'payOnly';
    case authoriseOnly = 'authoriseOnly';
    case authoriseAndStore = 'authoriseAndStore';
    case authoriseAndAutoStore = 'authoriseAndAutoStore';
    case storeOnly = 'storeOnly';
    case payAndStore = 'payAndStore';
    case payAndAutoStore = 'payAndAutoStore';
}
