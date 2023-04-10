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
class Kaltura_Client_Type_EngagementAdapter extends Kaltura_Client_Type_EngagementAdapterBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEngagementAdapter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->isActive))
		{
			if(!empty($xml->isActive) && ((int) $xml->isActive === 1 || strtolower((string)$xml->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isActive))
		{
			if(!empty($jsonObject->isActive) && ((int) $jsonObject->isActive === 1 || strtolower((string)$jsonObject->isActive) === 'true'))
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(!is_null($xml) && count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(!is_null($jsonObject) && isset($jsonObject->adapterUrl))
			$this->adapterUrl = (string)$jsonObject->adapterUrl;
		if(!is_null($xml) && count($xml->providerUrl))
			$this->providerUrl = (string)$xml->providerUrl;
		if(!is_null($jsonObject) && isset($jsonObject->providerUrl))
			$this->providerUrl = (string)$jsonObject->providerUrl;
		if(!is_null($xml) && count($xml->engagementAdapterSettings))
		{
			if(empty($xml->engagementAdapterSettings))
				$this->engagementAdapterSettings = array();
			else
				$this->engagementAdapterSettings = Kaltura_Client_ParseUtils::unmarshalMap($xml->engagementAdapterSettings, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->engagementAdapterSettings))
		{
			if(empty($jsonObject->engagementAdapterSettings))
				$this->engagementAdapterSettings = array();
			else
				$this->engagementAdapterSettings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->engagementAdapterSettings, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
		if(!is_null($jsonObject) && isset($jsonObject->sharedSecret))
			$this->sharedSecret = (string)$jsonObject->sharedSecret;
	}
	/**
	 * Engagement adapter active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Engagement adapter adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * Engagement provider adapter URL
	 *
	 * @var string
	 */
	public $providerUrl = null;

	/**
	 * Engagement adapter extra parameters
	 *
	 * @var map
	 */
	public $engagementAdapterSettings;

	/**
	 * Shared Secret
	 *
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;


}

