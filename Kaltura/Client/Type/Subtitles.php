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
class Kaltura_Client_Type_Subtitles extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubtitles';
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
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->detectedType))
			$this->detectedType = (string)$xml->detectedType;
		if(!is_null($jsonObject) && isset($jsonObject->detectedType))
			$this->detectedType = (string)$jsonObject->detectedType;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
	}
	/**
	 * Unique identifier for the subtitles file.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Specifies when the file was uploaded, expressed in Epoch timestamp.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Name of the uploaded subtitles text file.
	 *
	 * @var string
	 */
	public $fileName = null;

	/**
	 * The content type included in the subtitles file, as auto-detected by the subtitles service. Can be of SRT, WebVTT or free text without cues.
	 *
	 * @var Kaltura_Client_Enum_SubtitlesType
	 */
	public $detectedType = null;

	/**
	 * The language used for the subtitles.
	 *
	 * @var string
	 */
	public $language = null;


}

