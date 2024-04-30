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
class Kaltura_Client_Type_DiscountDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDiscountDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->multiCurrencyDiscount))
		{
			if(empty($xml->multiCurrencyDiscount))
				$this->multiCurrencyDiscount = array();
			else
				$this->multiCurrencyDiscount = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiCurrencyDiscount, "KalturaDiscount");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiCurrencyDiscount))
		{
			if(empty($jsonObject->multiCurrencyDiscount))
				$this->multiCurrencyDiscount = array();
			else
				$this->multiCurrencyDiscount = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multiCurrencyDiscount, "KalturaDiscount");
		}
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->whenAlgoTimes))
			$this->whenAlgoTimes = (int)$xml->whenAlgoTimes;
		if(!is_null($jsonObject) && isset($jsonObject->whenAlgoTimes))
			$this->whenAlgoTimes = (int)$jsonObject->whenAlgoTimes;
		if(!is_null($xml) && count($xml->whenAlgoType))
			$this->whenAlgoType = (int)$xml->whenAlgoType;
		if(!is_null($jsonObject) && isset($jsonObject->whenAlgoType))
			$this->whenAlgoType = (int)$jsonObject->whenAlgoType;
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
	}
	/**
	 * The discount ID
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The price code name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Multi currency discounts for all countries and currencies
	 *
	 * @var array of KalturaDiscount
	 */
	public $multiCurrencyDiscount;

	/**
	 * Start date represented as epoch
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * End date represented as epoch
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * End date represented as epoch
	 *
	 * @var int
	 */
	public $whenAlgoTimes = null;

	/**
	 * End date represented as epoch
	 *
	 * @var int
	 */
	public $whenAlgoType = null;

	/**
	 * Asset user rule identifier
	 *
	 * @var bigint
	 * @insertonly
	 */
	public $assetUserRuleId = null;


}

