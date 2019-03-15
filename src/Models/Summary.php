<?php
/**
 * Summary
 *
 * PHP version 5
 *
 * @category Class
 * @package  MimoGraphix\Uctoplus
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Moje Účto+ API
 *
 * Moje Účto+ API is avaliable in test mode at `https://dev.uctoplus.eu/api/v2`.  Production enviroment is located at `https://moje.uctoplus.sk/api/v2`.  All comunication with API is encoded in UTF-8. This REST API is based on Open API v3 standard.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: helpdesk@uctoplus.sk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MimoGraphix\Uctoplus\Models;

use \ArrayAccess;
use \MimoGraphix\Uctoplus\ObjectSerializer;

/**
 * Summary Class Doc Comment
 *
 * @category Class
 * @package  MimoGraphix\Uctoplus
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Summary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_without_tax' => 'float',
        'total_with_tax' => 'float',
        'total_tax' => 'float',
        'payed' => 'float',
        'total_to_pay' => 'float',
        'taxes' => '\MimoGraphix\Uctoplus\Models\SummaryTaxes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total_without_tax' => null,
        'total_with_tax' => null,
        'total_tax' => null,
        'payed' => null,
        'total_to_pay' => null,
        'taxes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_without_tax' => 'totalWithoutTax',
        'total_with_tax' => 'totalWithTax',
        'total_tax' => 'totalTax',
        'payed' => 'payed',
        'total_to_pay' => 'totalToPay',
        'taxes' => 'taxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_without_tax' => 'setTotalWithoutTax',
        'total_with_tax' => 'setTotalWithTax',
        'total_tax' => 'setTotalTax',
        'payed' => 'setPayed',
        'total_to_pay' => 'setTotalToPay',
        'taxes' => 'setTaxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_without_tax' => 'getTotalWithoutTax',
        'total_with_tax' => 'getTotalWithTax',
        'total_tax' => 'getTotalTax',
        'payed' => 'getPayed',
        'total_to_pay' => 'getTotalToPay',
        'taxes' => 'getTaxes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['total_without_tax'] = isset($data['total_without_tax']) ? $data['total_without_tax'] : null;
        $this->container['total_with_tax'] = isset($data['total_with_tax']) ? $data['total_with_tax'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['payed'] = isset($data['payed']) ? $data['payed'] : null;
        $this->container['total_to_pay'] = isset($data['total_to_pay']) ? $data['total_to_pay'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets total_without_tax
     *
     * @return float|null
     */
    public function getTotalWithoutTax()
    {
        return $this->container['total_without_tax'];
    }

    /**
     * Sets total_without_tax
     *
     * @param float|null $total_without_tax total_without_tax
     *
     * @return $this
     */
    public function setTotalWithoutTax($total_without_tax)
    {
        $this->container['total_without_tax'] = $total_without_tax;

        return $this;
    }

    /**
     * Gets total_with_tax
     *
     * @return float|null
     */
    public function getTotalWithTax()
    {
        return $this->container['total_with_tax'];
    }

    /**
     * Sets total_with_tax
     *
     * @param float|null $total_with_tax total_with_tax
     *
     * @return $this
     */
    public function setTotalWithTax($total_with_tax)
    {
        $this->container['total_with_tax'] = $total_with_tax;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return float|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float|null $total_tax total_tax
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets payed
     *
     * @return float|null
     */
    public function getPayed()
    {
        return $this->container['payed'];
    }

    /**
     * Sets payed
     *
     * @param float|null $payed payed
     *
     * @return $this
     */
    public function setPayed($payed)
    {
        $this->container['payed'] = $payed;

        return $this;
    }

    /**
     * Gets total_to_pay
     *
     * @return float|null
     */
    public function getTotalToPay()
    {
        return $this->container['total_to_pay'];
    }

    /**
     * Sets total_to_pay
     *
     * @param float|null $total_to_pay total_to_pay
     *
     * @return $this
     */
    public function setTotalToPay($total_to_pay)
    {
        $this->container['total_to_pay'] = $total_to_pay;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \MimoGraphix\Uctoplus\Models\SummaryTaxes[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \MimoGraphix\Uctoplus\Models\SummaryTaxes[]|null $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


