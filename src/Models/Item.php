<?php

namespace Uctoplus\API\Models;

/**
 * Class Item
 *
 * @author MimoGraphix <mimographix@gmail.com>
 * @copyright EpicFail | Studio
 * @package Uctoplus\API\Models
 */
class Item extends ApiModel
{

	const ATTR_NAME = "name";
	const ATTR_DESCRIPTION = "description";
	const ATTR_QUANTITY = "quantity";
	const ATTR_PRICE_WITHOUT_TAX = "price_without_tax";
	const ATTR_PRICE_WITH_TAX = "price_with_tax";
	const ATTR_TAX_VALUE = "tax_value";
	const ATTR_TYPE = "type";
	const ATTR_DISCOUNT = "price_off";

}