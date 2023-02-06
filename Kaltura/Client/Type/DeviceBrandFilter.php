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
class Kaltura_Client_Type_DeviceBrandFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeviceBrandFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (string)$xml->idEqual;
		if(count($xml->deviceFamilyIdEqual))
			$this->deviceFamilyIdEqual = (string)$xml->deviceFamilyIdEqual;
		if(count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
	}
	/**
	 * Filter the device brand with this identifier.
	 *
	 * @var bigint
	 */
	public $idEqual = null;

	/**
	 * Filter the device brands with this device family&#39;s identifier.
	 *
	 * @var bigint
	 */
	public $deviceFamilyIdEqual = null;

	/**
	 * Filter the device brand with this name.
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * Filter device brands of this type
	 *
	 * @var Kaltura_Client_Enum_DeviceBrandType
	 */
	public $typeEqual = null;


}

