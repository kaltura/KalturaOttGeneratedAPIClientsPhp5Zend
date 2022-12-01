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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->code))
		{
			if(isset($xml->code->item) && count($xml->code->item))
				$this->multiLingual_code = Kaltura_Client_ParseUtils::unmarshalArray($xml->code, '');
			else
				$this->code = (string)$xml->code;
		}
		if(count($xml->mainLanguageCode))
		{
			if(isset($xml->mainLanguageCode->item) && count($xml->mainLanguageCode->item))
				$this->multiLingual_mainLanguageCode = Kaltura_Client_ParseUtils::unmarshalArray($xml->mainLanguageCode, '');
			else
				$this->mainLanguageCode = (string)$xml->mainLanguageCode;
		}
		if(count($xml->languagesCode))
		{
			if(isset($xml->languagesCode->item) && count($xml->languagesCode->item))
				$this->multiLingual_languagesCode = Kaltura_Client_ParseUtils::unmarshalArray($xml->languagesCode, '');
			else
				$this->languagesCode = (string)$xml->languagesCode;
		}
		if(count($xml->currency))
		{
			if(isset($xml->currency->item) && count($xml->currency->item))
				$this->multiLingual_currency = Kaltura_Client_ParseUtils::unmarshalArray($xml->currency, '');
			else
				$this->currency = (string)$xml->currency;
		}
		if(count($xml->currencySign))
		{
			if(isset($xml->currencySign->item) && count($xml->currencySign->item))
				$this->multiLingual_currencySign = Kaltura_Client_ParseUtils::unmarshalArray($xml->currencySign, '');
			else
				$this->currencySign = (string)$xml->currencySign;
		}
		if(count($xml->vatPercent))
			$this->vatPercent = (float)$xml->vatPercent;
		if(count($xml->timeZoneId))
		{
			if(isset($xml->timeZoneId->item) && count($xml->timeZoneId->item))
				$this->multiLingual_timeZoneId = Kaltura_Client_ParseUtils::unmarshalArray($xml->timeZoneId, '');
			else
				$this->timeZoneId = (string)$xml->timeZoneId;
		}
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

