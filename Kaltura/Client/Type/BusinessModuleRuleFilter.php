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
class Kaltura_Client_Type_BusinessModuleRuleFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBusinessModuleRuleFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->businessModuleTypeApplied))
			$this->businessModuleTypeApplied = (string)$xml->businessModuleTypeApplied;
		if(!is_null($jsonObject) && isset($jsonObject->businessModuleTypeApplied))
			$this->businessModuleTypeApplied = (string)$jsonObject->businessModuleTypeApplied;
		if(!is_null($xml) && count($xml->businessModuleIdApplied))
			$this->businessModuleIdApplied = (string)$xml->businessModuleIdApplied;
		if(!is_null($jsonObject) && isset($jsonObject->businessModuleIdApplied))
			$this->businessModuleIdApplied = (string)$jsonObject->businessModuleIdApplied;
		if(!is_null($xml) && count($xml->segmentIdsApplied))
			$this->segmentIdsApplied = (string)$xml->segmentIdsApplied;
		if(!is_null($jsonObject) && isset($jsonObject->segmentIdsApplied))
			$this->segmentIdsApplied = (string)$jsonObject->segmentIdsApplied;
		if(!is_null($xml) && count($xml->actionsContainType))
			$this->actionsContainType = (string)$xml->actionsContainType;
		if(!is_null($jsonObject) && isset($jsonObject->actionsContainType))
			$this->actionsContainType = (string)$jsonObject->actionsContainType;
	}
	/**
	 * Business module type the rules applied on
	 *
	 * @var Kaltura_Client_Enum_TransactionType
	 */
	public $businessModuleTypeApplied = null;

	/**
	 * Business module ID the rules applied on
	 *
	 * @var bigint
	 */
	public $businessModuleIdApplied = null;

	/**
	 * Comma separated segment IDs the rules applied on
	 *
	 * @var string
	 */
	public $segmentIdsApplied = null;

	/**
	 * Indicates which business module rule list to return by their action.
	 *
	 * @var Kaltura_Client_Enum_RuleActionType
	 */
	public $actionsContainType = null;


}

