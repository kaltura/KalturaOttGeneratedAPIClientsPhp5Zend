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
class Kaltura_Client_Type_RollingDeviceRemovalData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRollingDeviceRemovalData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->rollingDeviceRemovalPolicy))
		{
			if(isset($xml->rollingDeviceRemovalPolicy->item) && count($xml->rollingDeviceRemovalPolicy->item))
				$this->multiLingual_rollingDeviceRemovalPolicy = Kaltura_Client_ParseUtils::unmarshalArray($xml->rollingDeviceRemovalPolicy, '');
			else
				$this->rollingDeviceRemovalPolicy = (string)$xml->rollingDeviceRemovalPolicy;
		}
		if(count($xml->rollingDeviceRemovalFamilyIds))
		{
			if(isset($xml->rollingDeviceRemovalFamilyIds->item) && count($xml->rollingDeviceRemovalFamilyIds->item))
				$this->multiLingual_rollingDeviceRemovalFamilyIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->rollingDeviceRemovalFamilyIds, '');
			else
				$this->rollingDeviceRemovalFamilyIds = (string)$xml->rollingDeviceRemovalFamilyIds;
		}
	}
	/**
	 * Rolling Device Policy
	 *
	 * @var Kaltura_Client_Enum_RollingDevicePolicy
	 */
	public $rollingDeviceRemovalPolicy = null;

	/**
	 * Rolling Device Policy in a CSV style
	 *
	 * @var string
	 */
	public $rollingDeviceRemovalFamilyIds = null;


}

