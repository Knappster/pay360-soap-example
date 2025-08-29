<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * Capita Site
 * Integrator
 * Other Security Entity
 * Secure Bureau Service Site
 * Capita Portal
 */
enum SubjectType: string {
    case CapitaSite = 'CapitaSite';
    case Integrator = 'Integrator';
    case OtherSecurityEntity = 'OtherSecurityEntity';
    case SecureBureauServiceSite = 'SecureBureauServiceSite';
    case CapitaPortal = 'CapitaPortal';
}
