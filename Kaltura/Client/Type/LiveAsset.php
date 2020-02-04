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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Type_LiveAsset extends Kaltura_Client_Type_MediaAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->enableCdvrState))
			$this->enableCdvrState = (string)$xml->enableCdvrState;
		if(count($xml->enableCatchUpState))
			$this->enableCatchUpState = (string)$xml->enableCatchUpState;
		if(count($xml->enableStartOverState))
			$this->enableStartOverState = (string)$xml->enableStartOverState;
		if(count($xml->bufferCatchUpSetting))
			$this->bufferCatchUpSetting = (string)$xml->bufferCatchUpSetting;
		if(count($xml->bufferTrickPlaySetting))
			$this->bufferTrickPlaySetting = (string)$xml->bufferTrickPlaySetting;
		if(count($xml->enableRecordingPlaybackNonEntitledChannelState))
			$this->enableRecordingPlaybackNonEntitledChannelState = (string)$xml->enableRecordingPlaybackNonEntitledChannelState;
		if(count($xml->enableTrickPlayState))
			$this->enableTrickPlayState = (string)$xml->enableTrickPlayState;
		if(count($xml->externalEpgIngestId))
			$this->externalEpgIngestId = (string)$xml->externalEpgIngestId;
		if(count($xml->externalCdvrId))
			$this->externalCdvrId = (string)$xml->externalCdvrId;
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
		if(count($xml->catchUpBuffer))
			$this->catchUpBuffer = (string)$xml->catchUpBuffer;
		if(count($xml->trickPlayBuffer))
			$this->trickPlayBuffer = (string)$xml->trickPlayBuffer;
		if(count($xml->enableRecordingPlaybackNonEntitledChannel))
		{
			if(!empty($xml->enableRecordingPlaybackNonEntitledChannel) && ((int) $xml->enableRecordingPlaybackNonEntitledChannel === 1 || strtolower((string)$xml->enableRecordingPlaybackNonEntitledChannel) === 'true'))
				$this->enableRecordingPlaybackNonEntitledChannel = true;
			else
				$this->enableRecordingPlaybackNonEntitledChannel = false;
		}
		if(count($xml->enableTrickPlay))
		{
			if(!empty($xml->enableTrickPlay) && ((int) $xml->enableTrickPlay === 1 || strtolower((string)$xml->enableTrickPlay) === 'true'))
				$this->enableTrickPlay = true;
			else
				$this->enableTrickPlay = false;
		}
		if(count($xml->channelType))
			$this->channelType = (string)$xml->channelType;
	}
	/**
	 * Enable CDVR, configuration only
	 *
	 * @var Kaltura_Client_Enum_TimeShiftedTvState
	 */
	public $enableCdvrState = null;

	/**
	 * Enable catch-up, configuration only
	 *
	 * @var Kaltura_Client_Enum_TimeShiftedTvState
	 */
	public $enableCatchUpState = null;

	/**
	 * Enable start over, configuration only
	 *
	 * @var Kaltura_Client_Enum_TimeShiftedTvState
	 */
	public $enableStartOverState = null;

	/**
	 * buffer Catch-up, configuration only
	 *
	 * @var bigint
	 */
	public $bufferCatchUpSetting = null;

	/**
	 * buffer Trick-play, configuration only
	 *
	 * @var bigint
	 */
	public $bufferTrickPlaySetting = null;

	/**
	 * Enable Recording playback for non entitled channel, configuration only
	 *
	 * @var Kaltura_Client_Enum_TimeShiftedTvState
	 */
	public $enableRecordingPlaybackNonEntitledChannelState = null;

	/**
	 * Enable trick-play, configuration only
	 *
	 * @var Kaltura_Client_Enum_TimeShiftedTvState
	 */
	public $enableTrickPlayState = null;

	/**
	 * External identifier used when ingesting programs for this linear media asset
	 *
	 * @var string
	 */
	public $externalEpgIngestId = null;

	/**
	 * External identifier for the CDVR
	 *
	 * @var string
	 */
	public $externalCdvrId = null;

	/**
	 * Is CDVR enabled for this asset
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableCdvr = null;

	/**
	 * Is catch-up enabled for this asset
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableCatchUp = null;

	/**
	 * Is start over enabled for this asset
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableStartOver = null;

	/**
	 * summed Catch-up buffer, the TimeShiftedTvPartnerSettings are also taken into consideration
	 *
	 * @var bigint
	 * @readonly
	 */
	public $catchUpBuffer = null;

	/**
	 * summed Trick-play buffer, the TimeShiftedTvPartnerSettings are also taken into consideration
	 *
	 * @var bigint
	 * @readonly
	 */
	public $trickPlayBuffer = null;

	/**
	 * Is recording playback for non entitled channel enabled for this asset
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableRecordingPlaybackNonEntitledChannel = null;

	/**
	 * Is trick-play enabled for this asset
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableTrickPlay = null;

	/**
	 * channel type, possible values: UNKNOWN, DTT, OTT, DTT_AND_OTT
	 *
	 * @var Kaltura_Client_Enum_LinearChannelType
	 */
	public $channelType = null;


}

