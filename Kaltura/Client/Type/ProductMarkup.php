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
class Kaltura_Client_Type_ProductMarkup extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaProductMarkup';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->productId))
			$this->productId = (string)$xml->productId;
		if(count($xml->productType))
		{
			if(isset($xml->productType->item) && count($xml->productType->item))
				$this->multiLingual_productType = Kaltura_Client_ParseUtils::unmarshalArray($xml->productType, '');
			else
				$this->productType = (string)$xml->productType;
		}
		if(count($xml->isEntitled))
		{
			if(!empty($xml->isEntitled) && ((int) $xml->isEntitled === 1 || strtolower((string)$xml->isEntitled) === 'true'))
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

