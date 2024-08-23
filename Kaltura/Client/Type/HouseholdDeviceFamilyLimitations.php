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
class Kaltura_Client_Type_HouseholdDeviceFamilyLimitations extends Kaltura_Client_Type_DeviceFamilyBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdDeviceFamilyLimitations';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->frequency))
			$this->frequency = (int)$xml->frequency;
		if(!is_null($jsonObject) && isset($jsonObject->frequency))
			$this->frequency = (int)$jsonObject->frequency;
		if(!is_null($xml) && count($xml->deviceLimit))
			$this->deviceLimit = (int)$xml->deviceLimit;
		if(!is_null($jsonObject) && isset($jsonObject->deviceLimit))
			$this->deviceLimit = (int)$jsonObject->deviceLimit;
		if(!is_null($xml) && count($xml->concurrentLimit))
			$this->concurrentLimit = (int)$xml->concurrentLimit;
		if(!is_null($jsonObject) && isset($jsonObject->concurrentLimit))
			$this->concurrentLimit = (int)$jsonObject->concurrentLimit;
		if(!is_null($xml) && count($xml->isDefaultDeviceLimit))
		{
			if(!empty($xml->isDefaultDeviceLimit) && ((int) $xml->isDefaultDeviceLimit === 1 || strtolower((string)$xml->isDefaultDeviceLimit) === 'true'))
				$this->isDefaultDeviceLimit = true;
			else
				$this->isDefaultDeviceLimit = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefaultDeviceLimit))
		{
			if(!empty($jsonObject->isDefaultDeviceLimit) && ((int) $jsonObject->isDefaultDeviceLimit === 1 || strtolower((string)$jsonObject->isDefaultDeviceLimit) === 'true'))
				$this->isDefaultDeviceLimit = true;
			else
				$this->isDefaultDeviceLimit = false;
		}
		if(!is_null($xml) && count($xml->isDefaultConcurrentLimit))
		{
			if(!empty($xml->isDefaultConcurrentLimit) && ((int) $xml->isDefaultConcurrentLimit === 1 || strtolower((string)$xml->isDefaultConcurrentLimit) === 'true'))
				$this->isDefaultConcurrentLimit = true;
			else
				$this->isDefaultConcurrentLimit = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefaultConcurrentLimit))
		{
			if(!empty($jsonObject->isDefaultConcurrentLimit) && ((int) $jsonObject->isDefaultConcurrentLimit === 1 || strtolower((string)$jsonObject->isDefaultConcurrentLimit) === 'true'))
				$this->isDefaultConcurrentLimit = true;
			else
				$this->isDefaultConcurrentLimit = false;
		}
		if(!is_null($xml) && count($xml->isDefaultFrequencyLimit))
		{
			if(!empty($xml->isDefaultFrequencyLimit) && ((int) $xml->isDefaultFrequencyLimit === 1 || strtolower((string)$xml->isDefaultFrequencyLimit) === 'true'))
				$this->isDefaultFrequencyLimit = true;
			else
				$this->isDefaultFrequencyLimit = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefaultFrequencyLimit))
		{
			if(!empty($jsonObject->isDefaultFrequencyLimit) && ((int) $jsonObject->isDefaultFrequencyLimit === 1 || strtolower((string)$jsonObject->isDefaultFrequencyLimit) === 'true'))
				$this->isDefaultFrequencyLimit = true;
			else
				$this->isDefaultFrequencyLimit = false;
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

	/**
	 * Is the Allowed device change frequency code for this family is default value or not
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefaultFrequencyLimit = null;


}

