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
class Kaltura_Client_Type_AssetHistory extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetHistory';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (string)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->assetType))
			$this->assetType = (string)$xml->assetType;
		if(!is_null($jsonObject) && isset($jsonObject->assetType))
			$this->assetType = (string)$jsonObject->assetType;
		if(!is_null($xml) && count($xml->position))
			$this->position = (int)$xml->position;
		if(!is_null($jsonObject) && isset($jsonObject->position))
			$this->position = (int)$jsonObject->position;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->watchedDate))
			$this->watchedDate = (string)$xml->watchedDate;
		if(!is_null($jsonObject) && isset($jsonObject->watchedDate))
			$this->watchedDate = (string)$jsonObject->watchedDate;
		if(!is_null($xml) && count($xml->finishedWatching))
		{
			if(!empty($xml->finishedWatching) && ((int) $xml->finishedWatching === 1 || strtolower((string)$xml->finishedWatching) === 'true'))
				$this->finishedWatching = true;
			else
				$this->finishedWatching = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->finishedWatching))
		{
			if(!empty($jsonObject->finishedWatching) && ((int) $jsonObject->finishedWatching === 1 || strtolower((string)$jsonObject->finishedWatching) === 'true'))
				$this->finishedWatching = true;
			else
				$this->finishedWatching = false;
		}
	}
	/**
	 * Asset identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $assetId = null;

	/**
	 * Asset identifier
	 *
	 * @var Kaltura_Client_Enum_AssetType
	 * @readonly
	 */
	public $assetType = null;

	/**
	 * Position in seconds of the relevant asset
	 *
	 * @var int
	 * @readonly
	 */
	public $position = null;

	/**
	 * Duration in seconds of the relevant asset
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * The date when the media was last watched
	 *
	 * @var bigint
	 * @readonly
	 */
	public $watchedDate = null;

	/**
	 * Boolean which specifies whether the user finished watching the movie or not
	 *
	 * @var bool
	 * @readonly
	 */
	public $finishedWatching = null;


}

