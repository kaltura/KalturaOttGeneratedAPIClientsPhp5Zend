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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_BusinessModuleRule extends Kaltura_Client_Type_Rule
{
	public function getKalturaObjectType()
	{
		return 'KalturaBusinessModuleRule';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::unmarshalArray($xml->conditions, "KalturaCondition");
		}
		if(count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaBusinessModuleRuleAction");
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * List of conditions for the rule
	 *
	 * @var array of KalturaCondition
	 */
	public $conditions;

	/**
	 * List of actions for the rule
	 *
	 * @var array of KalturaBusinessModuleRuleAction
	 */
	public $actions;

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


}

