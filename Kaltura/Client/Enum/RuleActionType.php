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
class Kaltura_Client_Enum_RuleActionType extends Kaltura_Client_EnumBase
{
	const BLOCK = "BLOCK";
	const START_DATE_OFFSET = "START_DATE_OFFSET";
	const END_DATE_OFFSET = "END_DATE_OFFSET";
	const USER_BLOCK = "USER_BLOCK";
	const ALLOW_PLAYBACK = "ALLOW_PLAYBACK";
	const BLOCK_PLAYBACK = "BLOCK_PLAYBACK";
	const APPLY_DISCOUNT_MODULE = "APPLY_DISCOUNT_MODULE";
	const APPLY_PLAYBACK_ADAPTER = "APPLY_PLAYBACK_ADAPTER";
	const FILTER = "FILTER";
	const ASSET_LIFE_CYCLE_TRANSITION = "ASSET_LIFE_CYCLE_TRANSITION";
	const APPLY_FREE_PLAYBACK = "APPLY_FREE_PLAYBACK";
	const FILTERASSETBYKSQL = "FilterAssetByKsql";
	const FILTERFILEBYQUALITYINDISCOVERY = "FilterFileByQualityInDiscovery";
	const FILTERFILEBYQUALITYINPLAYBACK = "FilterFileByQualityInPlayback";
	const FILTERFILEBYFILETYPEIDFORASSETTYPEINDISCOVERY = "FilterFileByFileTypeIdForAssetTypeInDiscovery";
	const FILTERFILEBYFILETYPEIDFORASSETTYPEINPLAYBACK = "FilterFileByFileTypeIdForAssetTypeInPlayback";
	const FILTERFILEBYFILETYPEIDINDISCOVERY = "FilterFileByFileTypeIdInDiscovery";
	const FILTERFILEBYFILETYPEIDINPLAYBACK = "FilterFileByFileTypeIdInPlayback";
	const FILTERFILEBYAUDIOCODECINDISCOVERY = "FilterFileByAudioCodecInDiscovery";
	const FILTERFILEBYAUDIOCODECINPLAYBACK = "FilterFileByAudioCodecInPlayback";
	const FILTERFILEBYVIDEOCODECINDISCOVERY = "FilterFileByVideoCodecInDiscovery";
	const FILTERFILEBYVIDEOCODECINPLAYBACK = "FilterFileByVideoCodecInPlayback";
	const FILTERFILEBYSTREAMERTYPEINDISCOVERY = "FilterFileByStreamerTypeInDiscovery";
	const FILTERFILEBYSTREAMERTYPEINPLAYBACK = "FilterFileByStreamerTypeInPlayback";
	const FILTERFILEBYLABELINDISCOVERY = "FilterFileByLabelInDiscovery";
	const FILTERFILEBYLABELINPLAYBACK = "FilterFileByLabelInPlayback";
	const FILTERFILEBYDYNAMICDATAINDISCOVERY = "FilterFileByDynamicDataInDiscovery";
	const FILTERFILEBYDYNAMICDATAINPLAYBACK = "FilterFileByDynamicDataInPlayback";
}

