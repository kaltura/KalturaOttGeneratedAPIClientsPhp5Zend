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
class Kaltura_Client_Type_NumberMetaConstraint extends Kaltura_Client_Type_BaseAttributeConstraint
{
	public function getKalturaObjectType()
	{
		return 'KalturaNumberMetaConstraint';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->equals))
			$this->equals = (string)$xml->equals;
		if(!is_null($jsonObject) && isset($jsonObject->equals))
			$this->equals = (string)$jsonObject->equals;
		if(!is_null($xml) && count($xml->greaterThan))
			$this->greaterThan = (string)$xml->greaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->greaterThan))
			$this->greaterThan = (string)$jsonObject->greaterThan;
		if(!is_null($xml) && count($xml->smallerThan))
			$this->smallerThan = (string)$xml->smallerThan;
		if(!is_null($jsonObject) && isset($jsonObject->smallerThan))
			$this->smallerThan = (string)$jsonObject->smallerThan;
	}
	/**
	 * The exact numeric value the field must equal.
	 *
	 * @var bigint
	 */
	public $equals = null;

	/**
	 * The numeric value the field must be greater than.
	 *
	 * @var bigint
	 */
	public $greaterThan = null;

	/**
	 * The numeric value the field must be smaller than.
	 *
	 * @var bigint
	 */
	public $smallerThan = null;


}

