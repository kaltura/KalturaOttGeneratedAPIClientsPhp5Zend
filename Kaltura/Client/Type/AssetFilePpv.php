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
class Kaltura_Client_Type_AssetFilePpv extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetFilePpv';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetFileId))
			$this->assetFileId = (string)$xml->assetFileId;
		if(!is_null($jsonObject) && isset($jsonObject->assetFileId))
			$this->assetFileId = (string)$jsonObject->assetFileId;
		if(!is_null($xml) && count($xml->ppvModuleId))
			$this->ppvModuleId = (string)$xml->ppvModuleId;
		if(!is_null($jsonObject) && isset($jsonObject->ppvModuleId))
			$this->ppvModuleId = (string)$jsonObject->ppvModuleId;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (string)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (string)$jsonObject->endDate;
	}
	/**
	 * Asset file identifier
	 *
	 * @var bigint
	 */
	public $assetFileId = null;

	/**
	 * Ppv module identifier
	 *
	 * @var bigint
	 */
	public $ppvModuleId = null;

	/**
	 * Start date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * End date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $endDate = null;


}

