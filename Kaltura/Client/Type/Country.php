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
class Kaltura_Client_Type_Country extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCountry';
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
		if(!is_null($xml) && count($xml->code))
			$this->code = (string)$xml->code;
		if(!is_null($jsonObject) && isset($jsonObject->code))
			$this->code = (string)$jsonObject->code;
		if(!is_null($xml) && count($xml->mainLanguageCode))
			$this->mainLanguageCode = (string)$xml->mainLanguageCode;
		if(!is_null($jsonObject) && isset($jsonObject->mainLanguageCode))
			$this->mainLanguageCode = (string)$jsonObject->mainLanguageCode;
		if(!is_null($xml) && count($xml->languagesCode))
			$this->languagesCode = (string)$xml->languagesCode;
		if(!is_null($jsonObject) && isset($jsonObject->languagesCode))
			$this->languagesCode = (string)$jsonObject->languagesCode;
		if(!is_null($xml) && count($xml->currency))
			$this->currency = (string)$xml->currency;
		if(!is_null($jsonObject) && isset($jsonObject->currency))
			$this->currency = (string)$jsonObject->currency;
		if(!is_null($xml) && count($xml->currencySign))
			$this->currencySign = (string)$xml->currencySign;
		if(!is_null($jsonObject) && isset($jsonObject->currencySign))
			$this->currencySign = (string)$jsonObject->currencySign;
		if(!is_null($xml) && count($xml->vatPercent))
			$this->vatPercent = (float)$xml->vatPercent;
		if(!is_null($jsonObject) && isset($jsonObject->vatPercent))
			$this->vatPercent = (float)$jsonObject->vatPercent;
		if(!is_null($xml) && count($xml->timeZoneId))
			$this->timeZoneId = (string)$xml->timeZoneId;
		if(!is_null($jsonObject) && isset($jsonObject->timeZoneId))
			$this->timeZoneId = (string)$jsonObject->timeZoneId;
	}
	/**
	 * Country identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Country name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Country code
	 *
	 * @var string
	 */
	public $code = null;

	/**
	 * The main language code in the country
	 *
	 * @var string
	 */
	public $mainLanguageCode = null;

	/**
	 * All the languages code that are supported in the country
	 *
	 * @var string
	 */
	public $languagesCode = null;

	/**
	 * Currency code
	 *
	 * @var string
	 */
	public $currency = null;

	/**
	 * Currency Sign
	 *
	 * @var string
	 */
	public $currencySign = null;

	/**
	 * Vat Percent in the country
	 *
	 * @var float
	 */
	public $vatPercent = null;

	/**
	 * Time zone ID
	 *
	 * @var string
	 */
	public $timeZoneId = null;


}

