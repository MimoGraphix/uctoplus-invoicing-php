<?php

namespace Uctoplus\API\Models;

/**
 * Class Address
 * @package Uctoplus\API\Models
 */
class Address extends ApiModel
{
    /**
     * @var string
     */
    private $nazov = "";

    /**
     * @var string
     */
    private $ulica = "";

    /**
     * @var string
     */
    private $mesto = "";

    /**
     * @var string
     */
    private $psc = "";

    /**
     * @var string
     */
    private $stat_code2 = "";

    /**
     * @var string|null
     */
    private $ico = null;

    /**
     * @var string|null
     */
    private $dic = null;

    /**
     * @var string|null
     */
    private $ic_dph = null;

    /**
     * Address constructor.
     * @param string $name
     * @param string $street
     * @param string $city
     * @param string $zip
     * @param string $country_code2
     */
    public function __construct( $name, $street, $city, $zip, $country_code2 = "SK", $ico = null, $dic = null, $ic_dph = null )
    {
        $this->nazov = $name;
        $this->ulica = $street;
        $this->mesto = $city;
        $this->psc = $zip;
        $this->stat_code2 = $country_code2;

        $this->ico = $ico;
        $this->dic = $dic;
        $this->ic_dph = $ic_dph;
    }

    /**
     * @param null|string $ico
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
    }

    /**
     * @param null|string $dic
     */
    public function setDic($dic)
    {
        $this->dic = $dic;
    }

    /**
     * @param null|string $ic_dph
     */
    public function setIcDph($ic_dph)
    {
        $this->ic_dph = $ic_dph;
    }

}