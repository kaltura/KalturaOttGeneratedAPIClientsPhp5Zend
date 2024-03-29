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
class Kaltura_Client_Type_Configurations extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConfigurations';
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
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->configurationGroupId))
			$this->configurationGroupId = (string)$xml->configurationGroupId;
		if(!is_null($jsonObject) && isset($jsonObject->configurationGroupId))
			$this->configurationGroupId = (string)$jsonObject->configurationGroupId;
		if(!is_null($xml) && count($xml->appName))
			$this->appName = (string)$xml->appName;
		if(!is_null($jsonObject) && isset($jsonObject->appName))
			$this->appName = (string)$jsonObject->appName;
		if(!is_null($xml) && count($xml->clientVersion))
			$this->clientVersion = (string)$xml->clientVersion;
		if(!is_null($jsonObject) && isset($jsonObject->clientVersion))
			$this->clientVersion = (string)$jsonObject->clientVersion;
		if(!is_null($xml) && count($xml->platform))
			$this->platform = (string)$xml->platform;
		if(!is_null($jsonObject) && isset($jsonObject->platform))
			$this->platform = (string)$jsonObject->platform;
		if(!is_null($xml) && count($xml->externalPushId))
			$this->externalPushId = (string)$xml->externalPushId;
		if(!is_null($jsonObject) && isset($jsonObject->externalPushId))
			$this->externalPushId = (string)$jsonObject->externalPushId;
		if(!is_null($xml) && count($xml->isForceUpdate))
		{
			if(!empty($xml->isForceUpdate) && ((int) $xml->isForceUpdate === 1 || strtolower((string)$xml->isForceUpdate) === 'true'))
				$this->isForceUpdate = true;
			else
				$this->isForceUpdate = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isForceUpdate))
		{
			if(!empty($jsonObject->isForceUpdate) && ((int) $jsonObject->isForceUpdate === 1 || strtolower((string)$jsonObject->isForceUpdate) === 'true'))
				$this->isForceUpdate = true;
			else
				$this->isForceUpdate = false;
		}
		if(!is_null($xml) && count($xml->content))
			$this->content = (string)$xml->content;
		if(!is_null($jsonObject) && isset($jsonObject->content))
			$this->content = (string)$jsonObject->content;
	}
	/**
	 * Configuration id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Partner id
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Configuration group id
	 *
	 * @var string
	 */
	public $configurationGroupId = null;

	/**
	 * Application name
	 *
	 * @var string
	 */
	public $appName = null;

	/**
	 * Client version
	 *
	 * @var string
	 */
	public $clientVersion = null;

	/**
	 * Platform: Android/iOS/WindowsPhone/Blackberry/STB/CTV/Other
	 *
	 * @var Kaltura_Client_Enum_Platform
	 */
	public $platform = null;

	/**
	 * External push id
	 *
	 * @var string
	 */
	public $externalPushId = null;

	/**
	 * The default value for &quot;isForceUpdate&quot; is &quot;FALSE&quot;. When &quot;isForceUpdate&quot; is not populated it will revert to its default value.
	 *
	 * @var bool
	 */
	public $isForceUpdate = null;

	/**
	 * Content
	 *
	 * @var string
	 */
	public $content = null;


}

