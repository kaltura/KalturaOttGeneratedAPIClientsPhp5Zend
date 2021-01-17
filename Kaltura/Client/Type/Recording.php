<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_Recording extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRecording';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->viewableUntilDate))
			$this->viewableUntilDate = (string)$xml->viewableUntilDate;
		if(count($xml->isProtected))
		{
			if(!empty($xml->isProtected) && ((int) $xml->isProtected === 1 || strtolower((string)$xml->isProtected) === 'true'))
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * Kaltura unique ID representing the recording identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Recording state: scheduled/recording/recorded/canceled/failed/deleted
	 *
	 * @var Kaltura_Client_Enum_RecordingStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Kaltura unique ID representing the program identifier
	 *
	 * @var bigint
	 * @insertonly
	 */
	public $assetId = null;

	/**
	 * Recording Type: single/season/series
	 *
	 * @var Kaltura_Client_Enum_RecordingType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Specifies until when the recording is available for viewing. Date and time represented as epoch.
	 *
	 * @var bigint
	 */
	public $viewableUntilDate = null;

	/**
	 * Specifies whether or not the recording is protected
	 *
	 * @var bool
	 */
	public $isProtected = null;

	/**
	 * Specifies when was the recording created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the recording last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

