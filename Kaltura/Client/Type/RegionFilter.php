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
class Kaltura_Client_Type_RegionFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaRegionFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->externalIdIn))
			$this->externalIdIn = (string)$xml->externalIdIn;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->parentIdEqual))
			$this->parentIdEqual = (int)$xml->parentIdEqual;
		if(count($xml->liveAssetIdEqual))
			$this->liveAssetIdEqual = (int)$xml->liveAssetIdEqual;
		if(count($xml->parentOnly))
		{
			if(!empty($xml->parentOnly) && ((int) $xml->parentOnly === 1 || strtolower((string)$xml->parentOnly) === 'true'))
				$this->parentOnly = true;
			else
				$this->parentOnly = false;
		}
	}
	/**
	 * List of comma separated regions external IDs
	 *
	 * @var string
	 */
	public $externalIdIn = null;

	/**
	 * List of comma separated regions Ids
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Region parent ID to filter by
	 *
	 * @var int
	 */
	public $parentIdEqual = null;

	/**
	 * Region parent ID to filter by
	 *
	 * @var int
	 */
	public $liveAssetIdEqual = null;

	/**
	 * Parent region to filter by
	 *
	 * @var bool
	 */
	public $parentOnly = null;


}

