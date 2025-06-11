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
class Kaltura_Client_Type_GeoBlockRule extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGeoBlockRule';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->countryIds))
			$this->countryIds = (string)$xml->countryIds;
		if(!is_null($jsonObject) && isset($jsonObject->countryIds))
			$this->countryIds = (string)$jsonObject->countryIds;
		if(!is_null($xml) && count($xml->mode))
			$this->mode = (string)$xml->mode;
		if(!is_null($jsonObject) && isset($jsonObject->mode))
			$this->mode = (string)$jsonObject->mode;
		if(!is_null($xml) && count($xml->isProxyRuleEnabled))
		{
			if(!empty($xml->isProxyRuleEnabled) && ((int) $xml->isProxyRuleEnabled === 1 || strtolower((string)$xml->isProxyRuleEnabled) === 'true'))
				$this->isProxyRuleEnabled = true;
			else
				$this->isProxyRuleEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isProxyRuleEnabled))
		{
			if(!empty($jsonObject->isProxyRuleEnabled) && ((int) $jsonObject->isProxyRuleEnabled === 1 || strtolower((string)$jsonObject->isProxyRuleEnabled) === 'true'))
				$this->isProxyRuleEnabled = true;
			else
				$this->isProxyRuleEnabled = false;
		}
		if(!is_null($xml) && count($xml->proxyRuleLevel))
			$this->proxyRuleLevel = (string)$xml->proxyRuleLevel;
		if(!is_null($jsonObject) && isset($jsonObject->proxyRuleLevel))
			$this->proxyRuleLevel = (string)$jsonObject->proxyRuleLevel;
	}
	/**
	 * Geo Block Rule id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Create Date Epoch time in seconds
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Update Date Epoch time in seconds
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * comma separated string representing list of countries that the rule shall apply to
	 *
	 * @var string
	 */
	public $countryIds = null;

	/**
	 * mode - Defines the geo-blocking strategy based on user location.
	 *             AllowOnlySelected - Implements a restrictive whitelist approach where content is only accessible from explicitly selected countries. All other countries are blocked by default.
	 *             BlockOnlySelected - Implements a permissive blacklist approach where content is accessible from all countries except those explicitly selected for blocking.
	 *
	 * @var Kaltura_Client_Enum_GeoBlockMode
	 */
	public $mode = null;

	/**
	 * Should geo block rule check proxy as well
	 *
	 * @var bool
	 */
	public $isProxyRuleEnabled = null;

	/**
	 * Level of proxy rule check - medium or high
	 *
	 * @var Kaltura_Client_Enum_ProxyRuleLevel
	 */
	public $proxyRuleLevel = null;


}

