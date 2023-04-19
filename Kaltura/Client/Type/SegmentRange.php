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
class Kaltura_Client_Type_SegmentRange extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSegmentRange';
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
		if(!is_null($xml) && count($xml->systematicName))
			$this->systematicName = (string)$xml->systematicName;
		if(!is_null($jsonObject) && isset($jsonObject->systematicName))
			$this->systematicName = (string)$jsonObject->systematicName;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->gte))
			$this->gte = (float)$xml->gte;
		if(!is_null($jsonObject) && isset($jsonObject->gte))
			$this->gte = (float)$jsonObject->gte;
		if(!is_null($xml) && count($xml->gt))
			$this->gt = (float)$xml->gt;
		if(!is_null($jsonObject) && isset($jsonObject->gt))
			$this->gt = (float)$jsonObject->gt;
		if(!is_null($xml) && count($xml->lte))
			$this->lte = (float)$xml->lte;
		if(!is_null($jsonObject) && isset($jsonObject->lte))
			$this->lte = (float)$jsonObject->lte;
		if(!is_null($xml) && count($xml->lt))
			$this->lt = (float)$xml->lt;
		if(!is_null($jsonObject) && isset($jsonObject->lt))
			$this->lt = (float)$jsonObject->lt;
		if(!is_null($xml) && count($xml->equals))
			$this->equals = (float)$xml->equals;
		if(!is_null($jsonObject) && isset($jsonObject->equals))
			$this->equals = (float)$jsonObject->equals;
	}
	/**
	 * Id of segment
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Systematic name of segment
	 *
	 * @var string
	 */
	public $systematicName = null;

	/**
	 * Specific segment name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Greater than or equals &gt;=
	 *
	 * @var float
	 */
	public $gte = null;

	/**
	 * Greater than &gt;
	 *
	 * @var float
	 */
	public $gt = null;

	/**
	 * Less than or equals
	 *
	 * @var float
	 */
	public $lte = null;

	/**
	 * Less than
	 *
	 * @var float
	 */
	public $lt = null;

	/**
	 * Equals
	 *
	 * @var float
	 */
	public $equals = null;


}

