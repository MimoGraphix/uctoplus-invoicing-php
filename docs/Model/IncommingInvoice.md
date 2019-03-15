# IncommingInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**invoice_number** | **string** |  | 
**invoice_type** | **string** | * &#x60;TYPE_INVOICE&#x60; - Invocie * &#x60;TYPE_PROFORMA_INVOICE&#x60; - Proforma Invoice * &#x60;TYPE_VAT_PROOF&#x60; - VAT Proof | 
**description** | **string** |  | [optional] 
**sender** | **object** |  | 
**variable_symbol** | **string** |  | [optional] 
**konstantny_symbol** | **string** |  | [optional] 
**specificky_symbol** | **string** |  | [optional] 
**date_issue** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | 
**date_delivery** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**date_due** | [**\DateTime**](\DateTime.md) | Date in format parsable by PHP DateTime Class (eg.: yyyy-mm-dd) | [optional] 
**payment** | **object** |  | [optional] 
**price_without_vat** | **float** |  | 
**price_with_vat** | **float** |  | 
**currency** | **string** | Currency of invoice, format corresponds to [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) | [default to 'EUR']
**file** | [**\MimoGraphix\Uctoplus\Models\File**](File.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


