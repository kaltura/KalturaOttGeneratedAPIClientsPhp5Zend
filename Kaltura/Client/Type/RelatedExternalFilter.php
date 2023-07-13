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
class Kaltura_Client_Type_RelatedExternalFilter extends Kaltura_Client_Type_AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaRelatedExternalFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (int)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(!is_null($jsonObject) && isset($jsonObject->typeIn))
			$this->typeIn = (string)$jsonObject->typeIn;
		if(!is_null($xml) && count($xml->utcOffsetEqual))
			$this->utcOffsetEqual = (int)$xml->utcOffsetEqual;
		if(!is_null($jsonObject) && isset($jsonObject->utcOffsetEqual))
			$this->utcOffsetEqual = (int)$jsonObject->utcOffsetEqual;
		if(!is_null($xml) && count($xml->freeText))
			$this->freeText = (string)$xml->freeText;
		if(!is_null($jsonObject) && isset($jsonObject->freeText))
			$this->freeText = (string)$jsonObject->freeText;
	}
	/**
	 * the External ID of the asset for which to return related assets
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 - EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted - all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * UtcOffsetEqual
	 *
	 * @var int
	 */
	public $utcOffsetEqual = null;

	/**
	 * FreeText
	 *
	 * @var string
	 */
	public $freeText = null;


}

