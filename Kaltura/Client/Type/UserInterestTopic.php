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
class Kaltura_Client_Type_UserInterestTopic extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserInterestTopic';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->metaId))
			$this->metaId = (string)$xml->metaId;
		if(!is_null($jsonObject) && isset($jsonObject->metaId))
			$this->metaId = (string)$jsonObject->metaId;
		if(!is_null($xml) && count($xml->value))
			$this->value = (string)$xml->value;
		if(!is_null($jsonObject) && isset($jsonObject->value))
			$this->value = (string)$jsonObject->value;
		if(!is_null($xml) && count($xml->parentTopic) && !empty($xml->parentTopic))
			$this->parentTopic = Kaltura_Client_ParseUtils::unmarshalObject($xml->parentTopic, "KalturaUserInterestTopic");
		if(!is_null($jsonObject) && isset($jsonObject->parentTopic) && !empty($jsonObject->parentTopic))
			$this->parentTopic = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->parentTopic, "KalturaUserInterestTopic");
	}
	/**
	 * Meta identifier
	 *
	 * @var string
	 */
	public $metaId = null;

	/**
	 * Meta Value
	 *
	 * @var string
	 */
	public $value = null;

	/**
	 * Parent topic
	 *
	 * @var Kaltura_Client_Type_UserInterestTopic
	 */
	public $parentTopic;


}

