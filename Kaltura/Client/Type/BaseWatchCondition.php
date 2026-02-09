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
abstract class Kaltura_Client_Type_BaseWatchCondition extends Kaltura_Client_Type_BaseSegmentCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseWatchCondition';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->level))
			$this->level = (string)$xml->level;
		if(!is_null($jsonObject) && isset($jsonObject->level))
			$this->level = (string)$jsonObject->level;
		if(!is_null($xml) && count($xml->contentFilter) && !empty($xml->contentFilter))
			$this->contentFilter = Kaltura_Client_ParseUtils::unmarshalObject($xml->contentFilter, "KalturaContentTypeSelector");
		if(!is_null($jsonObject) && isset($jsonObject->contentFilter) && !empty($jsonObject->contentFilter))
			$this->contentFilter = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->contentFilter, "KalturaContentTypeSelector");
		if(!is_null($xml) && count($xml->evaluationDays))
			$this->evaluationDays = (int)$xml->evaluationDays;
		if(!is_null($jsonObject) && isset($jsonObject->evaluationDays))
			$this->evaluationDays = (int)$jsonObject->evaluationDays;
		if(!is_null($xml) && count($xml->deviceFamilyIn))
			$this->deviceFamilyIn = (string)$xml->deviceFamilyIn;
		if(!is_null($jsonObject) && isset($jsonObject->deviceFamilyIn))
			$this->deviceFamilyIn = (string)$jsonObject->deviceFamilyIn;
		if(!is_null($xml) && count($xml->viewTimeConstraint) && !empty($xml->viewTimeConstraint))
			$this->viewTimeConstraint = Kaltura_Client_ParseUtils::unmarshalObject($xml->viewTimeConstraint, "KalturaViewTimeConstraint");
		if(!is_null($jsonObject) && isset($jsonObject->viewTimeConstraint) && !empty($jsonObject->viewTimeConstraint))
			$this->viewTimeConstraint = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->viewTimeConstraint, "KalturaViewTimeConstraint");
		if(!is_null($xml) && count($xml->constraintsOperator))
			$this->constraintsOperator = (string)$xml->constraintsOperator;
		if(!is_null($jsonObject) && isset($jsonObject->constraintsOperator))
			$this->constraintsOperator = (string)$jsonObject->constraintsOperator;
		if(!is_null($xml) && count($xml->constraintAttributes))
		{
			if(empty($xml->constraintAttributes))
				$this->constraintAttributes = array();
			else
				$this->constraintAttributes = Kaltura_Client_ParseUtils::unmarshalArray($xml->constraintAttributes, "KalturaBaseAttributeConstraint");
		}
		if(!is_null($jsonObject) && isset($jsonObject->constraintAttributes))
		{
			if(empty($jsonObject->constraintAttributes))
				$this->constraintAttributes = array();
			else
				$this->constraintAttributes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->constraintAttributes, "KalturaBaseAttributeConstraint");
		}
	}
	/**
	 * Defines the scope of the condition evaluation.
	 *
	 * @var Kaltura_Client_Enum_ConditionLevel
	 */
	public $level = null;

	/**
	 * Specifies criteria to include or exclude specific content types (recordings, programs, media types) from the evaluation.
	 *
	 * @var Kaltura_Client_Type_ContentTypeSelector
	 */
	public $contentFilter;

	/**
	 * The period in days to look back for watch history.
	 *
	 * @var int
	 */
	public $evaluationDays = null;

	/**
	 * A comma-separated list of device family names (e.g., &#39;mobile&#39;, &#39;web&#39;, &#39;stb&#39;).
	 *
	 * @var string
	 */
	public $deviceFamilyIn = null;

	/**
	 * Filters watch actions that occurred within a specific time window.
	 *
	 * @var Kaltura_Client_Type_ViewTimeConstraint
	 */
	public $viewTimeConstraint;

	/**
	 * Defines whether to use AND or OR between the items in constraintAttributes.
	 *
	 * @var Kaltura_Client_Enum_BooleanOperator
	 */
	public $constraintsOperator = null;

	/**
	 * A list of up to 5 specific constraints to filter the watch history.
	 *
	 * @var Kaltura_Client_Type_BaseAttributeConstraint[]
	 */
	public $constraintAttributes;


}

