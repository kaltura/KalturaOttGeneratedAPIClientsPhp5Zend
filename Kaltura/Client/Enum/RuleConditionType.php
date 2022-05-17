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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class Kaltura_Client_Enum_RuleConditionType extends Kaltura_Client_EnumBase
{
	const ASSET = "ASSET";
	const COUNTRY = "COUNTRY";
	const CONCURRENCY = "CONCURRENCY";
	const IP_RANGE = "IP_RANGE";
	const BUSINESS_MODULE = "BUSINESS_MODULE";
	const SEGMENTS = "SEGMENTS";
	const DATE = "DATE";
	const OR = "OR";
	const HEADER = "HEADER";
	const USER_SUBSCRIPTION = "USER_SUBSCRIPTION";
	const ASSET_SUBSCRIPTION = "ASSET_SUBSCRIPTION";
	const USER_ROLE = "USER_ROLE";
	const DEVICE_BRAND = "DEVICE_BRAND";
	const DEVICE_FAMILY = "DEVICE_FAMILY";
	const DEVICE_MANUFACTURER = "DEVICE_MANUFACTURER";
	const DEVICE_MODEL = "DEVICE_MODEL";
	const DEVICE_UDID_DYNAMIC_LIST = "DEVICE_UDID_DYNAMIC_LIST";
	const DYNAMIC_KEYS = "DYNAMIC_KEYS";
	const USER_SESSION_PROFILE = "USER_SESSION_PROFILE";
	const DEVICE_DYNAMIC_DATA = "DEVICE_DYNAMIC_DATA";
}

