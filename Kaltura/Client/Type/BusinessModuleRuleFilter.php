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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->businessModuleTypeApplied))
			$this->businessModuleTypeApplied = (string)$xml->businessModuleTypeApplied;
		if(count($xml->businessModuleIdApplied))
			$this->businessModuleIdApplied = (string)$xml->businessModuleIdApplied;
		if(count($xml->segmentIdsApplied))
			$this->segmentIdsApplied = (string)$xml->segmentIdsApplied;
		if(count($xml->actionsContainType))
			$this->actionsContainType = (string)$xml->actionsContainType;
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

