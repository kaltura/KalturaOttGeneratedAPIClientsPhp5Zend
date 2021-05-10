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
// Copyright (C) 2006-2021  Kaltura Inc.
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
abstract class Kaltura_Client_Type_ProductPrice extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaProductPrice';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->productId))
			$this->productId = (string)$xml->productId;
		if(count($xml->productType))
			$this->productType = (string)$xml->productType;
		if(count($xml->price) && !empty($xml->price))
			$this->price = Kaltura_Client_ParseUtils::unmarshalObject($xml->price, "KalturaPrice");
		if(count($xml->fullPrice) && !empty($xml->fullPrice))
			$this->fullPrice = Kaltura_Client_ParseUtils::unmarshalObject($xml->fullPrice, "KalturaPrice");
		if(count($xml->purchaseStatus))
			$this->purchaseStatus = (string)$xml->purchaseStatus;
		if(count($xml->promotionInfo) && !empty($xml->promotionInfo))
			$this->promotionInfo = Kaltura_Client_ParseUtils::unmarshalObject($xml->promotionInfo, "KalturaPromotionInfo");
	}
	/**
	 * Product identifier
	 *
	 * @var string
	 */
	public $productId = null;

	/**
	 * Product Type
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 */
	public $productType = null;

	/**
	 * Product price
	 *
	 * @var Kaltura_Client_Type_Price
	 */
	public $price;

	/**
	 * The full price of the item (with no discounts)
	 *
	 * @var Kaltura_Client_Type_Price
	 */
	public $fullPrice;

	/**
	 * Product purchase status
	 *
	 * @var Kaltura_Client_Enum_PurchaseStatus
	 */
	public $purchaseStatus = null;

	/**
	 * Promotion Info
	 *
	 * @var Kaltura_Client_Type_PromotionInfo
	 */
	public $promotionInfo;


}

