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
class Kaltura_Client_Type_ConfigurationGroup extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConfigurationGroup';
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
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
		{
			if(!empty($jsonObject->isDefault) && ((int) $jsonObject->isDefault === 1 || strtolower((string)$jsonObject->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($xml) && count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::unmarshalArray($xml->tags, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->tags))
		{
			if(empty($jsonObject->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->tags, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->numberOfDevices))
			$this->numberOfDevices = (string)$xml->numberOfDevices;
		if(!is_null($jsonObject) && isset($jsonObject->numberOfDevices))
			$this->numberOfDevices = (string)$jsonObject->numberOfDevices;
		if(!is_null($xml) && count($xml->configurationIdentifiers))
		{
			if(empty($xml->configurationIdentifiers))
				$this->configurationIdentifiers = array();
			else
				$this->configurationIdentifiers = Kaltura_Client_ParseUtils::unmarshalArray($xml->configurationIdentifiers, "KalturaConfigurationIdentifier");
		}
		if(!is_null($jsonObject) && isset($jsonObject->configurationIdentifiers))
		{
			if(empty($jsonObject->configurationIdentifiers))
				$this->configurationIdentifiers = array();
			else
				$this->configurationIdentifiers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->configurationIdentifiers, "KalturaConfigurationIdentifier");
		}
	}
	/**
	 * Configuration group identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Configuration group name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Partner id
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Is default
	 *
	 * @var bool
	 * @insertonly
	 */
	public $isDefault = null;

	/**
	 * tags
	 *
	 * @var array of KalturaStringValue
	 * @readonly
	 */
	public $tags;

	/**
	 * Number of devices
	 *
	 * @var bigint
	 * @readonly
	 */
	public $numberOfDevices = null;

	/**
	 * Configuration identifiers
	 *
	 * @var array of KalturaConfigurationIdentifier
	 * @readonly
	 */
	public $configurationIdentifiers;


}

