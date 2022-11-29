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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
		{
			if(isset($xml->id->item) && count($xml->id->item))
				$this->multiLingual_id = Kaltura_Client_ParseUtils::unmarshalArray($xml->id, '');
			else
				$this->id = (string)$xml->id;
		}
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->configurationGroupId))
		{
			if(isset($xml->configurationGroupId->item) && count($xml->configurationGroupId->item))
				$this->multiLingual_configurationGroupId = Kaltura_Client_ParseUtils::unmarshalArray($xml->configurationGroupId, '');
			else
				$this->configurationGroupId = (string)$xml->configurationGroupId;
		}
		if(count($xml->appName))
		{
			if(isset($xml->appName->item) && count($xml->appName->item))
				$this->multiLingual_appName = Kaltura_Client_ParseUtils::unmarshalArray($xml->appName, '');
			else
				$this->appName = (string)$xml->appName;
		}
		if(count($xml->clientVersion))
		{
			if(isset($xml->clientVersion->item) && count($xml->clientVersion->item))
				$this->multiLingual_clientVersion = Kaltura_Client_ParseUtils::unmarshalArray($xml->clientVersion, '');
			else
				$this->clientVersion = (string)$xml->clientVersion;
		}
		if(count($xml->platform))
		{
			if(isset($xml->platform->item) && count($xml->platform->item))
				$this->multiLingual_platform = Kaltura_Client_ParseUtils::unmarshalArray($xml->platform, '');
			else
				$this->platform = (string)$xml->platform;
		}
		if(count($xml->externalPushId))
		{
			if(isset($xml->externalPushId->item) && count($xml->externalPushId->item))
				$this->multiLingual_externalPushId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalPushId, '');
			else
				$this->externalPushId = (string)$xml->externalPushId;
		}
		if(count($xml->isForceUpdate))
		{
			if(!empty($xml->isForceUpdate) && ((int) $xml->isForceUpdate === 1 || strtolower((string)$xml->isForceUpdate) === 'true'))
				$this->isForceUpdate = true;
			else
				$this->isForceUpdate = false;
		}
		if(count($xml->content))
		{
			if(isset($xml->content->item) && count($xml->content->item))
				$this->multiLingual_content = Kaltura_Client_ParseUtils::unmarshalArray($xml->content, '');
			else
				$this->content = (string)$xml->content;
		}
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

