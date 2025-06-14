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
class Kaltura_Client_Type_ParentalRule extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaParentalRule';
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
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->order))
			$this->order = (int)$xml->order;
		if(!is_null($jsonObject) && isset($jsonObject->order))
			$this->order = (int)$jsonObject->order;
		if(!is_null($xml) && count($xml->mediaTag))
			$this->mediaTag = (int)$xml->mediaTag;
		if(!is_null($jsonObject) && isset($jsonObject->mediaTag))
			$this->mediaTag = (int)$jsonObject->mediaTag;
		if(!is_null($xml) && count($xml->epgTag))
			$this->epgTag = (int)$xml->epgTag;
		if(!is_null($jsonObject) && isset($jsonObject->epgTag))
			$this->epgTag = (int)$jsonObject->epgTag;
		if(!is_null($xml) && count($xml->blockAnonymousAccess))
		{
			if(!empty($xml->blockAnonymousAccess) && ((int) $xml->blockAnonymousAccess === 1 || strtolower((string)$xml->blockAnonymousAccess) === 'true'))
				$this->blockAnonymousAccess = true;
			else
				$this->blockAnonymousAccess = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->blockAnonymousAccess))
		{
			if(!empty($jsonObject->blockAnonymousAccess) && ((int) $jsonObject->blockAnonymousAccess === 1 || strtolower((string)$jsonObject->blockAnonymousAccess) === 'true'))
				$this->blockAnonymousAccess = true;
			else
				$this->blockAnonymousAccess = false;
		}
		if(!is_null($xml) && count($xml->ruleType))
			$this->ruleType = (string)$xml->ruleType;
		if(!is_null($jsonObject) && isset($jsonObject->ruleType))
			$this->ruleType = (string)$jsonObject->ruleType;
		if(!is_null($xml) && count($xml->mediaTagValues))
		{
			if(empty($xml->mediaTagValues))
				$this->mediaTagValues = array();
			else
				$this->mediaTagValues = Kaltura_Client_ParseUtils::unmarshalArray($xml->mediaTagValues, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mediaTagValues))
		{
			if(empty($jsonObject->mediaTagValues))
				$this->mediaTagValues = array();
			else
				$this->mediaTagValues = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mediaTagValues, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->epgTagValues))
		{
			if(empty($xml->epgTagValues))
				$this->epgTagValues = array();
			else
				$this->epgTagValues = Kaltura_Client_ParseUtils::unmarshalArray($xml->epgTagValues, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->epgTagValues))
		{
			if(empty($jsonObject->epgTagValues))
				$this->epgTagValues = array();
			else
				$this->epgTagValues = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->epgTagValues, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
		{
			if(!empty($jsonObject->isDefault) && ((int) $jsonObject->isDefault === 1 || strtolower((string)$jsonObject->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($xml) && count($xml->origin))
			$this->origin = (string)$xml->origin;
		if(!is_null($jsonObject) && isset($jsonObject->origin))
			$this->origin = (string)$jsonObject->origin;
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
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
	 * @var Kaltura_Client_Type_StringValue[]
	 */
	public $mediaTagValues;

	/**
	 * EPG tag values that trigger rule
	 *
	 * @var Kaltura_Client_Type_StringValue[]
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

