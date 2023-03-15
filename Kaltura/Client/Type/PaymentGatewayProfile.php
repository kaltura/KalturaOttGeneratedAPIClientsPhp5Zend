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
class Kaltura_Client_Type_PaymentGatewayProfile extends Kaltura_Client_Type_PaymentGatewayBaseProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaPaymentGatewayProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->isActive))
			$this->isActive = (int)$xml->isActive;
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
			$this->isActive = (int)$jsonObject->isActive;
		if(!is_null($xml) && count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(!is_null($jsonObject) && isset($jsonObject->adapterUrl))
			$this->adapterUrl = (string)$jsonObject->adapterUrl;
		if(!is_null($xml) && count($xml->transactUrl))
			$this->transactUrl = (string)$xml->transactUrl;
		if(!is_null($jsonObject) && isset($jsonObject->transactUrl))
			$this->transactUrl = (string)$jsonObject->transactUrl;
		if(!is_null($xml) && count($xml->statusUrl))
			$this->statusUrl = (string)$xml->statusUrl;
		if(!is_null($jsonObject) && isset($jsonObject->statusUrl))
			$this->statusUrl = (string)$jsonObject->statusUrl;
		if(!is_null($xml) && count($xml->renewUrl))
			$this->renewUrl = (string)$xml->renewUrl;
		if(!is_null($jsonObject) && isset($jsonObject->renewUrl))
			$this->renewUrl = (string)$jsonObject->renewUrl;
		if(!is_null($xml) && count($xml->paymentGatewaySettings))
		{
			if(empty($xml->paymentGatewaySettings))
				$this->paymentGatewaySettings = array();
			else
				$this->paymentGatewaySettings = Kaltura_Client_ParseUtils::unmarshalMap($xml->paymentGatewaySettings, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->paymentGatewaySettings))
		{
			if(empty($jsonObject->paymentGatewaySettings))
				$this->paymentGatewaySettings = array();
			else
				$this->paymentGatewaySettings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->paymentGatewaySettings, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->externalIdentifier))
			$this->externalIdentifier = (string)$xml->externalIdentifier;
		if(!is_null($jsonObject) && isset($jsonObject->externalIdentifier))
			$this->externalIdentifier = (string)$jsonObject->externalIdentifier;
		if(!is_null($xml) && count($xml->pendingInterval))
			$this->pendingInterval = (int)$xml->pendingInterval;
		if(!is_null($jsonObject) && isset($jsonObject->pendingInterval))
			$this->pendingInterval = (int)$jsonObject->pendingInterval;
		if(!is_null($xml) && count($xml->pendingRetries))
			$this->pendingRetries = (int)$xml->pendingRetries;
		if(!is_null($jsonObject) && isset($jsonObject->pendingRetries))
			$this->pendingRetries = (int)$jsonObject->pendingRetries;
		if(!is_null($xml) && count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
		if(!is_null($jsonObject) && isset($jsonObject->sharedSecret))
			$this->sharedSecret = (string)$jsonObject->sharedSecret;
		if(!is_null($xml) && count($xml->renewIntervalMinutes))
			$this->renewIntervalMinutes = (int)$xml->renewIntervalMinutes;
		if(!is_null($jsonObject) && isset($jsonObject->renewIntervalMinutes))
			$this->renewIntervalMinutes = (int)$jsonObject->renewIntervalMinutes;
		if(!is_null($xml) && count($xml->renewStartMinutes))
			$this->renewStartMinutes = (int)$xml->renewStartMinutes;
		if(!is_null($jsonObject) && isset($jsonObject->renewStartMinutes))
			$this->renewStartMinutes = (int)$jsonObject->renewStartMinutes;
		if(!is_null($xml) && count($xml->externalVerification))
		{
			if(!empty($xml->externalVerification) && ((int) $xml->externalVerification === 1 || strtolower((string)$xml->externalVerification) === 'true'))
				$this->externalVerification = true;
			else
				$this->externalVerification = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->externalVerification))
		{
			if(!empty($jsonObject->externalVerification) && ((int) $jsonObject->externalVerification === 1 || strtolower((string)$jsonObject->externalVerification) === 'true'))
				$this->externalVerification = true;
			else
				$this->externalVerification = false;
		}
		if(!is_null($xml) && count($xml->isAsyncPolicy))
		{
			if(!empty($xml->isAsyncPolicy) && ((int) $xml->isAsyncPolicy === 1 || strtolower((string)$xml->isAsyncPolicy) === 'true'))
				$this->isAsyncPolicy = true;
			else
				$this->isAsyncPolicy = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isAsyncPolicy))
		{
			if(!empty($jsonObject->isAsyncPolicy) && ((int) $jsonObject->isAsyncPolicy === 1 || strtolower((string)$jsonObject->isAsyncPolicy) === 'true'))
				$this->isAsyncPolicy = true;
			else
				$this->isAsyncPolicy = false;
		}
	}
	/**
	 * Payment gateway is active status
	 *
	 * @var int
	 */
	public $isActive = null;

	/**
	 * Payment gateway adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * Payment gateway transact URL
	 *
	 * @var string
	 */
	public $transactUrl = null;

	/**
	 * Payment gateway status URL
	 *
	 * @var string
	 */
	public $statusUrl = null;

	/**
	 * Payment gateway renew URL
	 *
	 * @var string
	 */
	public $renewUrl = null;

	/**
	 * Payment gateway extra parameters
	 *
	 * @var map
	 */
	public $paymentGatewaySettings;

	/**
	 * Payment gateway external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Pending Interval in minutes
	 *
	 * @var int
	 */
	public $pendingInterval = null;

	/**
	 * Pending Retries
	 *
	 * @var int
	 */
	public $pendingRetries = null;

	/**
	 * Shared Secret
	 *
	 * @var string
	 */
	public $sharedSecret = null;

	/**
	 * Renew Interval Minutes
	 *
	 * @var int
	 */
	public $renewIntervalMinutes = null;

	/**
	 * Renew Start Minutes
	 *
	 * @var int
	 */
	public $renewStartMinutes = null;

	/**
	 * Payment gateway external verification
	 *
	 * @var bool
	 */
	public $externalVerification = null;

	/**
	 * Payment gateway - Support asynchronous purchase
	 *
	 * @var bool
	 */
	public $isAsyncPolicy = null;


}

