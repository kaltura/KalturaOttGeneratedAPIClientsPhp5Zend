<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Type_PriceDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPriceDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(count($xml->multiCurrencyPrice))
		{
			if(empty($xml->multiCurrencyPrice))
				$this->multiCurrencyPrice = array();
			else
				$this->multiCurrencyPrice = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiCurrencyPrice, "KalturaPrice");
		}
		if(count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
	}
	/**
	 * The price code identifier
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
	 * The price
	 *
	 * @var Kaltura_Client_Type_Price
	 * @readonly
	 */
	public $price;

	/**
	 * Multi currency prices for all countries and currencies
	 *
	 * @var array of KalturaPrice
	 */
	public $multiCurrencyPrice;

	/**
	 * A list of the descriptions for this price on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;


}

