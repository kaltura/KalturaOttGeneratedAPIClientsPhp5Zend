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
class Kaltura_Client_Type_AssetRule extends Kaltura_Client_Type_AssetRuleBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetRule';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::unmarshalArray($xml->conditions, "KalturaCondition");
		}
		if(!is_null($jsonObject) && isset($jsonObject->conditions))
		{
			if(empty($jsonObject->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->conditions, "KalturaCondition");
		}
		if(!is_null($xml) && count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaAssetRuleAction");
		}
		if(!is_null($jsonObject) && isset($jsonObject->actions))
		{
			if(empty($jsonObject->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->actions, "KalturaAssetRuleAction");
		}
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
	}
	/**
	 * List of conditions for the rule
	 *
	 * @var Kaltura_Client_Type_Condition[]
	 */
	public $conditions;

	/**
	 * List of actions for the rule
	 *
	 * @var Kaltura_Client_Type_AssetRuleAction[]
	 */
	public $actions;

	/**
	 * List of actions for the rule
	 *
	 * @var Kaltura_Client_Enum_AssetRuleStatus
	 * @readonly
	 */
	public $status = null;


}

