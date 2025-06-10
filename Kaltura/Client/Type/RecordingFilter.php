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
class Kaltura_Client_Type_RecordingFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaRecordingFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->assetIdIn))
			$this->assetIdIn = (string)$xml->assetIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->assetIdIn))
			$this->assetIdIn = (string)$jsonObject->assetIdIn;
		if(!is_null($xml) && count($xml->externalRecordingIdIn))
			$this->externalRecordingIdIn = (string)$xml->externalRecordingIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->externalRecordingIdIn))
			$this->externalRecordingIdIn = (string)$jsonObject->externalRecordingIdIn;
		if(!is_null($xml) && count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(!is_null($jsonObject) && isset($jsonObject->kSql))
			$this->kSql = (string)$jsonObject->kSql;
	}
	/**
	 * Recording Statuses
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * Comma separated list of assets identifiers
	 *
	 * @var string
	 */
	public $assetIdIn = null;

	/**
	 * Comma separated external identifiers
	 *
	 * @var string
	 */
	public $externalRecordingIdIn = null;

	/**
	 * KSQL expression
	 *
	 * @var string
	 */
	public $kSql = null;


}

