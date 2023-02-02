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
class Kaltura_Client_Type_LiveToVodInfoAsset extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveToVodInfoAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->linearAssetId))
			$this->linearAssetId = (string)$xml->linearAssetId;
		if(count($xml->epgId))
			$this->epgId = (string)$xml->epgId;
		if(count($xml->epgChannelId))
			$this->epgChannelId = (string)$xml->epgChannelId;
		if(count($xml->crid))
			$this->crid = (string)$xml->crid;
		if(count($xml->originalStartDate))
			$this->originalStartDate = (string)$xml->originalStartDate;
		if(count($xml->originalEndDate))
			$this->originalEndDate = (string)$xml->originalEndDate;
		if(count($xml->paddingBeforeProgramStarts))
			$this->paddingBeforeProgramStarts = (string)$xml->paddingBeforeProgramStarts;
		if(count($xml->paddingAfterProgramEnds))
			$this->paddingAfterProgramEnds = (string)$xml->paddingAfterProgramEnds;
	}
	/**
	 * Linear Asset Id
	 *
	 * @var bigint
	 */
	public $linearAssetId = null;

	/**
	 * EPG Id
	 *
	 * @var string
	 */
	public $epgId = null;

	/**
	 * EPG Channel Id
	 *
	 * @var bigint
	 */
	public $epgChannelId = null;

	/**
	 * Crid
	 *
	 * @var string
	 */
	public $crid = null;

	/**
	 * Original Start Date
	 *
	 * @var bigint
	 */
	public $originalStartDate = null;

	/**
	 * Original End Date
	 *
	 * @var bigint
	 */
	public $originalEndDate = null;

	/**
	 * Padding before program starts
	 *
	 * @var bigint
	 */
	public $paddingBeforeProgramStarts = null;

	/**
	 * Padding after program ends
	 *
	 * @var bigint
	 */
	public $paddingAfterProgramEnds = null;


}

