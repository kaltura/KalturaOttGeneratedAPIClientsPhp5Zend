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
class Kaltura_Client_Type_MediaFileType extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaFileType';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->status))
		{
			if(!empty($xml->status) && ((int) $xml->status === 1 || strtolower((string)$xml->status) === 'true'))
				$this->status = true;
			else
				$this->status = false;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->isTrailer))
		{
			if(!empty($xml->isTrailer) && ((int) $xml->isTrailer === 1 || strtolower((string)$xml->isTrailer) === 'true'))
				$this->isTrailer = true;
			else
				$this->isTrailer = false;
		}
		if(count($xml->streamerType))
			$this->streamerType = (string)$xml->streamerType;
		if(count($xml->drmProfileId))
			$this->drmProfileId = (int)$xml->drmProfileId;
		if(count($xml->quality))
			$this->quality = (string)$xml->quality;
		if(count($xml->videoCodecs))
			$this->videoCodecs = (string)$xml->videoCodecs;
		if(count($xml->audioCodecs))
			$this->audioCodecs = (string)$xml->audioCodecs;
	}
	/**
	 * Unique identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Unique name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Unique description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Indicates if media-file type is active or disabled
	 *
	 * @var bool
	 */
	public $status = null;

	/**
	 * Specifies when was the type was created. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the type last updated. Date and time represented as epoch.
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Specifies whether playback as trailer is allowed
	 *
	 * @var bool
	 * @insertonly
	 */
	public $isTrailer = null;

	/**
	 * Defines playback streamer type
	 *
	 * @var Kaltura_Client_Enum_MediaFileStreamerType
	 * @insertonly
	 */
	public $streamerType = null;

	/**
	 * DRM adapter-profile identifier, use -1 for uDRM, 0 for no DRM.
	 *
	 * @var int
	 * @insertonly
	 */
	public $drmProfileId = null;

	/**
	 * Media file type quality
	 *
	 * @var Kaltura_Client_Enum_MediaFileTypeQuality
	 */
	public $quality = null;

	/**
	 * List of comma separated video codecs
	 *
	 * @var string
	 */
	public $videoCodecs = null;

	/**
	 * List of comma separated audio codecs
	 *
	 * @var string
	 */
	public $audioCodecs = null;


}

