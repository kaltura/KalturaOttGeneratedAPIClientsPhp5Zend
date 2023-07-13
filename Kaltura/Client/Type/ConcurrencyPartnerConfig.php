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
class Kaltura_Client_Type_ConcurrencyPartnerConfig extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaConcurrencyPartnerConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->deviceFamilyIds))
			$this->deviceFamilyIds = (string)$xml->deviceFamilyIds;
		if(!is_null($jsonObject) && isset($jsonObject->deviceFamilyIds))
			$this->deviceFamilyIds = (string)$jsonObject->deviceFamilyIds;
		if(!is_null($xml) && count($xml->evictionPolicy))
			$this->evictionPolicy = (string)$xml->evictionPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->evictionPolicy))
			$this->evictionPolicy = (string)$jsonObject->evictionPolicy;
		if(!is_null($xml) && count($xml->concurrencyThresholdInSeconds))
			$this->concurrencyThresholdInSeconds = (string)$xml->concurrencyThresholdInSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->concurrencyThresholdInSeconds))
			$this->concurrencyThresholdInSeconds = (string)$jsonObject->concurrencyThresholdInSeconds;
		if(!is_null($xml) && count($xml->revokeOnDeviceDelete))
		{
			if(!empty($xml->revokeOnDeviceDelete) && ((int) $xml->revokeOnDeviceDelete === 1 || strtolower((string)$xml->revokeOnDeviceDelete) === 'true'))
				$this->revokeOnDeviceDelete = true;
			else
				$this->revokeOnDeviceDelete = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->revokeOnDeviceDelete))
		{
			if(!empty($jsonObject->revokeOnDeviceDelete) && ((int) $jsonObject->revokeOnDeviceDelete === 1 || strtolower((string)$jsonObject->revokeOnDeviceDelete) === 'true'))
				$this->revokeOnDeviceDelete = true;
			else
				$this->revokeOnDeviceDelete = false;
		}
		if(!is_null($xml) && count($xml->excludeFreeContentFromConcurrency))
		{
			if(!empty($xml->excludeFreeContentFromConcurrency) && ((int) $xml->excludeFreeContentFromConcurrency === 1 || strtolower((string)$xml->excludeFreeContentFromConcurrency) === 'true'))
				$this->excludeFreeContentFromConcurrency = true;
			else
				$this->excludeFreeContentFromConcurrency = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->excludeFreeContentFromConcurrency))
		{
			if(!empty($jsonObject->excludeFreeContentFromConcurrency) && ((int) $jsonObject->excludeFreeContentFromConcurrency === 1 || strtolower((string)$jsonObject->excludeFreeContentFromConcurrency) === 'true'))
				$this->excludeFreeContentFromConcurrency = true;
			else
				$this->excludeFreeContentFromConcurrency = false;
		}
	}
	/**
	 * Comma separated list of device Family Ids order by their priority.
	 *
	 * @var string
	 */
	public $deviceFamilyIds = null;

	/**
	 * Policy of eviction devices
	 *
	 * @var Kaltura_Client_Enum_EvictionPolicyType
	 */
	public $evictionPolicy = null;

	/**
	 * Concurrency threshold in seconds
	 *
	 * @var bigint
	 */
	public $concurrencyThresholdInSeconds = null;

	/**
	 * Revoke on device delete
	 *
	 * @var bool
	 */
	public $revokeOnDeviceDelete = null;

	/**
	 * If set to true then for all concurrency checks in all APIs, system shall exclude free content from counting towards the use of a concurrency slot
	 *
	 * @var bool
	 */
	public $excludeFreeContentFromConcurrency = null;


}

