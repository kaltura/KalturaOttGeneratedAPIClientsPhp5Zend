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
class Kaltura_Client_Type_PriceDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPriceDetails';
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
		if(!is_null($xml) && count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(!is_null($jsonObject) && isset($jsonObject->price) && !empty($jsonObject->price))
			$this->price = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->price, "KalturaPrice");
		if(!is_null($xml) && count($xml->multiCurrencyPrice))
		{
			if(empty($xml->multiCurrencyPrice))
				$this->multiCurrencyPrice = array();
			else
				$this->multiCurrencyPrice = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiCurrencyPrice, "KalturaPrice");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiCurrencyPrice))
		{
			if(empty($jsonObject->multiCurrencyPrice))
				$this->multiCurrencyPrice = array();
			else
				$this->multiCurrencyPrice = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multiCurrencyPrice, "KalturaPrice");
		}
		if(!is_null($xml) && count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->descriptions))
		{
			if(empty($jsonObject->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->descriptions, "KalturaTranslationToken");
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
	 * @var Kaltura_Client_Type_Price[]
	 */
	public $multiCurrencyPrice;

	/**
	 * A list of the descriptions for this price on different languages (language code and translation)
	 *
	 * @var Kaltura_Client_Type_TranslationToken[]
	 */
	public $descriptions;


}

