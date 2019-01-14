
<?php
include_once '../src/Repositories/UctoplusInvoicingRepository.php';
include_once '../src/Models/ApiModel.php';
include_once '../src/Models/Address.php';
include_once '../src/Models/Invoice.php';
include_once '../src/Models/Item.php';

use Uctoplus\API\UctoplusInvoicingRepository;

try
{
	$invoiceRepo = new UctoplusInvoicingRepository( UctoplusInvoicingRepository::API_URL, "12345678", "10c3d4b-c66bd81-2ffb525-38d1f81-1ad1" );

	$invoice = new \Uctoplus\API\Models\Invoice();
	$invoice->setInvoiceType( \Uctoplus\API\Models\Invoice::TYPE_PROFORMA_INVOICE );
	$invoice->setIssuer( 'Jozef Mrkvička', 'faktury@uctoplus.sk' );

	$invoiceRepo->setInvoice( $invoice );

	$invoiceRepo->setClient( [
		\Uctoplus\API\Models\Address::ATTR_NAME => "František Taraba",
		\Uctoplus\API\Models\Address::ATTR_STREET => "Dlhá 56",
		\Uctoplus\API\Models\Address::ATTR_ZIP => "90210",
		\Uctoplus\API\Models\Address::ATTR_CITY => "Bratislava",
		\Uctoplus\API\Models\Address::ATTR_COUNTRY_CODE => "SK",
	] );

	$invoiceRepo->addItem([
		\Uctoplus\API\Models\Item::ATTR_NAME => "Premium balík",
		\Uctoplus\API\Models\Item::ATTR_PRICE_WITH_TAX => "10",
		\Uctoplus\API\Models\Item::ATTR_TAX_VALUE => "20",
		\Uctoplus\API\Models\Item::ATTR_TYPE => "ks",
		\Uctoplus\API\Models\Item::ATTR_QUANTITY => "1",
	]);

	var_dump( $invoiceRepo->save() );

}
catch ( Exception $e )
{
	var_dump( $e );
}