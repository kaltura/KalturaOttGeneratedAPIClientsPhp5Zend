<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Type_Campaign extends Kaltura_Client_Type_CrudObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaCampaign';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->state))
			$this->state = (string)$xml->state;
		if(count($xml->promotion) && !empty($xml->promotion))
			$this->promotion = Kaltura_Client_ParseUtils::unmarshalObject($xml->promotion, "KalturaPromotion");
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->collectionIdIn))
			$this->collectionIdIn = (string)$xml->collectionIdIn;
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
	 * @var Kaltura_Client_Type_Promotion
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


}

