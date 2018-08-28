
<?php
include_once '../src/Repositories/UctoplusInvoiceingRepository.php';
include_once '../src/Models/ApiModel.php';
include_once '../src/Models/Address.php';
include_once '../src/Models/Invoice.php';
include_once '../src/Models/InvoiceItem.php';
include_once '../src/Models/SmallCarbon.php';

use Uctoplus\API\UctoplusInvoiceingRepository;

$invoiceRepo = new UctoplusInvoiceingRepository( "12345678", "10c3d4b-c66bd81-2ffb525-38d1f81-1ad1" );

$invoice = $invoiceRepo->getInvoice();
$invoice->setInvoiceType( \Uctoplus\API\Models\Invoice::TYPE_PROFORMA_INVOICE );
$invoice->setReciever( new \Uctoplus\API\Models\Address( "uctoplus.sk, s.r.o", "Lošonec 94", "Lošonec", "12345" ) );
//$invoice->setCustomInvoiceNumber( "FA001" );
$invoice->generateInvoiceNumberByCounter( 17 );
$invoice->setPaymentType( 11 );
$invoice->setIssuer( 'Jozef Mrkvička', 'faktury@uctoplus.sk' );
$invoice->addItem( new \Uctoplus\API\Models\Item( "Ceruzka", "50", "1.5" ) );
$invoice->setPriceOff( 10 );

var_dump( $invoiceRepo->saveInvoice() );