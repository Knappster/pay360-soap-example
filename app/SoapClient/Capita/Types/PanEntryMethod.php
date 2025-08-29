<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * ECOM - E-Commerce (Default)
 * CNP - Card Not Present
 */
enum PanEntryMethod: string {
    case ECOM = 'ECOM';
    case CNP = 'CNP';
}
