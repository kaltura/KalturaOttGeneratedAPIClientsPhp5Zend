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
class Kaltura_Client_Type_GeneralPartnerConfig extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaGeneralPartnerConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->partnerName))
			$this->partnerName = (string)$xml->partnerName;
		if(!is_null($jsonObject) && isset($jsonObject->partnerName))
			$this->partnerName = (string)$jsonObject->partnerName;
		if(!is_null($xml) && count($xml->mainLanguage))
			$this->mainLanguage = (int)$xml->mainLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->mainLanguage))
			$this->mainLanguage = (int)$jsonObject->mainLanguage;
		if(!is_null($xml) && count($xml->secondaryLanguages))
			$this->secondaryLanguages = (string)$xml->secondaryLanguages;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryLanguages))
			$this->secondaryLanguages = (string)$jsonObject->secondaryLanguages;
		if(!is_null($xml) && count($xml->deleteMediaPolicy))
			$this->deleteMediaPolicy = (string)$xml->deleteMediaPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->deleteMediaPolicy))
			$this->deleteMediaPolicy = (string)$jsonObject->deleteMediaPolicy;
		if(!is_null($xml) && count($xml->mainCurrency))
			$this->mainCurrency = (int)$xml->mainCurrency;
		if(!is_null($jsonObject) && isset($jsonObject->mainCurrency))
			$this->mainCurrency = (int)$jsonObject->mainCurrency;
		if(!is_null($xml) && count($xml->secondaryCurrencies))
			$this->secondaryCurrencies = (string)$xml->secondaryCurrencies;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryCurrencies))
			$this->secondaryCurrencies = (string)$jsonObject->secondaryCurrencies;
		if(!is_null($xml) && count($xml->downgradePolicy))
			$this->downgradePolicy = (string)$xml->downgradePolicy;
		if(!is_null($jsonObject) && isset($jsonObject->downgradePolicy))
			$this->downgradePolicy = (string)$jsonObject->downgradePolicy;
		if(!is_null($xml) && count($xml->downgradePriorityFamilyIds))
			$this->downgradePriorityFamilyIds = (string)$xml->downgradePriorityFamilyIds;
		if(!is_null($jsonObject) && isset($jsonObject->downgradePriorityFamilyIds))
			$this->downgradePriorityFamilyIds = (string)$jsonObject->downgradePriorityFamilyIds;
		if(!is_null($xml) && count($xml->mailSettings))
			$this->mailSettings = (string)$xml->mailSettings;
		if(!is_null($jsonObject) && isset($jsonObject->mailSettings))
			$this->mailSettings = (string)$jsonObject->mailSettings;
		if(!is_null($xml) && count($xml->dateFormat))
			$this->dateFormat = (string)$xml->dateFormat;
		if(!is_null($jsonObject) && isset($jsonObject->dateFormat))
			$this->dateFormat = (string)$jsonObject->dateFormat;
		if(!is_null($xml) && count($xml->householdLimitationModule))
			$this->householdLimitationModule = (int)$xml->householdLimitationModule;
		if(!is_null($jsonObject) && isset($jsonObject->householdLimitationModule))
			$this->householdLimitationModule = (int)$jsonObject->householdLimitationModule;
		if(!is_null($xml) && count($xml->enableRegionFiltering))
		{
			if(!empty($xml->enableRegionFiltering) && ((int) $xml->enableRegionFiltering === 1 || strtolower((string)$xml->enableRegionFiltering) === 'true'))
				$this->enableRegionFiltering = true;
			else
				$this->enableRegionFiltering = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enableRegionFiltering))
		{
			if(!empty($jsonObject->enableRegionFiltering) && ((int) $jsonObject->enableRegionFiltering === 1 || strtolower((string)$jsonObject->enableRegionFiltering) === 'true'))
				$this->enableRegionFiltering = true;
			else
				$this->enableRegionFiltering = false;
		}
		if(!is_null($xml) && count($xml->defaultRegion))
			$this->defaultRegion = (int)$xml->defaultRegion;
		if(!is_null($jsonObject) && isset($jsonObject->defaultRegion))
			$this->defaultRegion = (int)$jsonObject->defaultRegion;
		if(!is_null($xml) && count($xml->rollingDeviceData) && !empty($xml->rollingDeviceData))
			$this->rollingDeviceData = Kaltura_Client_ParseUtils::unmarshalObject($xml->rollingDeviceData, "KalturaRollingDeviceRemovalData");
		if(!is_null($jsonObject) && isset($jsonObject->rollingDeviceData) && !empty($jsonObject->rollingDeviceData))
			$this->rollingDeviceData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->rollingDeviceData, "KalturaRollingDeviceRemovalData");
		if(!is_null($xml) && count($xml->linearWatchHistoryThreshold))
			$this->linearWatchHistoryThreshold = (int)$xml->linearWatchHistoryThreshold;
		if(!is_null($jsonObject) && isset($jsonObject->linearWatchHistoryThreshold))
			$this->linearWatchHistoryThreshold = (int)$jsonObject->linearWatchHistoryThreshold;
		if(!is_null($xml) && count($xml->finishedPercentThreshold))
			$this->finishedPercentThreshold = (int)$xml->finishedPercentThreshold;
		if(!is_null($jsonObject) && isset($jsonObject->finishedPercentThreshold))
			$this->finishedPercentThreshold = (int)$jsonObject->finishedPercentThreshold;
		if(!is_null($xml) && count($xml->suspensionProfileInheritanceType))
			$this->suspensionProfileInheritanceType = (string)$xml->suspensionProfileInheritanceType;
		if(!is_null($jsonObject) && isset($jsonObject->suspensionProfileInheritanceType))
			$this->suspensionProfileInheritanceType = (string)$jsonObject->suspensionProfileInheritanceType;
		if(!is_null($xml) && count($xml->allowDeviceMobility))
		{
			if(!empty($xml->allowDeviceMobility) && ((int) $xml->allowDeviceMobility === 1 || strtolower((string)$xml->allowDeviceMobility) === 'true'))
				$this->allowDeviceMobility = true;
			else
				$this->allowDeviceMobility = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowDeviceMobility))
		{
			if(!empty($jsonObject->allowDeviceMobility) && ((int) $jsonObject->allowDeviceMobility === 1 || strtolower((string)$jsonObject->allowDeviceMobility) === 'true'))
				$this->allowDeviceMobility = true;
			else
				$this->allowDeviceMobility = false;
		}
		if(!is_null($xml) && count($xml->enableMultiLcns))
		{
			if(!empty($xml->enableMultiLcns) && ((int) $xml->enableMultiLcns === 1 || strtolower((string)$xml->enableMultiLcns) === 'true'))
				$this->enableMultiLcns = true;
			else
				$this->enableMultiLcns = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enableMultiLcns))
		{
			if(!empty($jsonObject->enableMultiLcns) && ((int) $jsonObject->enableMultiLcns === 1 || strtolower((string)$jsonObject->enableMultiLcns) === 'true'))
				$this->enableMultiLcns = true;
			else
				$this->enableMultiLcns = false;
		}
	}
	/**
	 * Partner name
	 *
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * Main metadata language
	 *
	 * @var int
	 */
	public $mainLanguage = null;

	/**
	 * A list of comma separated languages ids.
	 *
	 * @var string
	 */
	public $secondaryLanguages = null;

	/**
	 * Delete media policy
	 *
	 * @var Kaltura_Client_Enum_DeleteMediaPolicy
	 */
	public $deleteMediaPolicy = null;

	/**
	 * Main currency
	 *
	 * @var int
	 */
	public $mainCurrency = null;

	/**
	 * A list of comma separated currency ids.
	 *
	 * @var string
	 */
	public $secondaryCurrencies = null;

	/**
	 * Downgrade policy
	 *
	 * @var Kaltura_Client_Enum_DowngradePolicy
	 */
	public $downgradePolicy = null;

	/**
	 * Priority Family Ids to remove devices on downgrade (first in the list first to remove)
	 *
	 * @var string
	 */
	public $downgradePriorityFamilyIds = null;

	/**
	 * Mail settings
	 *
	 * @var string
	 */
	public $mailSettings = null;

	/**
	 * Default Date Format for Email notifications (default should be: DD Month YYYY)
	 *
	 * @var string
	 */
	public $dateFormat = null;

	/**
	 * Household limitation&#160;module
	 *
	 * @var int
	 */
	public $householdLimitationModule = null;

	/**
	 * Enable Region Filtering
	 *
	 * @var bool
	 */
	public $enableRegionFiltering = null;

	/**
	 * Default Region
	 *
	 * @var int
	 */
	public $defaultRegion = null;

	/**
	 * Rolling Device Policy
	 *
	 * @var Kaltura_Client_Type_RollingDeviceRemovalData
	 */
	public $rollingDeviceData;

	/**
	 * minimum bookmark position of a linear channel to be included in a watch history
	 *
	 * @var int
	 */
	public $linearWatchHistoryThreshold = null;

	/**
	 * Finished PercentThreshold
	 *
	 * @var int
	 */
	public $finishedPercentThreshold = null;

	/**
	 * Suspension Profile Inheritance
	 *
	 * @var Kaltura_Client_Enum_SuspensionProfileInheritanceType
	 */
	public $suspensionProfileInheritanceType = null;

	/**
	 * Allow Device Mobility
	 *
	 * @var bool
	 */
	public $allowDeviceMobility = null;

	/**
	 * Enable multi LCNs per linear channel
	 *
	 * @var bool
	 */
	public $enableMultiLcns = null;


}

