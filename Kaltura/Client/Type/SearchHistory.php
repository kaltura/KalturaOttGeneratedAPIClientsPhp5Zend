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
class Kaltura_Client_Type_SearchHistory extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSearchHistory';
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
		if(count($xml->filter))
		{
			if(isset($xml->filter->item) && count($xml->filter->item))
				$this->multiLingual_filter = Kaltura_Client_ParseUtils::unmarshalArray($xml->filter, '');
			else
				$this->filter = (string)$xml->filter;
		}
		if(count($xml->language))
		{
			if(isset($xml->language->item) && count($xml->language->item))
				$this->multiLingual_language = Kaltura_Client_ParseUtils::unmarshalArray($xml->language, '');
			else
				$this->language = (string)$xml->language;
		}
		if(count($xml->createdAt))
			$this->createdAt = (string)$xml->createdAt;
		if(count($xml->service))
		{
			if(isset($xml->service->item) && count($xml->service->item))
				$this->multiLingual_service = Kaltura_Client_ParseUtils::unmarshalArray($xml->service, '');
			else
				$this->service = (string)$xml->service;
		}
		if(count($xml->action))
		{
			if(isset($xml->action->item) && count($xml->action->item))
				$this->multiLingual_action = Kaltura_Client_ParseUtils::unmarshalArray($xml->action, '');
			else
				$this->action = (string)$xml->action;
		}
		if(count($xml->deviceId))
		{
			if(isset($xml->deviceId->item) && count($xml->deviceId->item))
				$this->multiLingual_deviceId = Kaltura_Client_ParseUtils::unmarshalArray($xml->deviceId, '');
			else
				$this->deviceId = (string)$xml->deviceId;
		}
	}
	/**
	 * Search ID
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Search name
	 *
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Filter
	 *
	 * @var string
	 * @readonly
	 */
	public $filter = null;

	/**
	 * Search language
	 *
	 * @var string
	 * @readonly
	 */
	public $language = null;

	/**
	 * When search was performed
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Kaltura OTT Service
	 *
	 * @var string
	 * @readonly
	 */
	public $service = null;

	/**
	 * Kaltura OTT Service Action
	 *
	 * @var string
	 * @readonly
	 */
	public $action = null;

	/**
	 * Unique Device ID
	 *
	 * @var string
	 * @readonly
	 */
	public $deviceId = null;


}

