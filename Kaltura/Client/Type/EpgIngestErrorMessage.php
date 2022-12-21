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
class Kaltura_Client_Type_EpgIngestErrorMessage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEpgIngestErrorMessage';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->message))
		{
			if(isset($xml->message->item) && count($xml->message->item))
				$this->multiLingual_message = Kaltura_Client_ParseUtils::unmarshalArray($xml->message, '');
			else
				$this->message = (string)$xml->message;
		}
		if(count($xml->code))
		{
			if(isset($xml->code->item) && count($xml->code->item))
				$this->multiLingual_code = Kaltura_Client_ParseUtils::unmarshalArray($xml->code, '');
			else
				$this->code = (string)$xml->code;
		}
		if(count($xml->args))
		{
			if(empty($xml->args))
				$this->args = array();
			else
				$this->args = Kaltura_Client_ParseUtils::unmarshalMap($xml->args, "KalturaStringValue");
		}
	}
	/**
	 * The message description with arguments place holders
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * The message code
	 *
	 * @var string
	 */
	public $code = null;

	/**
	 * Message args
	 *
	 * @var map
	 */
	public $args;


}

