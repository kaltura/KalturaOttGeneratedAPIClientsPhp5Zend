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
class Kaltura_Client_Type_SegmentRange extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSegmentRange';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->systematicName))
			$this->systematicName = (string)$xml->systematicName;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->gte))
			$this->gte = (float)$xml->gte;
		if(count($xml->gt))
			$this->gt = (float)$xml->gt;
		if(count($xml->lte))
			$this->lte = (float)$xml->lte;
		if(count($xml->lt))
			$this->lt = (float)$xml->lt;
		if(count($xml->equals))
			$this->equals = (float)$xml->equals;
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

