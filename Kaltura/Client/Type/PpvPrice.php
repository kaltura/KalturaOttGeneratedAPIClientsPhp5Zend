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
class Kaltura_Client_Type_PpvPrice extends Kaltura_Client_Type_ProductPrice
{
	public function getKalturaObjectType()
	{
		return 'KalturaPpvPrice';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->fileId))
			$this->fileId = (int)$xml->fileId;
		if(count($xml->ppvModuleId))
			$this->ppvModuleId = (string)$xml->ppvModuleId;
		if(count($xml->isSubscriptionOnly))
		{
			if(!empty($xml->isSubscriptionOnly) && ((int) $xml->isSubscriptionOnly === 1 || strtolower((string)$xml->isSubscriptionOnly) === 'true'))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(count($xml->subscriptionId))
			$this->subscriptionId = (string)$xml->subscriptionId;
		if(count($xml->collectionId))
			$this->collectionId = (string)$xml->collectionId;
		if(count($xml->prePaidId))
			$this->prePaidId = (string)$xml->prePaidId;
		if(count($xml->ppvDescriptions))
		{
			if(empty($xml->ppvDescriptions))
				$this->ppvDescriptions = array();
			else
				$this->ppvDescriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->ppvDescriptions, "KalturaTranslationToken");
		}
		if(count($xml->purchaseUserId))
			$this->purchaseUserId = (string)$xml->purchaseUserId;
		if(count($xml->purchasedMediaFileId))
			$this->purchasedMediaFileId = (int)$xml->purchasedMediaFileId;
		if(count($xml->relatedMediaFileIds))
		{
			if(empty($xml->relatedMediaFileIds))
				$this->relatedMediaFileIds = array();
			else
				$this->relatedMediaFileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->relatedMediaFileIds, "KalturaIntegerValue");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->discountEndDate))
			$this->discountEndDate = (string)$xml->discountEndDate;
		if(count($xml->firstDeviceName))
			$this->firstDeviceName = (string)$xml->firstDeviceName;
		if(count($xml->isInCancelationPeriod))
		{
			if(!empty($xml->isInCancelationPeriod) && ((int) $xml->isInCancelationPeriod === 1 || strtolower((string)$xml->isInCancelationPeriod) === 'true'))
				$this->isInCancelationPeriod = true;
			else
				$this->isInCancelationPeriod = false;
		}
		if(count($xml->ppvProductCode))
			$this->ppvProductCode = (string)$xml->ppvProductCode;
	}
	/**
	 * Media file identifier
	 *
	 * @var int
	 */
	public $fileId = null;

	/**
	 * The associated PPV module identifier
	 *
	 * @var string
	 */
	public $ppvModuleId = null;

	/**
	 * Denotes whether this object is available only as part of a subscription or can be sold separately
	 *
	 * @var bool
	 */
	public $isSubscriptionOnly = null;

	/**
	 * The identifier of the relevant subscription
	 *
	 * @var string
	 */
	public $subscriptionId = null;

	/**
	 * The identifier of the relevant collection
	 *
	 * @var string
	 */
	public $collectionId = null;

	/**
	 * The identifier of the relevant pre paid
	 *
	 * @var string
	 */
	public $prePaidId = null;

	/**
	 * A list of the descriptions of the PPV module on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $ppvDescriptions;

	/**
	 * If the item already purchased - the identifier of the user (in the household) who purchased this item
	 *
	 * @var string
	 */
	public $purchaseUserId = null;

	/**
	 * If the item already purchased - the identifier of the purchased file
	 *
	 * @var int
	 */
	public $purchasedMediaFileId = null;

	/**
	 * Related media files identifiers (different types)
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $relatedMediaFileIds;

	/**
	 * If the item already purchased - since when the user can start watching the item
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * If the item already purchased - until when the user can watch the item
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * Discount end date
	 *
	 * @var bigint
	 */
	public $discountEndDate = null;

	/**
	 * If the item already purchased and played - the name of the device on which it was first played
	 *
	 * @var string
	 */
	public $firstDeviceName = null;

	/**
	 * If waiver period is enabled - donates whether the user is still in the cancelation window
	 *
	 * @var bool
	 */
	public $isInCancelationPeriod = null;

	/**
	 * The PPV product code
	 *
	 * @var string
	 */
	public $ppvProductCode = null;


}

