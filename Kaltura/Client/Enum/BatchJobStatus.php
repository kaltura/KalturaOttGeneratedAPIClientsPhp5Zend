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
class Kaltura_Client_Enum_BatchJobStatus extends Kaltura_Client_EnumBase
{
	const PENDING = "PENDING";
	const QUEUED = "QUEUED";
	const PROCESSING = "PROCESSING";
	const PROCESSED = "PROCESSED";
	const MOVEFILE = "MOVEFILE";
	const FINISHED = "FINISHED";
	const FAILED = "FAILED";
	const ABORTED = "ABORTED";
	const ALMOST_DONE = "ALMOST_DONE";
	const RETRY = "RETRY";
	const FATAL = "FATAL";
	const DONT_PROCESS = "DONT_PROCESS";
	const FINISHED_PARTIALLY = "FINISHED_PARTIALLY";
}

