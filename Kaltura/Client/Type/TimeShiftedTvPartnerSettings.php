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
class Kaltura_Client_Type_TimeShiftedTvPartnerSettings extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTimeShiftedTvPartnerSettings';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->catchUpEnabled))
		{
			if(!empty($xml->catchUpEnabled) && ((int) $xml->catchUpEnabled === 1 || strtolower((string)$xml->catchUpEnabled) === 'true'))
				$this->catchUpEnabled = true;
			else
				$this->catchUpEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->catchUpEnabled))
		{
			if(!empty($jsonObject->catchUpEnabled) && ((int) $jsonObject->catchUpEnabled === 1 || strtolower((string)$jsonObject->catchUpEnabled) === 'true'))
				$this->catchUpEnabled = true;
			else
				$this->catchUpEnabled = false;
		}
		if(!is_null($xml) && count($xml->cdvrEnabled))
		{
			if(!empty($xml->cdvrEnabled) && ((int) $xml->cdvrEnabled === 1 || strtolower((string)$xml->cdvrEnabled) === 'true'))
				$this->cdvrEnabled = true;
			else
				$this->cdvrEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->cdvrEnabled))
		{
			if(!empty($jsonObject->cdvrEnabled) && ((int) $jsonObject->cdvrEnabled === 1 || strtolower((string)$jsonObject->cdvrEnabled) === 'true'))
				$this->cdvrEnabled = true;
			else
				$this->cdvrEnabled = false;
		}
		if(!is_null($xml) && count($xml->startOverEnabled))
		{
			if(!empty($xml->startOverEnabled) && ((int) $xml->startOverEnabled === 1 || strtolower((string)$xml->startOverEnabled) === 'true'))
				$this->startOverEnabled = true;
			else
				$this->startOverEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->startOverEnabled))
		{
			if(!empty($jsonObject->startOverEnabled) && ((int) $jsonObject->startOverEnabled === 1 || strtolower((string)$jsonObject->startOverEnabled) === 'true'))
				$this->startOverEnabled = true;
			else
				$this->startOverEnabled = false;
		}
		if(!is_null($xml) && count($xml->trickPlayEnabled))
		{
			if(!empty($xml->trickPlayEnabled) && ((int) $xml->trickPlayEnabled === 1 || strtolower((string)$xml->trickPlayEnabled) === 'true'))
				$this->trickPlayEnabled = true;
			else
				$this->trickPlayEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->trickPlayEnabled))
		{
			if(!empty($jsonObject->trickPlayEnabled) && ((int) $jsonObject->trickPlayEnabled === 1 || strtolower((string)$jsonObject->trickPlayEnabled) === 'true'))
				$this->trickPlayEnabled = true;
			else
				$this->trickPlayEnabled = false;
		}
		if(!is_null($xml) && count($xml->recordingScheduleWindowEnabled))
		{
			if(!empty($xml->recordingScheduleWindowEnabled) && ((int) $xml->recordingScheduleWindowEnabled === 1 || strtolower((string)$xml->recordingScheduleWindowEnabled) === 'true'))
				$this->recordingScheduleWindowEnabled = true;
			else
				$this->recordingScheduleWindowEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->recordingScheduleWindowEnabled))
		{
			if(!empty($jsonObject->recordingScheduleWindowEnabled) && ((int) $jsonObject->recordingScheduleWindowEnabled === 1 || strtolower((string)$jsonObject->recordingScheduleWindowEnabled) === 'true'))
				$this->recordingScheduleWindowEnabled = true;
			else
				$this->recordingScheduleWindowEnabled = false;
		}
		if(!is_null($xml) && count($xml->protectionEnabled))
		{
			if(!empty($xml->protectionEnabled) && ((int) $xml->protectionEnabled === 1 || strtolower((string)$xml->protectionEnabled) === 'true'))
				$this->protectionEnabled = true;
			else
				$this->protectionEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->protectionEnabled))
		{
			if(!empty($jsonObject->protectionEnabled) && ((int) $jsonObject->protectionEnabled === 1 || strtolower((string)$jsonObject->protectionEnabled) === 'true'))
				$this->protectionEnabled = true;
			else
				$this->protectionEnabled = false;
		}
		if(!is_null($xml) && count($xml->catchUpBufferLength))
			$this->catchUpBufferLength = (string)$xml->catchUpBufferLength;
		if(!is_null($jsonObject) && isset($jsonObject->catchUpBufferLength))
			$this->catchUpBufferLength = (string)$jsonObject->catchUpBufferLength;
		if(!is_null($xml) && count($xml->trickPlayBufferLength))
			$this->trickPlayBufferLength = (string)$xml->trickPlayBufferLength;
		if(!is_null($jsonObject) && isset($jsonObject->trickPlayBufferLength))
			$this->trickPlayBufferLength = (string)$jsonObject->trickPlayBufferLength;
		if(!is_null($xml) && count($xml->recordingScheduleWindow))
			$this->recordingScheduleWindow = (string)$xml->recordingScheduleWindow;
		if(!is_null($jsonObject) && isset($jsonObject->recordingScheduleWindow))
			$this->recordingScheduleWindow = (string)$jsonObject->recordingScheduleWindow;
		if(!is_null($xml) && count($xml->paddingBeforeProgramStarts))
			$this->paddingBeforeProgramStarts = (string)$xml->paddingBeforeProgramStarts;
		if(!is_null($jsonObject) && isset($jsonObject->paddingBeforeProgramStarts))
			$this->paddingBeforeProgramStarts = (string)$jsonObject->paddingBeforeProgramStarts;
		if(!is_null($xml) && count($xml->paddingAfterProgramEnds))
			$this->paddingAfterProgramEnds = (string)$xml->paddingAfterProgramEnds;
		if(!is_null($jsonObject) && isset($jsonObject->paddingAfterProgramEnds))
			$this->paddingAfterProgramEnds = (string)$jsonObject->paddingAfterProgramEnds;
		if(!is_null($xml) && count($xml->protectionPeriod))
			$this->protectionPeriod = (int)$xml->protectionPeriod;
		if(!is_null($jsonObject) && isset($jsonObject->protectionPeriod))
			$this->protectionPeriod = (int)$jsonObject->protectionPeriod;
		if(!is_null($xml) && count($xml->protectionQuotaPercentage))
			$this->protectionQuotaPercentage = (int)$xml->protectionQuotaPercentage;
		if(!is_null($jsonObject) && isset($jsonObject->protectionQuotaPercentage))
			$this->protectionQuotaPercentage = (int)$jsonObject->protectionQuotaPercentage;
		if(!is_null($xml) && count($xml->recordingLifetimePeriod))
			$this->recordingLifetimePeriod = (int)$xml->recordingLifetimePeriod;
		if(!is_null($jsonObject) && isset($jsonObject->recordingLifetimePeriod))
			$this->recordingLifetimePeriod = (int)$jsonObject->recordingLifetimePeriod;
		if(!is_null($xml) && count($xml->cleanupNoticePeriod))
			$this->cleanupNoticePeriod = (int)$xml->cleanupNoticePeriod;
		if(!is_null($jsonObject) && isset($jsonObject->cleanupNoticePeriod))
			$this->cleanupNoticePeriod = (int)$jsonObject->cleanupNoticePeriod;
		if(!is_null($xml) && count($xml->seriesRecordingEnabled))
		{
			if(!empty($xml->seriesRecordingEnabled) && ((int) $xml->seriesRecordingEnabled === 1 || strtolower((string)$xml->seriesRecordingEnabled) === 'true'))
				$this->seriesRecordingEnabled = true;
			else
				$this->seriesRecordingEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->seriesRecordingEnabled))
		{
			if(!empty($jsonObject->seriesRecordingEnabled) && ((int) $jsonObject->seriesRecordingEnabled === 1 || strtolower((string)$jsonObject->seriesRecordingEnabled) === 'true'))
				$this->seriesRecordingEnabled = true;
			else
				$this->seriesRecordingEnabled = false;
		}
		if(!is_null($xml) && count($xml->nonEntitledChannelPlaybackEnabled))
		{
			if(!empty($xml->nonEntitledChannelPlaybackEnabled) && ((int) $xml->nonEntitledChannelPlaybackEnabled === 1 || strtolower((string)$xml->nonEntitledChannelPlaybackEnabled) === 'true'))
				$this->nonEntitledChannelPlaybackEnabled = true;
			else
				$this->nonEntitledChannelPlaybackEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->nonEntitledChannelPlaybackEnabled))
		{
			if(!empty($jsonObject->nonEntitledChannelPlaybackEnabled) && ((int) $jsonObject->nonEntitledChannelPlaybackEnabled === 1 || strtolower((string)$jsonObject->nonEntitledChannelPlaybackEnabled) === 'true'))
				$this->nonEntitledChannelPlaybackEnabled = true;
			else
				$this->nonEntitledChannelPlaybackEnabled = false;
		}
		if(!is_null($xml) && count($xml->nonExistingChannelPlaybackEnabled))
		{
			if(!empty($xml->nonExistingChannelPlaybackEnabled) && ((int) $xml->nonExistingChannelPlaybackEnabled === 1 || strtolower((string)$xml->nonExistingChannelPlaybackEnabled) === 'true'))
				$this->nonExistingChannelPlaybackEnabled = true;
			else
				$this->nonExistingChannelPlaybackEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->nonExistingChannelPlaybackEnabled))
		{
			if(!empty($jsonObject->nonExistingChannelPlaybackEnabled) && ((int) $jsonObject->nonExistingChannelPlaybackEnabled === 1 || strtolower((string)$jsonObject->nonExistingChannelPlaybackEnabled) === 'true'))
				$this->nonExistingChannelPlaybackEnabled = true;
			else
				$this->nonExistingChannelPlaybackEnabled = false;
		}
		if(!is_null($xml) && count($xml->quotaOveragePolicy))
			$this->quotaOveragePolicy = (string)$xml->quotaOveragePolicy;
		if(!is_null($jsonObject) && isset($jsonObject->quotaOveragePolicy))
			$this->quotaOveragePolicy = (string)$jsonObject->quotaOveragePolicy;
		if(!is_null($xml) && count($xml->protectionPolicy))
			$this->protectionPolicy = (string)$xml->protectionPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->protectionPolicy))
			$this->protectionPolicy = (string)$jsonObject->protectionPolicy;
		if(!is_null($xml) && count($xml->recoveryGracePeriod))
			$this->recoveryGracePeriod = (int)$xml->recoveryGracePeriod;
		if(!is_null($jsonObject) && isset($jsonObject->recoveryGracePeriod))
			$this->recoveryGracePeriod = (int)$jsonObject->recoveryGracePeriod;
		if(!is_null($xml) && count($xml->privateCopyEnabled))
		{
			if(!empty($xml->privateCopyEnabled) && ((int) $xml->privateCopyEnabled === 1 || strtolower((string)$xml->privateCopyEnabled) === 'true'))
				$this->privateCopyEnabled = true;
			else
				$this->privateCopyEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->privateCopyEnabled))
		{
			if(!empty($jsonObject->privateCopyEnabled) && ((int) $jsonObject->privateCopyEnabled === 1 || strtolower((string)$jsonObject->privateCopyEnabled) === 'true'))
				$this->privateCopyEnabled = true;
			else
				$this->privateCopyEnabled = false;
		}
		if(!is_null($xml) && count($xml->defaultQuota))
			$this->defaultQuota = (int)$xml->defaultQuota;
		if(!is_null($jsonObject) && isset($jsonObject->defaultQuota))
			$this->defaultQuota = (int)$jsonObject->defaultQuota;
		if(!is_null($xml) && count($xml->personalizedRecording))
		{
			if(!empty($xml->personalizedRecording) && ((int) $xml->personalizedRecording === 1 || strtolower((string)$xml->personalizedRecording) === 'true'))
				$this->personalizedRecording = true;
			else
				$this->personalizedRecording = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->personalizedRecording))
		{
			if(!empty($jsonObject->personalizedRecording) && ((int) $jsonObject->personalizedRecording === 1 || strtolower((string)$jsonObject->personalizedRecording) === 'true'))
				$this->personalizedRecording = true;
			else
				$this->personalizedRecording = false;
		}
		if(!is_null($xml) && count($xml->maxRecordingConcurrency))
			$this->maxRecordingConcurrency = (int)$xml->maxRecordingConcurrency;
		if(!is_null($jsonObject) && isset($jsonObject->maxRecordingConcurrency))
			$this->maxRecordingConcurrency = (int)$jsonObject->maxRecordingConcurrency;
		if(!is_null($xml) && count($xml->maxConcurrencyMargin))
			$this->maxConcurrencyMargin = (int)$xml->maxConcurrencyMargin;
		if(!is_null($jsonObject) && isset($jsonObject->maxConcurrencyMargin))
			$this->maxConcurrencyMargin = (int)$jsonObject->maxConcurrencyMargin;
		if(!is_null($xml) && count($xml->shouldRoundStopRecordingsBySeconds))
		{
			if(!empty($xml->shouldRoundStopRecordingsBySeconds) && ((int) $xml->shouldRoundStopRecordingsBySeconds === 1 || strtolower((string)$xml->shouldRoundStopRecordingsBySeconds) === 'true'))
				$this->shouldRoundStopRecordingsBySeconds = true;
			else
				$this->shouldRoundStopRecordingsBySeconds = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldRoundStopRecordingsBySeconds))
		{
			if(!empty($jsonObject->shouldRoundStopRecordingsBySeconds) && ((int) $jsonObject->shouldRoundStopRecordingsBySeconds === 1 || strtolower((string)$jsonObject->shouldRoundStopRecordingsBySeconds) === 'true'))
				$this->shouldRoundStopRecordingsBySeconds = true;
			else
				$this->shouldRoundStopRecordingsBySeconds = false;
		}
	}
	/**
	 * Is catch-up enabled
	 *
	 * @var bool
	 */
	public $catchUpEnabled = null;

	/**
	 * Is c-dvr enabled
	 *
	 * @var bool
	 */
	public $cdvrEnabled = null;

	/**
	 * Is start-over enabled
	 *
	 * @var bool
	 */
	public $startOverEnabled = null;

	/**
	 * Is trick-play enabled
	 *
	 * @var bool
	 */
	public $trickPlayEnabled = null;

	/**
	 * Is recording schedule window enabled
	 *
	 * @var bool
	 */
	public $recordingScheduleWindowEnabled = null;

	/**
	 * Is recording protection enabled
	 *
	 * @var bool
	 */
	public $protectionEnabled = null;

	/**
	 * Catch-up buffer length
	 *
	 * @var bigint
	 */
	public $catchUpBufferLength = null;

	/**
	 * Trick play buffer length
	 *
	 * @var bigint
	 */
	public $trickPlayBufferLength = null;

	/**
	 * Recording schedule window. Indicates how long (in minutes) after the program starts it is allowed to schedule the recording
	 *
	 * @var bigint
	 */
	public $recordingScheduleWindow = null;

	/**
	 * Indicates how long (in seconds) before the program starts the recording will begin
	 *
	 * @var bigint
	 */
	public $paddingBeforeProgramStarts = null;

	/**
	 * Indicates how long (in seconds) after the program ends the recording will end
	 *
	 * @var bigint
	 */
	public $paddingAfterProgramEnds = null;

	/**
	 * Specify the time in days that a recording should be protected. Start time begins at protection request.
	 *
	 * @var int
	 */
	public $protectionPeriod = null;

	/**
	 * Indicates how many percent of the quota can be used for protection
	 *
	 * @var int
	 */
	public $protectionQuotaPercentage = null;

	/**
	 * Specify the time in days that a recording should be kept for user. Start time begins with the program end date.
	 *
	 * @var int
	 */
	public $recordingLifetimePeriod = null;

	/**
	 * The time in days before the recording lifetime is due from which the client should be able to warn user about deletion.
	 *
	 * @var int
	 */
	public $cleanupNoticePeriod = null;

	/**
	 * Is recording of series enabled
	 *
	 * @var bool
	 */
	public $seriesRecordingEnabled = null;

	/**
	 * Is recording playback for non-entitled channel enables
	 *
	 * @var bool
	 */
	public $nonEntitledChannelPlaybackEnabled = null;

	/**
	 * Is recording playback for non-existing channel enables
	 *
	 * @var bool
	 */
	public $nonExistingChannelPlaybackEnabled = null;

	/**
	 * Quota Policy
	 *
	 * @var Kaltura_Client_Enum_QuotaOveragePolicy
	 */
	public $quotaOveragePolicy = null;

	/**
	 * Protection Policy
	 *
	 * @var Kaltura_Client_Enum_ProtectionPolicy
	 */
	public $protectionPolicy = null;

	/**
	 * The time in days for recovery recording that was delete by Auto Delete .
	 *
	 * @var int
	 */
	public $recoveryGracePeriod = null;

	/**
	 * Is private copy enabled for the account
	 *
	 * @var bool
	 */
	public $privateCopyEnabled = null;

	/**
	 * Quota in seconds
	 *
	 * @var int
	 */
	public $defaultQuota = null;

	/**
	 * Define whatever the partner enables the Personal Padding and Immediate / Stop recording services to the partner. Default value should be FALSE
	 *
	 * @var bool
	 */
	public $personalizedRecording = null;

	/**
	 * Define the max allowed number of parallel recordings. Default NULL unlimited
	 *
	 * @var int
	 */
	public $maxRecordingConcurrency = null;

	/**
	 * Define the max grace margin time for overlapping recording. Default NULL 0 margin
	 *
	 * @var int
	 */
	public $maxConcurrencyMargin = null;

	/**
	 * When using padded and immediate recordings, define if end date of recording should be rounded by the minute or by the second.
	 *             Default by minutes, FALSE.
	 *
	 * @var bool
	 */
	public $shouldRoundStopRecordingsBySeconds = null;


}

