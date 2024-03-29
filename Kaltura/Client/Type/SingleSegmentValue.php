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
class Kaltura_Client_Type_SingleSegmentValue extends Kaltura_Client_Type_BaseSegmentValue
{
	public function getKalturaObjectType()
	{
		return 'KalturaSingleSegmentValue';
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
		if(!is_null($xml) && count($xml->affectedUsers))
			$this->affectedUsers = (int)$xml->affectedUsers;
		if(!is_null($jsonObject) && isset($jsonObject->affectedUsers))
			$this->affectedUsers = (int)$jsonObject->affectedUsers;
		if(!is_null($xml) && count($xml->affectedHouseholds))
			$this->affectedHouseholds = (int)$xml->affectedHouseholds;
		if(!is_null($jsonObject) && isset($jsonObject->affectedHouseholds))
			$this->affectedHouseholds = (int)$jsonObject->affectedHouseholds;
	}
	/**
	 * Id of segment
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * The amount of users that are being affected by this Segmentation type
	 *
	 * @var int
	 * @readonly
	 */
	public $affectedUsers = null;

	/**
	 * The amount of households that are being affected by this Segmentation type
	 *
	 * @var int
	 * @readonly
	 */
	public $affectedHouseholds = null;


}

