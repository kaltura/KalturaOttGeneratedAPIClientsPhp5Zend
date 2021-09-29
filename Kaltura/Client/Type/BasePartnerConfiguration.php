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
class Kaltura_Client_Type_BasePartnerConfiguration extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaBasePartnerConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ksExpirationSeconds))
			$this->ksExpirationSeconds = (string)$xml->ksExpirationSeconds;
		if(count($xml->appTokenSessionMaxDurationSeconds))
			$this->appTokenSessionMaxDurationSeconds = (int)$xml->appTokenSessionMaxDurationSeconds;
		if(count($xml->anonymousKSExpirationSeconds))
			$this->anonymousKSExpirationSeconds = (string)$xml->anonymousKSExpirationSeconds;
		if(count($xml->refreshExpirationForPinLoginSeconds))
			$this->refreshExpirationForPinLoginSeconds = (string)$xml->refreshExpirationForPinLoginSeconds;
		if(count($xml->appTokenMaxExpirySeconds))
			$this->appTokenMaxExpirySeconds = (int)$xml->appTokenMaxExpirySeconds;
		if(count($xml->uploadTokenExpirySeconds))
			$this->uploadTokenExpirySeconds = (int)$xml->uploadTokenExpirySeconds;
		if(count($xml->apptokenUserValidationDisabled))
		{
			if(!empty($xml->apptokenUserValidationDisabled) && ((int) $xml->apptokenUserValidationDisabled === 1 || strtolower((string)$xml->apptokenUserValidationDisabled) === 'true'))
				$this->apptokenUserValidationDisabled = true;
			else
				$this->apptokenUserValidationDisabled = false;
		}
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


}

