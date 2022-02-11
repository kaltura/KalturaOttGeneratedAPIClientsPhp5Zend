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
class Kaltura_Client_Type_HouseholdDeviceFamilyLimitations extends Kaltura_Client_Type_DeviceFamilyBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdDeviceFamilyLimitations';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->frequency))
			$this->frequency = (int)$xml->frequency;
		if(count($xml->deviceLimit))
			$this->deviceLimit = (int)$xml->deviceLimit;
		if(count($xml->concurrentLimit))
			$this->concurrentLimit = (int)$xml->concurrentLimit;
		if(count($xml->isDefaultDeviceLimit))
		{
			if(!empty($xml->isDefaultDeviceLimit) && ((int) $xml->isDefaultDeviceLimit === 1 || strtolower((string)$xml->isDefaultDeviceLimit) === 'true'))
				$this->isDefaultDeviceLimit = true;
			else
				$this->isDefaultDeviceLimit = false;
		}
		if(count($xml->isDefaultConcurrentLimit))
		{
			if(!empty($xml->isDefaultConcurrentLimit) && ((int) $xml->isDefaultConcurrentLimit === 1 || strtolower((string)$xml->isDefaultConcurrentLimit) === 'true'))
				$this->isDefaultConcurrentLimit = true;
			else
				$this->isDefaultConcurrentLimit = false;
		}
	}
	/**
	 * Allowed device change frequency code
	 *
	 * @var int
	 */
	public $frequency = null;

	/**
	 * Max number of devices allowed for this family
	 *
	 * @var int
	 */
	public $deviceLimit = null;

	/**
	 * Max number of streams allowed for this family
	 *
	 * @var int
	 */
	public $concurrentLimit = null;

	/**
	 * Is the Max number of devices allowed for this family is default value or not
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefaultDeviceLimit = null;

	/**
	 * Is the Max number of streams allowed for this family is default value or not
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefaultConcurrentLimit = null;


}

