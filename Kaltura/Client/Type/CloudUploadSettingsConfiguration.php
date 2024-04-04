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
class Kaltura_Client_Type_CloudUploadSettingsConfiguration extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaCloudUploadSettingsConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->defaultAllowedFileExtensions))
			$this->defaultAllowedFileExtensions = (string)$xml->defaultAllowedFileExtensions;
		if(!is_null($jsonObject) && isset($jsonObject->defaultAllowedFileExtensions))
			$this->defaultAllowedFileExtensions = (string)$jsonObject->defaultAllowedFileExtensions;
		if(!is_null($xml) && count($xml->customAllowedFileExtensions))
			$this->customAllowedFileExtensions = (string)$xml->customAllowedFileExtensions;
		if(!is_null($jsonObject) && isset($jsonObject->customAllowedFileExtensions))
			$this->customAllowedFileExtensions = (string)$jsonObject->customAllowedFileExtensions;
	}
	/**
	 * Comma seperated list of file extensions that allowed to all partners
	 *
	 * @var string
	 * @readonly
	 */
	public $defaultAllowedFileExtensions = null;

	/**
	 * Comma seperated list of file extensions that allowed to partner in question
	 *             {&quot;jpeg&quot;, &quot;image/jpeg&quot; },
	 *             {&quot;jpg&quot;,&quot;image/jpeg&quot;},
	 *             {&quot;jpg&quot;,&quot;image/png&quot;},
	 *             { &quot;tif&quot;,&quot;image/tiff&quot;},
	 *             { &quot;tiff&quot;, &quot;image/tiff&quot;},
	 *             {&quot;gif&quot;,  &quot;image/gif&quot;},
	 *             {&quot;xls&quot;,  &quot;application/vnd.ms-excel&quot;},
	 *             {&quot;xlsx&quot;,&quot;application/vnd.openxmlformats-officedocument.spreadsheetml.sheet&quot; },
	 *             {&quot;csv&quot;,&quot;text/csv&quot;},
	 *             {&quot;xml&quot;,&quot;text/xml&quot;},
	 *             {&quot;txt&quot;,&quot;text/plain&quot;},
	 *             {&quot;doc&quot;,&quot;application/msword&quot;},
	 *             {&quot;docx&quot;,&quot;application/vnd.openxmlformats-officedocument.wordprocessingml.document&quot;},
	 *             {&quot;bmp&quot;,&quot;image/bmp&quot;},
	 *             {&quot;ico&quot;,&quot;image/x-icon&quot;},
	 *             {&quot;mp3&quot;,&quot;audio/mpeg&quot;},
	 *             {&quot;pdf&quot;,&quot;application/pdf&quot;}}
	 *
	 * @var string
	 */
	public $customAllowedFileExtensions = null;


}

