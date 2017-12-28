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

    /**
     * @var integer|null
     */
    private $_id = null;

    /**
     * @var string|null
     */
    private $invoice_number = null;

    /**
     * @var integer|null
     */
    private $invoice_counter_id = null;

    /**
     * @var Address
     */
    private $spolocnost;

    /**
     * @var Address|null
     */
    private $dodacia_adresa = null;

    /**
     * @var SmallCarbon|null
     */
    private $datum_vystavenia = null;

    /**
     * @var SmallCarbon|null
     */
    private $datum_dodania = null;

    /**
     * @var SmallCarbon|null
     */
    private $datum_splatnosti = null;

    /**
     * @var integer|null
     */
    private $variabilny_symbol = null;

    /**
     * @var integer|null
     */
    private $konstantny_symbol = null;

    /**
     * @var integer|null
     */
    private $specificky_symbol = null;

    /**
     * @var string|null
     */
    private $popis = null;

    /**
     * @var string|null
     */
    private $invoice_note_1 = null;

    /**
     * @var string|null
     */
    private $invoice_note_2 = null;

    /**
     * @var string|null
     */
    private $invoice_note_3 = null;

    /**
     * @var integer
     */
    private $forma_uhrady_id = null;

    /**
     * @var integer|null
     */
    private $sposob_dodania_id = null;

    /**
     * @var string|null
     */
    private $language = null;

    /**
     * @var integer|null
     */
    private $cislo_objednavky = null;

    /**
     * @var integer|null
     */
    private $min_payment_limit = null;

    /**
     * @var integer
     */
    private $invoice_type_id = null;

    /**
     * @var integer|null
     */
    private $logo_version_id = null;

    /**
     * @var integer|null
     */
    private $invoice_template_id = null;

    /**
     * @var integer|null
     */
    private $signature_version_id = null;
    /**
     * @var string|null
     */
    private $currency = null;

    /**
     * @var string|null
     */
    private $issuer_name = null;

    /**
     * @var string|null
     */
    private $issuer_phone = null;

    /**
     * @var string|null
     */
    private $issuer_web = null;

    /**
     * @var string|null
     */
    private $issuer_email = null;

    /**
     * @var integer
     */
    private $zlava = 0;

    /**
     * @var bool
     */
    private $flag_prenesenie_dph = false;

    /**
     * @var bool
     */
    private $flag_zaplatene = false;

    /**
     * @var integer|null
     */
    private $zaplatena_suma = null;

    /**
     * @var SmallCarbon|null
     */
    private $zaplatena_datum = null;

    /**
     * @var array
     */
    private $items = array();

    /**
     * @var string
     */
    private $_file_url = null;

    /**
     * Invoice constructor.
     *
     * @param int $invoice_type_id
     * @param null|string $popis
     * @param null|string $language
     * @param null|string $currency
     */
    public function __construct( $invoice_type_id = Invoice::TYPE_INVOICE, $popis = null, $language = null, $currency = null )
    {
        $this->invoice_type_id = $invoice_type_id;
        $this->popis = $popis;
        $this->language = $language;
        $this->currency = $currency;

        $this->datum_vystavenia = new SmallCarbon();
        $this->datum_splatnosti = ( new SmallCarbon() )->addDays(14);

        if( $invoice_type_id == Invoice::TYPE_INVOICE )
        {
            $this->datum_dodania = new SmallCarbon();
        }
    }

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
     * @param SmallCarbon|integer|string $datum_vystavenia
     * @param SmallCarbon|integer|string $datum_splatnosti
     * @param SmallCarbon|integer|string|null $datum_dodania
     */
    public function setDates( $datum_vystavenia, $datum_splatnosti, $datum_dodania = null )
    {
        $this->datum_vystavenia = new SmallCarbon( $datum_vystavenia );
        $this->datum_splatnosti = new SmallCarbon( $datum_splatnosti );

        if( $datum_dodania != null )
            $this->datum_dodania = new SmallCarbon( $datum_dodania );
    }

    /**
     * @param InvoiceItem $item
     */
    public function addItem( InvoiceItem $item )
    {
        $this->items[] = $item;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
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
     * @param double $value
     * @param SmallCarbon|integer|string $date
     */
    public function setAsPayed( $value = null, $date = null )
    {
        $this->flag_zaplatene = true;
        $this->zaplatena_suma = $value;
        $this->zaplatena_datum = new SmallCarbon( $date );
    }

    /**
     * @param integer $counterId
     */
    public function generateInvoiceNumberByCounter( $counterId )
    {
        $this->invoice_number = null;
        $this->invoice_counter_id = $counterId;
    }

    /**
     * @param string $invoice_number
     */
    public function setCustomInvoiceNumber( $invoiceNumber )
    {
        $this->invoice_number = $invoiceNumber;
        $this->invoice_counter_id = null;
    }

    /**
     * @param integer $paymentTypeId
     */
    public function setPaymentType( $paymentTypeId )
    {
        $this->forma_uhrady_id = $paymentTypeId;
    }

    /**
     * @param integer $deliveryTypeId
     * @param Address|null $deliveryAddress
     */
    public function setDeliveryType( $deliveryTypeId, Address $deliveryAddress = null )
    {
        $this->sposob_dodania_id = $deliveryTypeId;
        $this->dodacia_adresa = $deliveryAddress;
    }

    /**
     * @param Address $reciever
     * @param bool $vatTransfer
     */
    public function setReciever( Address $reciever, $vatTransfer = false )
    {
        $this->spolocnost = $reciever;
        $this->flag_prenesenie_dph = $vatTransfer;
    }

    /**
     * @param integer $id
     */
    public function setLogo( $id )
    {
        $this->logo_version_id = $id;
    }

    /**
     * @param integer $id
     */
    public function setSignature( $id )
    {
        $this->signature_version_id = $id;
    }

    /**
     * @param integer $symbol
     */
    public function setVariabilnySymbol( $symbol )
    {
        $this->variabilny_symbol = $symbol;
    }

    /**
     * @param integer $symbol
     */
    public function setSpecifickySymbol( $symbol )
    {
        $this->specificky_symbol = $symbol;
    }

    /**
     * @param integer $symbol
     */
    public function setKonstantnySymbol( $symbol )
    {
        $this->konstantny_symbol = $symbol;
    }

    /**
     * @param $text
     * @param $position
     */
    public function setNote( $text, $position = 3 )
    {
        $note_id = "invoice_note_" . $position;

        $this->$note_id = $text;
    }

    /**
     * @return int|null
     */
    public function setPriceOff( $price_off = 0 )
    {
        $this->zlava = $price_off;
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

}