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
class Kaltura_Client_Type_AssetUserRuleFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetUserRuleFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->attachedUserIdEqualCurrent))
		{
			if(!empty($xml->attachedUserIdEqualCurrent) && ((int) $xml->attachedUserIdEqualCurrent === 1 || strtolower((string)$xml->attachedUserIdEqualCurrent) === 'true'))
				$this->attachedUserIdEqualCurrent = true;
			else
				$this->attachedUserIdEqualCurrent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->attachedUserIdEqualCurrent))
		{
			if(!empty($jsonObject->attachedUserIdEqualCurrent) && ((int) $jsonObject->attachedUserIdEqualCurrent === 1 || strtolower((string)$jsonObject->attachedUserIdEqualCurrent) === 'true'))
				$this->attachedUserIdEqualCurrent = true;
			else
				$this->attachedUserIdEqualCurrent = false;
		}
		if(!is_null($xml) && count($xml->actionsContainType))
			$this->actionsContainType = (string)$xml->actionsContainType;
		if(!is_null($jsonObject) && isset($jsonObject->actionsContainType))
			$this->actionsContainType = (string)$jsonObject->actionsContainType;
		if(!is_null($xml) && count($xml->conditionsContainType))
			$this->conditionsContainType = (string)$xml->conditionsContainType;
		if(!is_null($jsonObject) && isset($jsonObject->conditionsContainType))
			$this->conditionsContainType = (string)$jsonObject->conditionsContainType;
	}
	/**
	 * Indicates if to get the asset user rule list for the attached user or for the entire group
	 *
	 * @var bool
	 */
	public $attachedUserIdEqualCurrent = null;

	/**
	 * Indicates which asset rule list to return by this KalturaRuleActionType.
	 *
	 * @var Kaltura_Client_Enum_RuleActionType
	 */
	public $actionsContainType = null;

	/**
	 * Indicates that only asset rules are returned that have exactly one and not more associated condition.
	 *
	 * @var Kaltura_Client_Enum_RuleConditionType
	 */
	public $conditionsContainType = null;


}

