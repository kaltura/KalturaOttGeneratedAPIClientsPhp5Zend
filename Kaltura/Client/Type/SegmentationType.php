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
class Kaltura_Client_Type_SegmentationType extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSegmentationType';
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
		if(!is_null($xml) && count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::unmarshalArray($xml->conditions, "KalturaBaseSegmentCondition");
		}
		if(!is_null($jsonObject) && isset($jsonObject->conditions))
		{
			if(empty($jsonObject->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->conditions, "KalturaBaseSegmentCondition");
		}
		if(!is_null($xml) && count($xml->conditionsOperator))
			$this->conditionsOperator = (string)$xml->conditionsOperator;
		if(!is_null($jsonObject) && isset($jsonObject->conditionsOperator))
			$this->conditionsOperator = (string)$jsonObject->conditionsOperator;
		if(!is_null($xml) && count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaBaseSegmentAction");
		}
		if(!is_null($jsonObject) && isset($jsonObject->actions))
		{
			if(empty($jsonObject->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->actions, "KalturaBaseSegmentAction");
		}
		if(!is_null($xml) && count($xml->value) && !empty($xml->value))
			$this->value = Kaltura_Client_ParseUtils::unmarshalObject($xml->value, "KalturaBaseSegmentValue");
		if(!is_null($jsonObject) && isset($jsonObject->value) && !empty($jsonObject->value))
			$this->value = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->value, "KalturaBaseSegmentValue");
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->executeDate))
			$this->executeDate = (string)$xml->executeDate;
		if(!is_null($jsonObject) && isset($jsonObject->executeDate))
			$this->executeDate = (string)$jsonObject->executeDate;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->assetUserRuleId))
			$this->assetUserRuleId = (string)$xml->assetUserRuleId;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleId))
			$this->assetUserRuleId = (string)$jsonObject->assetUserRuleId;
	}
	/**
	 * Id of segmentation type
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name of segmentation type
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Description of segmentation type
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Segmentation conditions - can be empty
	 *
	 * @var Kaltura_Client_Type_BaseSegmentCondition[]
	 */
	public $conditions;

	/**
	 * Boolean operator between segmentation type&#39;s conditions - defaults to &quot;And&quot;
	 *
	 * @var Kaltura_Client_Enum_BooleanOperator
	 */
	public $conditionsOperator = null;

	/**
	 * Segmentation conditions - can be empty
	 *
	 * @var Kaltura_Client_Type_BaseSegmentAction[]
	 */
	public $actions;

	/**
	 * Segmentation values - can be empty (so only one segment will be created)
	 *
	 * @var Kaltura_Client_Type_BaseSegmentValue
	 */
	public $value;

	/**
	 * Create date of segmentation type
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Update date of segmentation type
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Last date of execution of segmentation type
	 *
	 * @var bigint
	 * @readonly
	 */
	public $executeDate = null;

	/**
	 * Segmentation type version
	 *
	 * @var bigint
	 * @readonly
	 */
	public $version = null;

	/**
	 * Asset User Rule Id
	 *
	 * @var bigint
	 * @insertonly
	 */
	public $assetUserRuleId = null;


}

