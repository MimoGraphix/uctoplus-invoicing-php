<?php

return [
    "api_key" => 'app',
	"ico" => 'app',
	"default_language" => 'sk',
	"default_currency" => 'EUR',
	"default_logo_id" => null,
	"default_signature_id" => null,
	"default_counters" => [
		\Uctoplus\API\Models\Invoice::TYPE_INVOICE => null,
		\Uctoplus\API\Models\Invoice::TYPE_PROFORMA_INVOICE => null,
	],
	"default_payment_type_id" => null,
	"default_delivery_type_id" => null,
	"default_issuer" => [
		"issuer_name" => null,
		"issuer_web" => null,
		"issuer_email" => null,
		"issuer_phone" => null
	],
];