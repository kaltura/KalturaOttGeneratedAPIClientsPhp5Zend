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
class Kaltura_Client_Enum_SocialStatus extends Kaltura_Client_EnumBase
{
	const ERROR = "error";
	const OK = "ok";
	const USER_DOES_NOT_EXIST = "user_does_not_exist";
	const NO_USER_SOCIAL_SETTINGS_FOUND = "no_user_social_settings_found";
	const ASSET_ALREADY_LIKED = "asset_already_liked";
	const NOT_ALLOWED = "not_allowed";
	const INVALID_PARAMETERS = "invalid_parameters";
	const NO_FACEBOOK_ACTION = "no_facebook_action";
	const ASSET_ALREADY_RATED = "asset_already_rated";
	const ASSET_DOSE_NOT_EXISTS = "asset_dose_not_exists";
	const INVALID_PLATFORM_REQUEST = "invalid_platform_request";
	const INVALID_ACCESS_TOKEN = "invalid_access_token";
}

