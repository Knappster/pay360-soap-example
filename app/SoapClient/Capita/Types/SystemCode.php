<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

/**
 * ACP - AXIS Common Payments
 * ACR - AXIS Counter Receipting
 * ADD - AXIS Direct Debits
 * AIM - AXIS Income Management
 * AIP - AXIS Internet Payments
 * AOS - AXIS On-line Services
 * API - AXIS Payments Interface
 * APN - AXIS PAYe.NET
 * APP - AXIS Payment Portal
 * ARP - AXIS Remittance
 * ASR - AXIS Speech Recognition
 * ATP - AXIS Telephone Payments
 * ATT - AXIS Touch Tone
 * DIR - Direct Authorisations from Third Parties
 * EXT - EXTERNAL SYSTEM
 * HPAY - AXIS Health PAYe.NET
 * MAPN - Managed AXIS PAYe.NET
 * MHPAY - Managed AXIS Health PAYe.NET
 * MOTO - AXIS Mail Order Telephone Order
 * PCR - Perception
 * SBS - Secure Bureau Service
 * SCM - AXIS SafeCom
 * SCP - AXIS Stored Card Portal
 * SGW - AXIS Smart Gateway
 * SMS - AXIS Short Message Service
 * THY - Thyron
 * TVWAP - AXIS DigiTV
 */
enum SystemCode: string {
    case ACP = 'ACP';
    case ACR = 'ACR';
    case ADD = 'ADD';
    case AIM = 'AIM';
    case AIP = 'AIP';
    case AOS = 'AOS';
    case API = 'API';
    case APN = 'APN';
    case APP = 'APP';
    case ARP = 'ARP';
    case ASR = 'ASR';
    case ATP = 'ATP';
    case ATT = 'ATT';
    case DIR = 'DIR';
    case EXT = 'EXT';
    case HPAY = 'HPAY';
    case MAPN = 'MAPN';
    case MHPAY = 'MHPAY';
    case MOTO = 'MOTO';
    case PCR = 'PCR';
    case SCM = 'SCM';
    case SCP = 'SCP';
    case SGW = 'SGW';
    case SMS = 'SMS';
    case THY = 'THY';
    case TVWAP = 'TVWAP';
}
