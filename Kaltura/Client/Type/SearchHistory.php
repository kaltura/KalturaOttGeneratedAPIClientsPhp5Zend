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
class Kaltura_Client_Type_SearchHistory extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSearchHistory';
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
		if(!is_null($xml) && count($xml->filter))
			$this->filter = (string)$xml->filter;
		if(!is_null($jsonObject) && isset($jsonObject->filter))
			$this->filter = (string)$jsonObject->filter;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (string)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (string)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->service))
			$this->service = (string)$xml->service;
		if(!is_null($jsonObject) && isset($jsonObject->service))
			$this->service = (string)$jsonObject->service;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
		if(!is_null($xml) && count($xml->deviceId))
			$this->deviceId = (string)$xml->deviceId;
		if(!is_null($jsonObject) && isset($jsonObject->deviceId))
			$this->deviceId = (string)$jsonObject->deviceId;
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

