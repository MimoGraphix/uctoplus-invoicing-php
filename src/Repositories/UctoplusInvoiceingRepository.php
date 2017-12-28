<?php
/**
 * Created by PhpStorm.
 * User: mariocechovic
 * Date: 28/12/2017
 * Time: 13:18
 */

namespace Uctoplus\API;

use Uctoplus\API\Models\Invoice;

class UctoplusInvoiceingRepository
{
    /**
     * Účto+ API URL
     */
    // const API_URL = 'https://api.uctoplus.sk/api/v1/invoiceing';
    const API_URL = 'http://localhost/laravel/uctujto/public/api/v1/invoiceing';
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
     * @var Models\Invoice
     */
    protected $invoice;

    /**
     * Constructor
     *
     * @param string $ico
     * @param string $apiKey
     */
    public function __construct( $ico = null, $apiKey = null )
    {
        $this->ico = $ico;
        $this->apiKey = $apiKey;
    }

    private function _generateURL( $url )
    {
        return UctoplusInvoiceingRepository::API_URL . "/" . $url;
    }

    public function getInvoice()
    {
        if( $this->invoice == null )
            $this->invoice = new Invoice();

        return $this->invoice;
    }

    public function saveInvoice()
    {
        // The data to send to the API
        $postData = array(
            'ico' => $this->ico,
            'apiKey' =>  $this->apiKey,
            'invoice' => $this->invoice->toArray(),
        );

        // Setup cURL
        $ch = curl_init($this->_generateURL( 'create-new-invoice' ));
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode( $postData )
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
            throw new \Exception( $responseData['message'] );
    }
}