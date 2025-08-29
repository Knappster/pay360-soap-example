<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

enum PaymentAuthorityType: string {
    case notArrangedPayment = 'notArrangedPayment';
    case initialRecurringPayment = 'initialRecurringPayment';
    case initialWalletPayment = 'initialWalletPayment';
    case initialInstalmentPayment = 'initialInstalmentPayment';
}
