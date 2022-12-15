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
class Kaltura_Client_Type_ConfigurationGroup extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConfigurationGroup';
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
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::unmarshalArray($xml->tags, "KalturaStringValue");
		}
		if(count($xml->numberOfDevices))
			$this->numberOfDevices = (string)$xml->numberOfDevices;
		if(count($xml->configurationIdentifiers))
		{
			if(empty($xml->configurationIdentifiers))
				$this->configurationIdentifiers = array();
			else
				$this->configurationIdentifiers = Kaltura_Client_ParseUtils::unmarshalArray($xml->configurationIdentifiers, "KalturaConfigurationIdentifier");
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

