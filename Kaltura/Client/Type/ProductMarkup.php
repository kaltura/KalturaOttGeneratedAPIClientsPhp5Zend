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
class Kaltura_Client_Type_ProductMarkup extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaProductMarkup';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->productId))
			$this->productId = (string)$xml->productId;
		if(!is_null($jsonObject) && isset($jsonObject->productId))
			$this->productId = (string)$jsonObject->productId;
		if(!is_null($xml) && count($xml->productType))
			$this->productType = (string)$xml->productType;
		if(!is_null($jsonObject) && isset($jsonObject->productType))
			$this->productType = (string)$jsonObject->productType;
		if(!is_null($xml) && count($xml->isEntitled))
		{
			if(!empty($xml->isEntitled) && ((int) $xml->isEntitled === 1 || strtolower((string)$xml->isEntitled) === 'true'))
				$this->isEntitled = true;
			else
				$this->isEntitled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isEntitled))
		{
			if(!empty($jsonObject->isEntitled) && ((int) $jsonObject->isEntitled === 1 || strtolower((string)$jsonObject->isEntitled) === 'true'))
				$this->isEntitled = true;
			else
				$this->isEntitled = false;
		}
	}
	/**
	 * Product Id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $productId = null;

	/**
	 * Product Type
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 * @readonly
	 */
	public $productType = null;

	/**
	 * Is Entitled to this product
	 *
	 * @var bool
	 * @readonly
	 */
	public $isEntitled = null;


}

