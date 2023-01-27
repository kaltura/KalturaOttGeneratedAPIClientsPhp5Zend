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
class Kaltura_Client_Type_LiveToVodPartnerConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveToVodPartnerConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->isL2vEnabled))
		{
			if(!empty($xml->isL2vEnabled) && ((int) $xml->isL2vEnabled === 1 || strtolower((string)$xml->isL2vEnabled) === 'true'))
				$this->isL2vEnabled = true;
			else
				$this->isL2vEnabled = false;
		}
		if(count($xml->retentionPeriodDays))
			$this->retentionPeriodDays = (int)$xml->retentionPeriodDays;
		if(count($xml->metadataClassifier))
			$this->metadataClassifier = (string)$xml->metadataClassifier;
	}
	/**
	 * Enable/disable the feature globally. If disabled, then all linear assets are not enabled.
	 *
	 * @var bool
	 */
	public $isL2vEnabled = null;

	/**
	 * Number of days the L2V asset is retained in the system.
	 *
	 * @var int
	 */
	public $retentionPeriodDays = null;

	/**
	 * The name (label) of the metadata field marking the program asset to be duplicated as a L2V asset.
	 *
	 * @var string
	 */
	public $metadataClassifier = null;


}

