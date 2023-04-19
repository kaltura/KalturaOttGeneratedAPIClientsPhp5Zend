<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_Purchase extends Kaltura_Client_Type_PurchaseBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPurchase';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->currency))
			$this->currency = (string)$xml->currency;
		if(!is_null($jsonObject) && isset($jsonObject->currency))
			$this->currency = (string)$jsonObject->currency;
		if(!is_null($xml) && count($xml->price))
			$this->price = (float)$xml->price;
		if(!is_null($jsonObject) && isset($jsonObject->price))
			$this->price = (float)$jsonObject->price;
		if(!is_null($xml) && count($xml->paymentMethodId))
			$this->paymentMethodId = (int)$xml->paymentMethodId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentMethodId))
			$this->paymentMethodId = (int)$jsonObject->paymentMethodId;
		if(!is_null($xml) && count($xml->paymentGatewayId))
			$this->paymentGatewayId = (int)$xml->paymentGatewayId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentGatewayId))
			$this->paymentGatewayId = (int)$jsonObject->paymentGatewayId;
		if(!is_null($xml) && count($xml->coupon))
			$this->coupon = (string)$xml->coupon;
		if(!is_null($jsonObject) && isset($jsonObject->coupon))
			$this->coupon = (string)$jsonObject->coupon;
	}
	/**
	 * Identifier for paying currency, according to ISO 4217
	 *
	 * @var string
	 */
	public $currency = null;

	/**
	 * Net sum to charge – as a one-time transaction. Price must match the previously provided price for the specified content.
	 *
	 * @var float
	 */
	public $price = null;

	/**
	 * Identifier for a pre-entered payment method. If not provided – the household’s default payment method is used
	 *
	 * @var int
	 */
	public $paymentMethodId = null;

	/**
	 * Identifier for a pre-associated payment gateway. If not provided – the account’s default payment gateway is used
	 *
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Coupon code
	 *
	 * @var string
	 */
	public $coupon = null;


}

