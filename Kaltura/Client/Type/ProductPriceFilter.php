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
class Kaltura_Client_Type_ProductPriceFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaProductPriceFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->subscriptionIdIn))
		{
			if(isset($xml->subscriptionIdIn->item) && count($xml->subscriptionIdIn->item))
				$this->multiLingual_subscriptionIdIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->subscriptionIdIn, '');
			else
				$this->subscriptionIdIn = (string)$xml->subscriptionIdIn;
		}
		if(count($xml->fileIdIn))
		{
			if(isset($xml->fileIdIn->item) && count($xml->fileIdIn->item))
				$this->multiLingual_fileIdIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->fileIdIn, '');
			else
				$this->fileIdIn = (string)$xml->fileIdIn;
		}
		if(count($xml->collectionIdIn))
		{
			if(isset($xml->collectionIdIn->item) && count($xml->collectionIdIn->item))
				$this->multiLingual_collectionIdIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->collectionIdIn, '');
			else
				$this->collectionIdIn = (string)$xml->collectionIdIn;
		}
		if(count($xml->isLowest))
		{
			if(!empty($xml->isLowest) && ((int) $xml->isLowest === 1 || strtolower((string)$xml->isLowest) === 'true'))
				$this->isLowest = true;
			else
				$this->isLowest = false;
		}
		if(count($xml->couponCodeEqual))
		{
			if(isset($xml->couponCodeEqual->item) && count($xml->couponCodeEqual->item))
				$this->multiLingual_couponCodeEqual = Kaltura_Client_ParseUtils::unmarshalArray($xml->couponCodeEqual, '');
			else
				$this->couponCodeEqual = (string)$xml->couponCodeEqual;
		}
		if(count($xml->programAssetGroupOfferIdIn))
		{
			if(isset($xml->programAssetGroupOfferIdIn->item) && count($xml->programAssetGroupOfferIdIn->item))
				$this->multiLingual_programAssetGroupOfferIdIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->programAssetGroupOfferIdIn, '');
			else
				$this->programAssetGroupOfferIdIn = (string)$xml->programAssetGroupOfferIdIn;
		}
	}
	/**
	 * Comma separated subscriptions identifiers
	 *
	 * @var string
	 */
	public $subscriptionIdIn = null;

	/**
	 * Comma separated media files identifiers
	 *
	 * @var string
	 */
	public $fileIdIn = null;

	/**
	 * Comma separated collections identifiers
	 *
	 * @var string
	 */
	public $collectionIdIn = null;

	/**
	 * A flag that indicates if only the lowest price of an item should return
	 *
	 * @var bool
	 */
	public $isLowest = null;

	/**
	 * Discount coupon code
	 *
	 * @var string
	 */
	public $couponCodeEqual = null;

	/**
	 * Comma separated ProgramAssetGroupOffer identifiers
	 *
	 * @var string
	 */
	public $programAssetGroupOfferIdIn = null;


}

