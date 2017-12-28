<?php

namespace Uctoplus\API\Models;

/**
 * Class InvoiceItem
 * @package Uctoplus\API\Models
 */
class InvoiceItem extends ApiModel
{
    /**
     * @var string
     */
    private $name = null;

    /**
     * @var double
     */
    private $quantity = null;

    /**
     * @var double
     */
    private $price = null;

    /**
     * @var integer|null
     */
    private $tax_value = null;

    /**
     * @var string|null
     */
    private $description = null;

    /**
     * @var string
     */
    private $type = "ks";

    /**
     * @var integer|null
     */
    private $price_off = null;

    /**
     * @var integer|null
     */
    private $invoice_link_id = null;

    /**
     * InvoiceItem constructor.
     * @param $name
     * @param $quantity
     * @param $price
     * @param string $type
     * @param int $tax_value
     * @param null $description
     */
    public function __construct( $name, $quantity, $price, $type = "ks", $tax_value = 0, $description = null )
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->tax_value = $tax_value;
        $this->description = $description;
        $this->type = $type;
    }


}