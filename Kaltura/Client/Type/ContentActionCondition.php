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
class Kaltura_Client_Type_ContentActionCondition extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaContentActionCondition';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->action))
		{
			if(isset($xml->action->item) && count($xml->action->item))
				$this->multiLingual_action = Kaltura_Client_ParseUtils::unmarshalArray($xml->action, '');
			else
				$this->action = (string)$xml->action;
		}
		if(count($xml->length))
			$this->length = (int)$xml->length;
		if(count($xml->lengthType))
		{
			if(isset($xml->lengthType->item) && count($xml->lengthType->item))
				$this->multiLingual_lengthType = Kaltura_Client_ParseUtils::unmarshalArray($xml->lengthType, '');
			else
				$this->lengthType = (string)$xml->lengthType;
		}
		if(count($xml->multiplier))
			$this->multiplier = (int)$xml->multiplier;
	}
	/**
	 * The relevant action to be examined
	 *
	 * @var Kaltura_Client_Enum_ContentAction
	 */
	public $action = null;

	/**
	 * Optional - if action required specific length to be considered (in percentage or minutes)
	 *
	 * @var int
	 */
	public $length = null;

	/**
	 * Optional - if action required specific length to be considered (in percentage or minutes)
	 *
	 * @var Kaltura_Client_Enum_ContentActionConditionLengthType
	 */
	public $lengthType = null;

	/**
	 * Score multiplier - how much is a single action worth when considering the action
	 *
	 * @var int
	 */
	public $multiplier = null;


}

