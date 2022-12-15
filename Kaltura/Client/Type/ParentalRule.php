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
class Kaltura_Client_Type_ParentalRule extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaParentalRule';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->description))
		{
			if(isset($xml->description->item) && count($xml->description->item))
				$this->multiLingual_description = Kaltura_Client_ParseUtils::unmarshalArray($xml->description, '');
			else
				$this->description = (string)$xml->description;
		}
		if(count($xml->order))
			$this->order = (int)$xml->order;
		if(count($xml->mediaTag))
			$this->mediaTag = (int)$xml->mediaTag;
		if(count($xml->epgTag))
			$this->epgTag = (int)$xml->epgTag;
		if(count($xml->blockAnonymousAccess))
		{
			if(!empty($xml->blockAnonymousAccess) && ((int) $xml->blockAnonymousAccess === 1 || strtolower((string)$xml->blockAnonymousAccess) === 'true'))
				$this->blockAnonymousAccess = true;
			else
				$this->blockAnonymousAccess = false;
		}
		if(count($xml->ruleType))
		{
			if(isset($xml->ruleType->item) && count($xml->ruleType->item))
				$this->multiLingual_ruleType = Kaltura_Client_ParseUtils::unmarshalArray($xml->ruleType, '');
			else
				$this->ruleType = (string)$xml->ruleType;
		}
		if(count($xml->mediaTagValues))
		{
			if(empty($xml->mediaTagValues))
				$this->mediaTagValues = array();
			else
				$this->mediaTagValues = Kaltura_Client_ParseUtils::unmarshalArray($xml->mediaTagValues, "KalturaStringValue");
		}
		if(count($xml->epgTagValues))
		{
			if(empty($xml->epgTagValues))
				$this->epgTagValues = array();
			else
				$this->epgTagValues = Kaltura_Client_ParseUtils::unmarshalArray($xml->epgTagValues, "KalturaStringValue");
		}
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(count($xml->origin))
		{
			if(isset($xml->origin->item) && count($xml->origin->item))
				$this->multiLingual_origin = Kaltura_Client_ParseUtils::unmarshalArray($xml->origin, '');
			else
				$this->origin = (string)$xml->origin;
		}
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * Unique parental rule identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Rule display name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Explanatory description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Rule order within the full list of rules
	 *
	 * @var int
	 */
	public $order = null;

	/**
	 * Media asset tag ID to in which to look for corresponding trigger values
	 *
	 * @var int
	 */
	public $mediaTag = null;

	/**
	 * EPG asset tag ID to in which to look for corresponding trigger values
	 *
	 * @var int
	 */
	public $epgTag = null;

	/**
	 * Content that correspond to this rule is not available for guests
	 *
	 * @var bool
	 */
	public $blockAnonymousAccess = null;

	/**
	 * Rule type – Movies, TV series or both
	 *
	 * @var Kaltura_Client_Enum_ParentalRuleType
	 */
	public $ruleType = null;

	/**
	 * Media tag values that trigger rule
	 *
	 * @var array of KalturaStringValue
	 */
	public $mediaTagValues;

	/**
	 * EPG tag values that trigger rule
	 *
	 * @var array of KalturaStringValue
	 */
	public $epgTagValues;

	/**
	 * Is the rule the default rule of the account
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefault = null;

	/**
	 * Where was this rule defined account, household or user
	 *
	 * @var Kaltura_Client_Enum_RuleLevel
	 * @readonly
	 */
	public $origin = null;

	/**
	 * active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Specifies when was the parental rule created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the parental rule last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

