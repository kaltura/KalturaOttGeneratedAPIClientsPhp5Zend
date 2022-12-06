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
class Kaltura_Client_Type_PurchaseBase extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPurchaseBase';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->productId))
			$this->productId = (int)$xml->productId;
		if(count($xml->contentId))
			$this->contentId = (int)$xml->contentId;
		if(count($xml->productType))
		{
			if(isset($xml->productType->item) && count($xml->productType->item))
				$this->multiLingual_productType = Kaltura_Client_ParseUtils::unmarshalArray($xml->productType, '');
			else
				$this->productType = (string)$xml->productType;
		}
		if(count($xml->adapterData))
		{
			if(isset($xml->adapterData->item) && count($xml->adapterData->item))
				$this->multiLingual_adapterData = Kaltura_Client_ParseUtils::unmarshalArray($xml->adapterData, '');
			else
				$this->adapterData = (string)$xml->adapterData;
		}
	}
	/**
	 * Identifier for the package from which this content is offered
	 *
	 * @var int
	 */
	public $productId = null;

	/**
	 * Identifier for the content to purchase. Relevant only if Product type = PPV
	 *
	 * @var int
	 */
	public $contentId = null;

	/**
	 * Package type. Possible values: PPV, Subscription, Collection
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 */
	public $productType = null;

	/**
	 * Additional data for the adapter
	 *
	 * @var string
	 */
	public $adapterData = null;


}

