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
class Kaltura_Client_Type_PpvPrice extends Kaltura_Client_Type_ProductPrice
{
	public function getKalturaObjectType()
	{
		return 'KalturaPpvPrice';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fileId))
			$this->fileId = (int)$xml->fileId;
		if(!is_null($jsonObject) && isset($jsonObject->fileId))
			$this->fileId = (int)$jsonObject->fileId;
		if(!is_null($xml) && count($xml->ppvModuleId))
			$this->ppvModuleId = (string)$xml->ppvModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->ppvModuleId))
			$this->ppvModuleId = (string)$jsonObject->ppvModuleId;
		if(!is_null($xml) && count($xml->isSubscriptionOnly))
		{
			if(!empty($xml->isSubscriptionOnly) && ((int) $xml->isSubscriptionOnly === 1 || strtolower((string)$xml->isSubscriptionOnly) === 'true'))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSubscriptionOnly))
		{
			if(!empty($jsonObject->isSubscriptionOnly) && ((int) $jsonObject->isSubscriptionOnly === 1 || strtolower((string)$jsonObject->isSubscriptionOnly) === 'true'))
				$this->isSubscriptionOnly = true;
			else
				$this->isSubscriptionOnly = false;
		}
		if(!is_null($xml) && count($xml->subscriptionId))
			$this->subscriptionId = (string)$xml->subscriptionId;
		if(!is_null($jsonObject) && isset($jsonObject->subscriptionId))
			$this->subscriptionId = (string)$jsonObject->subscriptionId;
		if(!is_null($xml) && count($xml->collectionId))
			$this->collectionId = (string)$xml->collectionId;
		if(!is_null($jsonObject) && isset($jsonObject->collectionId))
			$this->collectionId = (string)$jsonObject->collectionId;
		if(!is_null($xml) && count($xml->prePaidId))
			$this->prePaidId = (string)$xml->prePaidId;
		if(!is_null($jsonObject) && isset($jsonObject->prePaidId))
			$this->prePaidId = (string)$jsonObject->prePaidId;
		if(!is_null($xml) && count($xml->ppvDescriptions))
		{
			if(empty($xml->ppvDescriptions))
				$this->ppvDescriptions = array();
			else
				$this->ppvDescriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->ppvDescriptions, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->ppvDescriptions))
		{
			if(empty($jsonObject->ppvDescriptions))
				$this->ppvDescriptions = array();
			else
				$this->ppvDescriptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->ppvDescriptions, "KalturaTranslationToken");
		}
		if(!is_null($xml) && count($xml->purchaseUserId))
			$this->purchaseUserId = (string)$xml->purchaseUserId;
		if(!is_null($jsonObject) && isset($jsonObject->purchaseUserId))
			$this->purchaseUserId = (string)$jsonObject->purchaseUserId;
		if(!is_null($xml) && count($xml->purchasedMediaFileId))
			$this->purchasedMediaFileId = (int)$xml->purchasedMediaFileId;
		if(!is_null($jsonObject) && isset($jsonObject->purchasedMediaFileId))
			$this->purchasedMediaFileId = (int)$jsonObject->purchasedMediaFileId;
		if(!is_null($xml) && count($xml->relatedMediaFileIds))
		{
			if(empty($xml->relatedMediaFileIds))
				$this->relatedMediaFileIds = array();
			else
				$this->relatedMediaFileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->relatedMediaFileIds, "KalturaIntegerValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->relatedMediaFileIds))
		{
			if(empty($jsonObject->relatedMediaFileIds))
				$this->relatedMediaFileIds = array();
			else
				$this->relatedMediaFileIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->relatedMediaFileIds, "KalturaIntegerValue");
		}
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->discountEndDate))
			$this->discountEndDate = (string)$xml->discountEndDate;
		if(!is_null($jsonObject) && isset($jsonObject->discountEndDate))
			$this->discountEndDate = (string)$jsonObject->discountEndDate;
		if(!is_null($xml) && count($xml->firstDeviceName))
			$this->firstDeviceName = (string)$xml->firstDeviceName;
		if(!is_null($jsonObject) && isset($jsonObject->firstDeviceName))
			$this->firstDeviceName = (string)$jsonObject->firstDeviceName;
		if(!is_null($xml) && count($xml->isInCancelationPeriod))
		{
			if(!empty($xml->isInCancelationPeriod) && ((int) $xml->isInCancelationPeriod === 1 || strtolower((string)$xml->isInCancelationPeriod) === 'true'))
				$this->isInCancelationPeriod = true;
			else
				$this->isInCancelationPeriod = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isInCancelationPeriod))
		{
			if(!empty($jsonObject->isInCancelationPeriod) && ((int) $jsonObject->isInCancelationPeriod === 1 || strtolower((string)$jsonObject->isInCancelationPeriod) === 'true'))
				$this->isInCancelationPeriod = true;
			else
				$this->isInCancelationPeriod = false;
		}
		if(!is_null($xml) && count($xml->ppvProductCode))
			$this->ppvProductCode = (string)$xml->ppvProductCode;
		if(!is_null($jsonObject) && isset($jsonObject->ppvProductCode))
			$this->ppvProductCode = (string)$jsonObject->ppvProductCode;
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
	 * @var Kaltura_Client_Type_TranslationToken[]
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
	 * @var Kaltura_Client_Type_IntegerValue[]
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

