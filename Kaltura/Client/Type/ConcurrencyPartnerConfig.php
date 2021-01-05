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
class Kaltura_Client_Type_ConcurrencyPartnerConfig extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaConcurrencyPartnerConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->deviceFamilyIds))
			$this->deviceFamilyIds = (string)$xml->deviceFamilyIds;
		if(count($xml->evictionPolicy))
			$this->evictionPolicy = (string)$xml->evictionPolicy;
		if(count($xml->concurrencyThresholdInSeconds))
			$this->concurrencyThresholdInSeconds = (string)$xml->concurrencyThresholdInSeconds;
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


}

