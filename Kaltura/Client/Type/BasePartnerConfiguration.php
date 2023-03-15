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
class Kaltura_Client_Type_BasePartnerConfiguration extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaBasePartnerConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ksExpirationSeconds))
			$this->ksExpirationSeconds = (string)$xml->ksExpirationSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->ksExpirationSeconds))
			$this->ksExpirationSeconds = (string)$jsonObject->ksExpirationSeconds;
		if(!is_null($xml) && count($xml->appTokenSessionMaxDurationSeconds))
			$this->appTokenSessionMaxDurationSeconds = (int)$xml->appTokenSessionMaxDurationSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->appTokenSessionMaxDurationSeconds))
			$this->appTokenSessionMaxDurationSeconds = (int)$jsonObject->appTokenSessionMaxDurationSeconds;
		if(!is_null($xml) && count($xml->anonymousKSExpirationSeconds))
			$this->anonymousKSExpirationSeconds = (string)$xml->anonymousKSExpirationSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->anonymousKSExpirationSeconds))
			$this->anonymousKSExpirationSeconds = (string)$jsonObject->anonymousKSExpirationSeconds;
		if(!is_null($xml) && count($xml->refreshExpirationForPinLoginSeconds))
			$this->refreshExpirationForPinLoginSeconds = (string)$xml->refreshExpirationForPinLoginSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->refreshExpirationForPinLoginSeconds))
			$this->refreshExpirationForPinLoginSeconds = (string)$jsonObject->refreshExpirationForPinLoginSeconds;
		if(!is_null($xml) && count($xml->appTokenMaxExpirySeconds))
			$this->appTokenMaxExpirySeconds = (int)$xml->appTokenMaxExpirySeconds;
		if(!is_null($jsonObject) && isset($jsonObject->appTokenMaxExpirySeconds))
			$this->appTokenMaxExpirySeconds = (int)$jsonObject->appTokenMaxExpirySeconds;
		if(!is_null($xml) && count($xml->autoRefreshAppToken))
		{
			if(!empty($xml->autoRefreshAppToken) && ((int) $xml->autoRefreshAppToken === 1 || strtolower((string)$xml->autoRefreshAppToken) === 'true'))
				$this->autoRefreshAppToken = true;
			else
				$this->autoRefreshAppToken = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->autoRefreshAppToken))
		{
			if(!empty($jsonObject->autoRefreshAppToken) && ((int) $jsonObject->autoRefreshAppToken === 1 || strtolower((string)$jsonObject->autoRefreshAppToken) === 'true'))
				$this->autoRefreshAppToken = true;
			else
				$this->autoRefreshAppToken = false;
		}
		if(!is_null($xml) && count($xml->uploadTokenExpirySeconds))
			$this->uploadTokenExpirySeconds = (int)$xml->uploadTokenExpirySeconds;
		if(!is_null($jsonObject) && isset($jsonObject->uploadTokenExpirySeconds))
			$this->uploadTokenExpirySeconds = (int)$jsonObject->uploadTokenExpirySeconds;
		if(!is_null($xml) && count($xml->apptokenUserValidationDisabled))
		{
			if(!empty($xml->apptokenUserValidationDisabled) && ((int) $xml->apptokenUserValidationDisabled === 1 || strtolower((string)$xml->apptokenUserValidationDisabled) === 'true'))
				$this->apptokenUserValidationDisabled = true;
			else
				$this->apptokenUserValidationDisabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->apptokenUserValidationDisabled))
		{
			if(!empty($jsonObject->apptokenUserValidationDisabled) && ((int) $jsonObject->apptokenUserValidationDisabled === 1 || strtolower((string)$jsonObject->apptokenUserValidationDisabled) === 'true'))
				$this->apptokenUserValidationDisabled = true;
			else
				$this->apptokenUserValidationDisabled = false;
		}
		if(!is_null($xml) && count($xml->epgFeatureVersion))
			$this->epgFeatureVersion = (int)$xml->epgFeatureVersion;
		if(!is_null($jsonObject) && isset($jsonObject->epgFeatureVersion))
			$this->epgFeatureVersion = (int)$jsonObject->epgFeatureVersion;
	}
	/**
	 * KSExpirationSeconds
	 *
	 * @var bigint
	 */
	public $ksExpirationSeconds = null;

	/**
	 * AppTokenSessionMaxDurationSeconds
	 *
	 * @var int
	 */
	public $appTokenSessionMaxDurationSeconds = null;

	/**
	 * AnonymousKSExpirationSeconds
	 *
	 * @var bigint
	 */
	public $anonymousKSExpirationSeconds = null;

	/**
	 * RefreshExpirationForPinLoginSeconds
	 *
	 * @var bigint
	 */
	public $refreshExpirationForPinLoginSeconds = null;

	/**
	 * AppTokenMaxExpirySeconds
	 *
	 * @var int
	 */
	public $appTokenMaxExpirySeconds = null;

	/**
	 * AutoRefreshAppToken
	 *
	 * @var bool
	 */
	public $autoRefreshAppToken = null;

	/**
	 * uploadTokenExpirySeconds
	 *
	 * @var int
	 */
	public $uploadTokenExpirySeconds = null;

	/**
	 * apptokenUserValidationDisabled
	 *
	 * @var bool
	 */
	public $apptokenUserValidationDisabled = null;

	/**
	 * epgFeatureVersion
	 *             defines the epg feature version from version 1 to version 3
	 *             if not provided v2 will be used
	 *
	 * @var int
	 */
	public $epgFeatureVersion = null;


}

