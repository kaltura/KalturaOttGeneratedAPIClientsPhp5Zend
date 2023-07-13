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
class Kaltura_Client_Type_Bookmark extends Kaltura_Client_Type_SlimAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaBookmark';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->position))
			$this->position = (int)$xml->position;
		if(!is_null($jsonObject) && isset($jsonObject->position))
			$this->position = (int)$jsonObject->position;
		if(!is_null($xml) && count($xml->positionOwner))
			$this->positionOwner = (string)$xml->positionOwner;
		if(!is_null($jsonObject) && isset($jsonObject->positionOwner))
			$this->positionOwner = (string)$jsonObject->positionOwner;
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
		if(!is_null($xml) && count($xml->playerData) && !empty($xml->playerData))
			$this->playerData = Kaltura_Client_ParseUtils::unmarshalObject($xml->playerData, "KalturaBookmarkPlayerData");
		if(!is_null($jsonObject) && isset($jsonObject->playerData) && !empty($jsonObject->playerData))
			$this->playerData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->playerData, "KalturaBookmarkPlayerData");
		if(!is_null($xml) && count($xml->programId))
			$this->programId = (string)$xml->programId;
		if(!is_null($jsonObject) && isset($jsonObject->programId))
			$this->programId = (string)$jsonObject->programId;
		if(!is_null($xml) && count($xml->isReportingMode))
		{
			if(!empty($xml->isReportingMode) && ((int) $xml->isReportingMode === 1 || strtolower((string)$xml->isReportingMode) === 'true'))
				$this->isReportingMode = true;
			else
				$this->isReportingMode = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isReportingMode))
		{
			if(!empty($jsonObject->isReportingMode) && ((int) $jsonObject->isReportingMode === 1 || strtolower((string)$jsonObject->isReportingMode) === 'true'))
				$this->isReportingMode = true;
			else
				$this->isReportingMode = false;
		}
		if(!is_null($xml) && count($xml->context))
			$this->context = (string)$xml->context;
		if(!is_null($jsonObject) && isset($jsonObject->context))
			$this->context = (string)$jsonObject->context;
	}
	/**
	 * User identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The position of the user in the specific asset (in seconds)
	 *
	 * @var int
	 * @insertonly
	 */
	public $position = null;

	/**
	 * Indicates who is the owner of this position
	 *
	 * @var Kaltura_Client_Enum_PositionOwner
	 * @readonly
	 */
	public $positionOwner = null;

	/**
	 * Specifies whether the user&#39;s current position exceeded 95% of the duration
	 *
	 * @var bool
	 * @readonly
	 */
	public $finishedWatching = null;

	/**
	 * Insert only player data
	 *
	 * @var Kaltura_Client_Type_BookmarkPlayerData
	 */
	public $playerData;

	/**
	 * Program Id
	 *
	 * @var bigint
	 */
	public $programId = null;

	/**
	 * Indicates if the current request is in reporting mode (hit)
	 *
	 * @var bool
	 */
	public $isReportingMode = null;

	/**
	 * Playback context type
	 *
	 * @var Kaltura_Client_Enum_PlaybackContextType
	 */
	public $context = null;


}

