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
class Kaltura_Client_Type_UnifiedBillingCycle extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUnifiedBillingCycle';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->duration) && !empty($xml->duration))
			$this->duration = Kaltura_Client_ParseUtils::unmarshalObject($xml->duration, "KalturaDuration");
		if(!is_null($jsonObject) && isset($jsonObject->duration) && !empty($jsonObject->duration))
			$this->duration = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->duration, "KalturaDuration");
		if(!is_null($xml) && count($xml->paymentGatewayId))
			$this->paymentGatewayId = (int)$xml->paymentGatewayId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentGatewayId))
			$this->paymentGatewayId = (int)$jsonObject->paymentGatewayId;
		if(!is_null($xml) && count($xml->ignorePartialBilling))
		{
			if(!empty($xml->ignorePartialBilling) && ((int) $xml->ignorePartialBilling === 1 || strtolower((string)$xml->ignorePartialBilling) === 'true'))
				$this->ignorePartialBilling = true;
			else
				$this->ignorePartialBilling = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ignorePartialBilling))
		{
			if(!empty($jsonObject->ignorePartialBilling) && ((int) $jsonObject->ignorePartialBilling === 1 || strtolower((string)$jsonObject->ignorePartialBilling) === 'true'))
				$this->ignorePartialBilling = true;
			else
				$this->ignorePartialBilling = false;
		}
	}
	/**
	 * UnifiedBillingCycle name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * cycle duration
	 *
	 * @var Kaltura_Client_Type_Duration
	 */
	public $duration;

	/**
	 * Payment Gateway Id
	 *
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Define if partial billing shall be calculated or not
	 *
	 * @var bool
	 */
	public $ignorePartialBilling = null;


}

