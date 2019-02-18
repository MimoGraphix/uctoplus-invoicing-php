# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** |  | [optional] [default to 'null']
**invoice_type** | [**\MimoGraphix\Uctoplus\Models\InvoiceType**](InvoiceType.md) |  | 
**description** | **string** |  | [optional] [default to 'null']
**reciever** | [**\MimoGraphix\Uctoplus\Models\Address**](Address.md) |  | 
**delivery_address** | [**\MimoGraphix\Uctoplus\Models\Address**](Address.md) |  | [optional] 
**variable_symbol** | **string** |  | [optional] [default to 'null']
**konstantny_symbol** | **string** |  | [optional] [default to 'null']
**specificky_symbol** | **string** |  | [optional] [default to 'null']
**date_issue** | **string** | Date in format parsable by PHP DateTime | [optional] 
**date_delivery** | **string** | Date in format parsable by PHP DateTime | [optional] [default to 'null']
**date_due** | **string** | Date in format parsable by PHP DateTime | [default to 'null']
**discount** | **float** |  | [optional] [default to 0]
**currency** | **string** | 3 letter code of Currency eg. EUR, GBP, CZK, ... | [default to 'EUR']
**payment_flag** | **bool** |  | [optional] [default to false]
**payment_value** | **float** |  | [optional] 
**payment_date** | **string** | Date in format parsable by PHP DateTime | [optional] [default to 'null']
**issuer** | [**\MimoGraphix\Uctoplus\Models\Issuer**](Issuer.md) |  | [optional] 
**language** | [**\MimoGraphix\Uctoplus\Models\Language**](Language.md) |  | [optional] 
**note1** | **string** |  | [optional] [default to 'null']
**note2** | **string** |  | [optional] [default to 'null']
**note3** | **string** |  | [optional] [default to 'null']
**prenesenie_dph** | **bool** |  | [optional] [default to false]
**logo_version** | **int** | ID from http://moje.uctoplus.sk/ | [optional] 
**signature_version** | **int** | ID from http://moje.uctoplus.sk/ | [optional] 
**delivery_type** | **int** | ID from http://moje.uctoplus.sk/ | [optional] 
**payment_type** | **int** | ID from http://moje.uctoplus.sk/ | 
**currency2_rate** | **float** |  | [optional] 
**currency2** | **string** | 3 letter code of Currency eg. EUR, GBP, CZK, ... | [optional] [default to 'EUR']
**invoice_number_counter** | **int** | ID from http://moje.uctoplus.sk/ | 
**invoice_template** | **int** | ID from http://moje.uctoplus.sk/ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


