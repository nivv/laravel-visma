<?php

declare(strict_types=1);

namespace Webparking\LaravelVisma\Entities;

use Illuminate\Support\Collection;

/**
 * Class Invoice
 *
 * @property string $Id
 * @property double $Amount - two decimals
 * @property string $CustomerId
 * @property string $CurrencyCode - eg. SEK
 * @property string $CreatedUtc
 * @property double $VatAmount - two decimals
 * @property double $RoundingsAmount - two decimals
 * @property double $DeliveredAmount - two decimals
 * @property double $DeliveredVatAmount - two decimals
 * @property double $DeliveredRoundingsAmount - two decimals
 * @property string $DeliveryCustomerName
 * @property string $DeliveryAddress1
 * @property string $DeliveryAddress2
 * @property string $DeliveryPostalCode
 * @property string $DeliveryCity
 * @property string $DeliveryCountryCode
 * @property string $YourReference
 * @property string $OurReference
 * @property string $InvoiceAddress1
 * @property string $InvoiceAddress2
 * @property string $InvoiceCity
 * @property string $InvoiceCountryCode
 * @property string $InvoiceCustomerName
 * @property string $InvoicePostalCode
 * @property string $DeliveryMethodName
 * @property string $DeliveryMethodCode
 * @property string $DeliveryTermName
 * @property string $DeliveryTermCode
 * @property bool $EuThirdParty
 * @property bool $CustomerIsPrivatePerson
 * @property string $InvoiceDate - format YYYY-MM-DD
 * @property string $DueDate - format YYYY-MM-DD
 * @property integer $Status - 1 = Draft, 2 = Ongoing, 3 = Shipped, 4 = Invoiced = ['1', '2', '3', '4'],
 * @property integer $Number
 * @property string $ModifiedUtc
 * @property string $DeliveryDate
 * @property number $HouseWorkAmount
 * @property bool $HouseWorkAutomaticDistribution
 * @property string $HouseWorkCorporateIdentityNumber
 * @property string $HouseWorkPropertyName
 * @property InvoiceRow[] $Rows
 * @property string $ShippedDateTime
 * @property integer $RotReducedInvoicingType - 0 = None, 1 = Rot, 2 = Rut = ['0', '1', '2'],
 * @property double $RotReducedInvoicingAmount
 * @property double $RotReducedInvoicingPercent
 * @property string $RotReducedInvoicingPropertyName
 * @property string $RotReducedInvoicingOrgNumber
 * @property integer $RotPropertyType - 1 = Apartment, 2 = Property
 * @property SalesDocumentRotRutReductionPerson[] $Persons
 * @property bool $RotReducedInvoicingAutomaticDistribution
 * @property string $ElectronicReference
 * @property string $ElectronicAddress
 * @property string $EdiServiceDelivererId
 * @property string $BuyersOrderReference
 * @property bool $ReverseChargeOnConstructionServices
 * @property bool $UsesGreenTechnology - Set to true if this order benefits from deduction on Green Technology. If set to true the order must have RotReducedInvoicingType set to normal and contain at least one row with applicable deduction.
 * @property bool $IsCreditInvoice
 * @property number $CurrencyRate
 *
 * @package Webparking\LaravelVisma\Entities
 */
class Invoice extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/invoices';

    public function index(): collection
    {
        return $this->baseIndex();
    }

    public function save()
    {
        $queryParams = [];
        if(isset($this->Id)) {
            $originatingEndpoint  = $this->endpoint;
            $this->endpoint .= '/' . $this->Id;
            $results = $this->basePut($this, $queryParams);
            $this->endpoint = $originatingEndpoint;
            return $results;
        }
        return $this->basePost($this, $queryParams);
    }

    public function get(string $invoiceId): Invoice
    {
        $originatingEndpoint  = $this->endpoint;
        $this->endpoint .= '/' . $invoiceId;
        $invoiceData = $this->baseGet();
        $this->endpoint = $originatingEndpoint;
        foreach($invoiceData as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }
}
