<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * authorise (Default)
 * storeOnly
 */
enum PortalAction: string {
    case authorise = 'authorise';
    case storeOnly = 'storeOnly';
}
