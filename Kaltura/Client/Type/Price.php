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
class Kaltura_Client_Type_Price extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPrice';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->currencyId))
			$this->currencyId = (string)$xml->currencyId;
		if(count($xml->amount))
			$this->amount = (float)$xml->amount;
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
		if(count($xml->countryId))
			$this->countryId = (string)$xml->countryId;
	}
	/**
	 * Currency ID
	 *
	 * @var bigint
	 * @readonly
	 */
	public $currencyId = null;

	/**
	 * Price
	 *
	 * @var float
	 */
	public $amount = null;

	/**
	 * Currency
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
	 * Country ID
	 *
	 * @var bigint
	 */
	public $countryId = null;


}

