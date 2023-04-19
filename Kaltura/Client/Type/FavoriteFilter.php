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
class Kaltura_Client_Type_FavoriteFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaFavoriteFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mediaTypeEqual))
			$this->mediaTypeEqual = (int)$xml->mediaTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->mediaTypeEqual))
			$this->mediaTypeEqual = (int)$jsonObject->mediaTypeEqual;
		if(!is_null($xml) && count($xml->mediaIdIn))
			$this->mediaIdIn = (string)$xml->mediaIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->mediaIdIn))
			$this->mediaIdIn = (string)$jsonObject->mediaIdIn;
		if(!is_null($xml) && count($xml->udidEqualCurrent))
		{
			if(!empty($xml->udidEqualCurrent) && ((int) $xml->udidEqualCurrent === 1 || strtolower((string)$xml->udidEqualCurrent) === 'true'))
				$this->udidEqualCurrent = true;
			else
				$this->udidEqualCurrent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->udidEqualCurrent))
		{
			if(!empty($jsonObject->udidEqualCurrent) && ((int) $jsonObject->udidEqualCurrent === 1 || strtolower((string)$jsonObject->udidEqualCurrent) === 'true'))
				$this->udidEqualCurrent = true;
			else
				$this->udidEqualCurrent = false;
		}
	}
	/**
	 * Media type to filter by the favorite assets
	 *
	 * @var int
	 */
	public $mediaTypeEqual = null;

	/**
	 * Media identifiers from which to filter the favorite assets
	 *
	 * @var string
	 */
	public $mediaIdIn = null;

	/**
	 * Indicates whether the results should be filtered by origin UDID using the current
	 *
	 * @var bool
	 */
	public $udidEqualCurrent = null;


}

