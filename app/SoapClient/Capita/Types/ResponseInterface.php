<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum ResponseInterface: string {
    case scpWebService = 'scpWebService';
    case commonPaymentsFormPost = 'commonPaymentsFormPost';
    case xmlFormPost = 'xmlFormPost';
    case htmlFormPost = 'htmlFormPost';
    case planningFormPost = 'planningFormPost';
}
