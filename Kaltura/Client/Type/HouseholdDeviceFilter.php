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
class Kaltura_Client_Type_HouseholdDeviceFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdDeviceFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->householdIdEqual))
			$this->householdIdEqual = (int)$xml->householdIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->householdIdEqual))
			$this->householdIdEqual = (int)$jsonObject->householdIdEqual;
		if(!is_null($xml) && count($xml->deviceFamilyIdIn))
			$this->deviceFamilyIdIn = (string)$xml->deviceFamilyIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->deviceFamilyIdIn))
			$this->deviceFamilyIdIn = (string)$jsonObject->deviceFamilyIdIn;
		if(!is_null($xml) && count($xml->externalIdEqual))
			$this->externalIdEqual = (string)$xml->externalIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->externalIdEqual))
			$this->externalIdEqual = (string)$jsonObject->externalIdEqual;
	}
	/**
	 * The identifier of the household
	 *
	 * @var int
	 */
	public $householdIdEqual = null;

	/**
	 * Device family Ids
	 *
	 * @var string
	 */
	public $deviceFamilyIdIn = null;

	/**
	 * External Id
	 *
	 * @var string
	 */
	public $externalIdEqual = null;


}

