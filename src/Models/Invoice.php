<?php

namespace Uctoplus\API\Models;

/**
 * Class Invoice
 * @package Uctoplus\API\Models
 */
class Invoice extends ApiModel
{
    const TYPE_INVOICE = 1;
    const TYPE_PROFORMA_INVOICE = 2;
    const TYPE_VAT_PROOF = 6;

    const ATTR_INVOICE_NUMBER = "invoice_number";
    const ATTR_INVOICE_NUMBER_COUNTER = "invoice_counter_id";
    const ATTR_INVOICE_TYPE = "invoice_type_id";

    const ATTR_DESCRIPTION = "popis";

    const ATTR_DATE_ISSUED = "datum_vystavenia";
    const ATTR_DATE_DELIVERY = "datum_dodania";
    const ATTR_DATE_DUE = "datum_splatnosti";

    const ATTR_SYMBOL_VARIABLE = "variabilny_symbol";
    const ATTR_SYMBOL_SPECIFIC = "specificky_symbol";
    const ATTR_SYMBOL_CONSTANT = "konstantny_symbol";

    const ATTR_NOTE_1 = "invoice_note_1";
    const ATTR_NOTE_2 = "invoice_note_2";
//    const ATTR_NOTE_3 = "invoice_note_3";

    const ATTR_LOGO_ID = "logo_version_id";
    const ATTR_SIGNATURE_ID = "signature_version_id";
    const ATTR_CURRENCY_CODE = "currency";
    const ATTR_PAYMENT_TYPE_ID = "forma_uhrady_id";
    const ATTR_DELIVERY_TYPE_ID = "sposob_dodania_id";
    const ATTR_INTERNAL_NUMBER = "cislo_objednavky";

    const ATTR_LANGUAGE_CODE = "language";

    const ATTR_ISSUER_NAME = "issuer_name";
    const ATTR_ISSUER_PHONE = "issuer_phone";
    const ATTR_ISSUER_WEB = "issuer_web";
    const ATTR_ISSUER_EMAIL = "issuer_email";

    const ATTR_PRICE_OFF_VALUE = "zlava";
    const ATTR_FLAG_TRANSFER_VAT = "flag_prenesenie_dph";

    const ATTR_ALREADY_PAYED = "flag_zaplatene";
    const ATTR_PAYED_PRICE = "zaplatena_suma";
    const ATTR_PAYED_DATE = "zaplatena_datum";

    /**
     * @var integer|null
     */
    private $_id = null;

    /**
     * @var string
     */
    private $_file_url = null;

    /**
     * @param integer $invoice_type_id
     */
    public function setInvoiceType( $invoice_type_id )
    {
        $this->invoice_type_id = $invoice_type_id;

        if( $invoice_type_id != Invoice::TYPE_INVOICE )
        {
            $this->datum_dodania = null;
        }
    }

    /**
     * @param $name
     * @param $email
     * @param string $phone
     * @param string $web
     */
    public function setIssuer( $name, $email=null, $phone=null, $web=null )
    {
        $this->issuer_email = $email;
        $this->issuer_name = $name;
        $this->issuer_phone = $phone;
        $this->issuer_web = $web;
    }

    /**
     * @param integer $counterId
     */
    public function generateInvoiceNumberByCounter( $counterId )
    {
        $this->invoice_number = null;
        $this->invoice_counter_id = $counterId;
    }

    public function handleResponseData($responseData)
    {
        $this->_id = $responseData['id'];
        $this->invoice_number = $responseData['invoice_number'];
        $this->variabilny_symbol = $responseData['variabilny_symbol'];
        $this->_file_url = $responseData['file_download_url'];
    }

    public function getFileUrl()
    {
        return $this->_file_url;
    }

    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    public function getVariabilnySybmol()
    {
        return $this->variabilny_symbol;
    }

    public function toArray()
	{
		$array = [
			Invoice::ATTR_INVOICE_TYPE => Invoice::TYPE_INVOICE,
			Invoice::ATTR_LANGUAGE_CODE => config( 'uctoplus.default_language' ),
			Invoice::ATTR_CURRENCY_CODE => config( 'uctoplus.default_currency' ),
			Invoice::ATTR_LOGO_ID => config( 'uctoplus.default_logo_id' ),
			Invoice::ATTR_SIGNATURE_ID => config( 'uctoplus.default_signature_id' ),
			Invoice::ATTR_PAYMENT_TYPE_ID => config( 'uctoplus.default_payment_type_id' ),
			Invoice::ATTR_DELIVERY_TYPE_ID => config( 'uctoplus.default_delivery_type_id' ),
			Invoice::ATTR_INVOICE_NUMBER_COUNTER => config( 'uctoplus.default_counters.' . ( $this->invoice_type_id == null ? Invoice::TYPE_INVOICE : $this->invoice_type_id ) ),
			Invoice::ATTR_ISSUER_NAME => config( 'uctoplus.default_issuer.issuer_name' ),
			Invoice::ATTR_ISSUER_PHONE => config( 'uctoplus.default_issuer.issuer_phone' ),
			Invoice::ATTR_ISSUER_WEB => config( 'uctoplus.default_issuer.issuer_web' ),
			Invoice::ATTR_ISSUER_EMAIL => config( 'uctoplus.default_issuer.issuer_email' ),
			Invoice::ATTR_FLAG_TRANSFER_VAT => 0,
		];
		return array_merge( $array, parent::toArray() ); // TODO: Change the autogenerated stub
	}
}