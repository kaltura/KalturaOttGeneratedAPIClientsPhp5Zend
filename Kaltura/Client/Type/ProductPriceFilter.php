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
class Kaltura_Client_Type_ProductPriceFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaProductPriceFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->subscriptionIdIn))
			$this->subscriptionIdIn = (string)$xml->subscriptionIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->subscriptionIdIn))
			$this->subscriptionIdIn = (string)$jsonObject->subscriptionIdIn;
		if(!is_null($xml) && count($xml->fileIdIn))
			$this->fileIdIn = (string)$xml->fileIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->fileIdIn))
			$this->fileIdIn = (string)$jsonObject->fileIdIn;
		if(!is_null($xml) && count($xml->collectionIdIn))
			$this->collectionIdIn = (string)$xml->collectionIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->collectionIdIn))
			$this->collectionIdIn = (string)$jsonObject->collectionIdIn;
		if(!is_null($xml) && count($xml->isLowest))
		{
			if(!empty($xml->isLowest) && ((int) $xml->isLowest === 1 || strtolower((string)$xml->isLowest) === 'true'))
				$this->isLowest = true;
			else
				$this->isLowest = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isLowest))
		{
			if(!empty($jsonObject->isLowest) && ((int) $jsonObject->isLowest === 1 || strtolower((string)$jsonObject->isLowest) === 'true'))
				$this->isLowest = true;
			else
				$this->isLowest = false;
		}
		if(!is_null($xml) && count($xml->couponCodeEqual))
			$this->couponCodeEqual = (string)$xml->couponCodeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->couponCodeEqual))
			$this->couponCodeEqual = (string)$jsonObject->couponCodeEqual;
		if(!is_null($xml) && count($xml->programAssetGroupOfferIdIn))
			$this->programAssetGroupOfferIdIn = (string)$xml->programAssetGroupOfferIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->programAssetGroupOfferIdIn))
			$this->programAssetGroupOfferIdIn = (string)$jsonObject->programAssetGroupOfferIdIn;
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

