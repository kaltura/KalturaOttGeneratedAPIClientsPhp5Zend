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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_Type_ProgramAsset extends Kaltura_Client_Type_Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaProgramAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->epgChannelId))
			$this->epgChannelId = (string)$xml->epgChannelId;
		if(count($xml->epgId))
			$this->epgId = (string)$xml->epgId;
		if(count($xml->relatedMediaId))
			$this->relatedMediaId = (string)$xml->relatedMediaId;
		if(count($xml->crid))
			$this->crid = (string)$xml->crid;
		if(count($xml->linearAssetId))
			$this->linearAssetId = (string)$xml->linearAssetId;
		if(count($xml->enableCdvr))
		{
			if(!empty($xml->enableCdvr) && ((int) $xml->enableCdvr === 1 || strtolower((string)$xml->enableCdvr) === 'true'))
				$this->enableCdvr = true;
			else
				$this->enableCdvr = false;
		}
		if(count($xml->enableCatchUp))
		{
			if(!empty($xml->enableCatchUp) && ((int) $xml->enableCatchUp === 1 || strtolower((string)$xml->enableCatchUp) === 'true'))
				$this->enableCatchUp = true;
			else
				$this->enableCatchUp = false;
		}
		if(count($xml->enableStartOver))
		{
			if(!empty($xml->enableStartOver) && ((int) $xml->enableStartOver === 1 || strtolower((string)$xml->enableStartOver) === 'true'))
				$this->enableStartOver = true;
			else
				$this->enableStartOver = false;
		}
		if(count($xml->enableTrickPlay))
		{
			if(!empty($xml->enableTrickPlay) && ((int) $xml->enableTrickPlay === 1 || strtolower((string)$xml->enableTrickPlay) === 'true'))
				$this->enableTrickPlay = true;
			else
				$this->enableTrickPlay = false;
		}
	}
	/**
	 * EPG channel identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $epgChannelId = null;

	/**
	 * EPG identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $epgId = null;

	/**
	 * Ralated media identifier
	 *
	 * @var bigint
	 */
	public $relatedMediaId = null;

	/**
	 * Unique identifier for the program
	 *
	 * @var string
	 */
	public $crid = null;

	/**
	 * Id of linear media asset
	 *
	 * @var bigint
	 * @insertonly
	 */
	public $linearAssetId = null;

	/**
	 * Is CDVR enabled for this asset
	 *
	 * @var bool
	 */
	public $enableCdvr = null;

	/**
	 * Is catch-up enabled for this asset
	 *
	 * @var bool
	 */
	public $enableCatchUp = null;

	/**
	 * Is start over enabled for this asset
	 *
	 * @var bool
	 */
	public $enableStartOver = null;

	/**
	 * Is trick-play enabled for this asset
	 *
	 * @var bool
	 */
	public $enableTrickPlay = null;


}

