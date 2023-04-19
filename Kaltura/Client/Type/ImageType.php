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
class Kaltura_Client_Type_ImageType extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaImageType';
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
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->ratioId))
			$this->ratioId = (string)$xml->ratioId;
		if(!is_null($jsonObject) && isset($jsonObject->ratioId))
			$this->ratioId = (string)$jsonObject->ratioId;
		if(!is_null($xml) && count($xml->helpText))
			$this->helpText = (string)$xml->helpText;
		if(!is_null($jsonObject) && isset($jsonObject->helpText))
			$this->helpText = (string)$jsonObject->helpText;
		if(!is_null($xml) && count($xml->defaultImageId))
			$this->defaultImageId = (string)$xml->defaultImageId;
		if(!is_null($jsonObject) && isset($jsonObject->defaultImageId))
			$this->defaultImageId = (string)$jsonObject->defaultImageId;
	}
	/**
	 * Image type ID
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
	 * System name
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Ration ID
	 *
	 * @var bigint
	 */
	public $ratioId = null;

	/**
	 * Help text
	 *
	 * @var string
	 */
	public $helpText = null;

	/**
	 * Default image ID
	 *
	 * @var bigint
	 */
	public $defaultImageId = null;


}

