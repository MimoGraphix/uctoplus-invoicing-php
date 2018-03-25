<?php
/**
 * Created by PhpStorm.
 * User: mariocechovic
 * Date: 28/12/2017
 * Time: 13:18
 */

namespace Uctoplus\API;

use Uctoplus\API\Models\Address;
use Uctoplus\API\Models\Invoice;
use Uctoplus\API\Models\Item;
use Uctoplus\API\Support\Arrayable;
use Uctoplus\API\Support\Collection;

class UctoplusInvoiceingRepository
{
    /**
     * Účto+ API URL
     */
    // const API_URL = 'https://www.uctoplus.sk/api/v1/invoiceing';
    const API_URL = 'http://localhost/uctujto/public/api/v1/invoiceing';

    /**
     * IČO
     *
     * @var string
     */
    protected $ico;

    /**
     * API key
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Invoice to generate
     *
     * @var Invoice
     */
    protected $invoice;
    /**
     * Invoice to generate
     *
     * @var Address
     */
    protected $client;
    /**
     * Invoice to generate
     *
     * @var Collection
     */
    protected $invoiceItems;

    /**
     * Constructor
     *
     * @param string $ico
     * @param string $apiKey
     */
    public function __construct( $ico = null, $apiKey = null )
    {
		$this->invoiceItems = new Collection();

		if( $apiKey != null && $ico != null )
		{
			$this->apiKey = $apiKey;
			$this->ico = $ico;
			return;
		}

		if(  $apiKey == null && $ico == null  && function_exists( 'config' ) )
		{
			$this->apiKey = config( 'uctoplus.api_key' );
			$this->ico = config( 'uctoplus.ico' );
			return ;
		}

		throw new \Exception( 'Please set APIKey and Company ICO' );
    }

    private function _generateURL( $url )
    {
        return UctoplusInvoiceingRepository::API_URL . "/" . $url;
    }

	public function setInvoice( $values )
	{
		if( is_array( $values ) )
			$this->invoice = new Invoice( $values );
		elseif( $values instanceof Invoice )
			$this->invoice = $values;
		else
			throw new \Exception( '$values must be array or instance of Invoice' );
	}

	public function addItem( $values )
	{
		if( is_array( $values ) )
			$this->invoiceItems[] = new Item( $values );
		elseif( $values instanceof Item )
			$this->invoiceItems[] = $values;
		else
			throw new \Exception( '$values must be array or instance of Item' );
	}

	public function setClient( $values )
	{
		if( is_array( $values ) )
			$this->client = new Address( $values );
		elseif( $values instanceof Address )
			$this->client = $values;
		else
			throw new \Exception( '$values must be array or instance of Client' );
	}

    public function save()
    {
        // Setup cURL
        $ch = curl_init($this->_generateURL( 'create-new-invoice' ));
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => $this->toJson()
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE)
            throw new \Exception( curl_error( $ch ) );

        // Decode the response
        $responseData = json_decode($response, TRUE);

        if( $responseData == false )
        {
            echo $response;
            throw new \Exception( "No JSON Data!" );
        }

        if( $responseData['status'] == true )
        {
            $this->invoice->handleResponseData( $responseData['model'] );
            return $this->invoice;
        }

        if( isset( $responseData['errors'] ) )
        {
            $key = array_keys( $responseData['errors'] )[0];
            $value = $responseData['errors'][$key][0];
            throw new \Exception( $value );
        }
        else
            throw new \Exception( "ERROR: " . $responseData['message'] );
    }

	public function toJson()
	{
		return json_encode( $this->toArray() );
	}

	public function toArray()
	{
		return array(
			'ico' => $this->ico,
            'apiKey' =>  $this->apiKey,
			"invoice" => $this->invoice instanceof Arrayable ? $this->invoice->toArray() : $this->invoice,
			"client" => $this->client instanceof Arrayable ? $this->client->toArray() : $this->client,
			"items" => $this->invoiceItems->toArray(),
		);
	}

}