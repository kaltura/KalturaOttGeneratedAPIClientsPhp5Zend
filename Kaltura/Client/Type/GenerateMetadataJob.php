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
class Kaltura_Client_Type_GenerateMetadataJob extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenerateMetadataJob';
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
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->sourceName))
			$this->sourceName = (string)$xml->sourceName;
		if(!is_null($jsonObject) && isset($jsonObject->sourceName))
			$this->sourceName = (string)$jsonObject->sourceName;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->errorMessage))
			$this->errorMessage = (string)$xml->errorMessage;
		if(!is_null($jsonObject) && isset($jsonObject->errorMessage))
			$this->errorMessage = (string)$jsonObject->errorMessage;
	}
	/**
	 * Unique identifier for the generation job
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Specifies when the job was created, expressed in Epoch timestamp.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when the job was updated, expressed in Epoch timestamp.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Name of the source job element generating the metadata.
	 *             For generateMetadataBySubtitles: the uploaded subtitle file name.
	 *             For generateMetadataByDescription: the asset name from which metadata is generated.
	 *
	 * @var string
	 * @readonly
	 */
	public $sourceName = null;

	/**
	 * can be either Processing/Success/Failed, per the last status updated by the aiMetadataGenerator.
	 *
	 * @var Kaltura_Client_Enum_GenerateMetadataStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Error messages for non-success cases.
	 *
	 * @var string
	 * @readonly
	 */
	public $errorMessage = null;


}

