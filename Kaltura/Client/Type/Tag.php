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
class Kaltura_Client_Type_Tag extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTag';
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
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->tag))
			$this->tag = (string)$xml->tag;
		if(!is_null($jsonObject) && isset($jsonObject->tag))
			$this->tag = (string)$jsonObject->tag;
		if(!is_null($xml) && count($xml->multilingualTag))
		{
			if(empty($xml->multilingualTag))
				$this->multilingualTag = array();
			else
				$this->multilingualTag = Kaltura_Client_ParseUtils::unmarshalArray($xml->multilingualTag, "KalturaTranslationToken");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multilingualTag))
		{
			if(empty($jsonObject->multilingualTag))
				$this->multilingualTag = array();
			else
				$this->multilingualTag = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multilingualTag, "KalturaTranslationToken");
		}
	}
	/**
	 * Tag id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Tag Type
	 *
	 * @var int
	 */
	public $type = null;

	/**
	 * Tag
	 *
	 * @var string
	 * @readonly
	 */
	public $tag = null;

	/**
	 * Tag
	 *
	 * @var Kaltura_Client_Type_TranslationToken[]
	 */
	public $multilingualTag;


}

