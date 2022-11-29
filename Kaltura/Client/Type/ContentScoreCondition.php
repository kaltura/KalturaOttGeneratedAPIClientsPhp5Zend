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
class Kaltura_Client_Type_ContentScoreCondition extends Kaltura_Client_Type_BaseSegmentCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaContentScoreCondition';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->minScore))
			$this->minScore = (int)$xml->minScore;
		if(count($xml->maxScore))
			$this->maxScore = (int)$xml->maxScore;
		if(count($xml->days))
			$this->days = (int)$xml->days;
		if(count($xml->field))
		{
			if(isset($xml->field->item) && count($xml->field->item))
				$this->multiLingual_field = Kaltura_Client_ParseUtils::unmarshalArray($xml->field, '');
			else
				$this->field = (string)$xml->field;
		}
		if(count($xml->values))
		{
			if(empty($xml->values))
				$this->values = array();
			else
				$this->values = Kaltura_Client_ParseUtils::unmarshalArray($xml->values, "KalturaStringValue");
		}
		if(count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaContentActionCondition");
		}
	}
	/**
	 * The minimum score to be met
	 *
	 * @var int
	 */
	public $minScore = null;

	/**
	 * The maximum score to be met
	 *
	 * @var int
	 */
	public $maxScore = null;

	/**
	 * How many days back should the actions be considered
	 *
	 * @var int
	 */
	public $days = null;

	/**
	 * If condition should be applied on specific field (and not the one of the segment value)
	 *
	 * @var string
	 */
	public $field = null;

	/**
	 * If condition should be applied on specific field (and not the one of the segment value) - 
	 *             list of values to be considered together
	 *
	 * @var array of KalturaStringValue
	 */
	public $values;

	/**
	 * List of the actions that consist the condition
	 *
	 * @var array of KalturaContentActionCondition
	 */
	public $actions;


}

