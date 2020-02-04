<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::unmarshalArray($xml->conditions, "KalturaBaseSegmentCondition");
		}
		if(count($xml->value) && !empty($xml->value))
			$this->value = Kaltura_Client_ParseUtils::unmarshalObject($xml->value, "KalturaBaseSegmentValue");
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->version))
			$this->version = (string)$xml->version;
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
	 * @var array of KalturaBaseSegmentCondition
	 */
	public $conditions;

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
	 * Segmentation type version
	 *
	 * @var bigint
	 * @readonly
	 */
	public $version = null;


}

