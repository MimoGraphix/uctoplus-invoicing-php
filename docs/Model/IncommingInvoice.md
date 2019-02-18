# IncommingInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** |  | 
**invoice_type** | [**\MimoGraphix\Uctoplus\Models\InvoiceType**](InvoiceType.md) |  | 
**description** | **string** |  | [optional] [default to 'null']
**sender** | [**\MimoGraphix\Uctoplus\Models\Address**](Address.md) |  | 
**variable_symbol** | **string** |  | [optional] [default to 'null']
**konstantny_symbol** | **string** |  | [optional] [default to 'null']
**specificky_symbol** | **string** |  | [optional] [default to 'null']
**date_issue** | **string** | Date in format parsable by PHP DateTime | 
**date_delivery** | **string** | Date in format parsable by PHP DateTime | [optional] [default to 'null']
**date_due** | **string** | Date in format parsable by PHP DateTime | [optional] [default to 'null']
**payment_flag** | **bool** |  | [optional] [default to false]
**payment_value** | **float** |  | [optional] 
**payment_date** | **string** | Date in format parsable by PHP DateTime | [optional] [default to 'null']
**price_without_vat** | **float** |  | 
**price_with_vat** | **float** |  | 
**currency** | **string** | 3 letter code of Currency eg. EUR, GBP, CZK, ... | [default to 'EUR']
**file** | [**\MimoGraphix\Uctoplus\Models\File**](File.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


