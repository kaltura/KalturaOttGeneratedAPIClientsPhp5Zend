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
class Kaltura_Client_Type_Campaign extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaCampaign';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->promotion) && !empty($xml->promotion))
			$this->promotion = Kaltura_Client_ParseUtils::unmarshalObject($xml->promotion, "KalturaBasePromotion");
		if(!is_null($jsonObject) && isset($jsonObject->promotion) && !empty($jsonObject->promotion))
			$this->promotion = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->promotion, "KalturaBasePromotion");
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->collectionIdIn))
			$this->collectionIdIn = (string)$xml->collectionIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->collectionIdIn))
			$this->collectionIdIn = (string)$jsonObject->collectionIdIn;
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
	}
	/**
	 * ID
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Create date of the rule
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Update date of the rule
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Start date of the rule
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * End date of the rule
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * systemName
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * state
	 *
	 * @var Kaltura_Client_Enum_ObjectState
	 * @readonly
	 */
	public $state = null;

	/**
	 * The Promotion that is promoted to the user
	 *
	 * @var Kaltura_Client_Type_BasePromotion
	 */
	public $promotion;

	/**
	 * Free text message to the user that gives information about the campaign.
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Comma separated collection IDs list
	 *
	 * @var string
	 */
	public $collectionIdIn = null;

	/**
	 * Asset user rule identifier
	 *
	 * @var bigint
	 */
	public $assetUserRuleId = null;


}

