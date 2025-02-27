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
class Kaltura_Client_Client extends Kaltura_Client_ClientBase
{
	/**
	 * 
	 * @var Kaltura_Client_AnnouncementService
	 */
	public $announcement = null;

	/**
	 * 
	 * @var Kaltura_Client_AppTokenService
	 */
	public $appToken = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetCommentService
	 */
	public $assetComment = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetService
	 */
	public $asset = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetFileService
	 */
	public $assetFile = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetFilePpvService
	 */
	public $assetFilePpv = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetHistoryService
	 */
	public $assetHistory = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetPersonalMarkupService
	 */
	public $assetPersonalMarkup = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetPersonalSelectionService
	 */
	public $assetPersonalSelection = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetRuleService
	 */
	public $assetRule = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetStatisticsService
	 */
	public $assetStatistics = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetStructService
	 */
	public $assetStruct = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetStructMetaService
	 */
	public $assetStructMeta = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetUserRuleService
	 */
	public $assetUserRule = null;

	/**
	 * 
	 * @var Kaltura_Client_BookmarkService
	 */
	public $bookmark = null;

	/**
	 * 
	 * @var Kaltura_Client_BulkUploadService
	 */
	public $bulkUpload = null;

	/**
	 * 
	 * @var Kaltura_Client_BulkUploadStatisticsService
	 */
	public $bulkUploadStatistics = null;

	/**
	 * 
	 * @var Kaltura_Client_BusinessModuleRuleService
	 */
	public $businessModuleRule = null;

	/**
	 * 
	 * @var Kaltura_Client_CampaignService
	 */
	public $campaign = null;

	/**
	 * 
	 * @var Kaltura_Client_CategoryItemService
	 */
	public $categoryItem = null;

	/**
	 * 
	 * @var Kaltura_Client_CategoryTreeService
	 */
	public $categoryTree = null;

	/**
	 * 
	 * @var Kaltura_Client_CategoryVersionService
	 */
	public $categoryVersion = null;

	/**
	 * 
	 * @var Kaltura_Client_CdnAdapterProfileService
	 */
	public $cdnAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_CdnPartnerSettingsService
	 */
	public $cdnPartnerSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_CDVRAdapterProfileService
	 */
	public $cDVRAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_ChannelService
	 */
	public $channel = null;

	/**
	 * 
	 * @var Kaltura_Client_CollectionService
	 */
	public $collection = null;

	/**
	 * 
	 * @var Kaltura_Client_CompensationService
	 */
	public $compensation = null;

	/**
	 * 
	 * @var Kaltura_Client_ConfigurationGroupService
	 */
	public $configurationGroup = null;

	/**
	 * 
	 * @var Kaltura_Client_ConfigurationGroupDeviceService
	 */
	public $configurationGroupDevice = null;

	/**
	 * 
	 * @var Kaltura_Client_ConfigurationGroupTagService
	 */
	public $configurationGroupTag = null;

	/**
	 * 
	 * @var Kaltura_Client_ConfigurationsService
	 */
	public $configurations = null;

	/**
	 * 
	 * @var Kaltura_Client_CountryService
	 */
	public $country = null;

	/**
	 * 
	 * @var Kaltura_Client_CouponService
	 */
	public $coupon = null;

	/**
	 * 
	 * @var Kaltura_Client_CouponsGroupService
	 */
	public $couponsGroup = null;

	/**
	 * 
	 * @var Kaltura_Client_CurrencyService
	 */
	public $currency = null;

	/**
	 * 
	 * @var Kaltura_Client_DeviceBrandService
	 */
	public $deviceBrand = null;

	/**
	 * 
	 * @var Kaltura_Client_DeviceFamilyService
	 */
	public $deviceFamily = null;

	/**
	 * 
	 * @var Kaltura_Client_DeviceReferenceDataService
	 */
	public $deviceReferenceData = null;

	/**
	 * 
	 * @var Kaltura_Client_DiscountDetailsService
	 */
	public $discountDetails = null;

	/**
	 * 
	 * @var Kaltura_Client_DrmProfileService
	 */
	public $drmProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_DurationService
	 */
	public $duration = null;

	/**
	 * 
	 * @var Kaltura_Client_DynamicListService
	 */
	public $dynamicList = null;

	/**
	 * 
	 * @var Kaltura_Client_EmailService
	 */
	public $email = null;

	/**
	 * 
	 * @var Kaltura_Client_EngagementAdapterService
	 */
	public $engagementAdapter = null;

	/**
	 * 
	 * @var Kaltura_Client_EngagementService
	 */
	public $engagement = null;

	/**
	 * 
	 * @var Kaltura_Client_EntitlementService
	 */
	public $entitlement = null;

	/**
	 * 
	 * @var Kaltura_Client_EpgService
	 */
	public $epg = null;

	/**
	 * 
	 * @var Kaltura_Client_EpgServicePartnerConfigurationService
	 */
	public $epgServicePartnerConfiguration = null;

	/**
	 * 
	 * @var Kaltura_Client_EventNotificationActionService
	 */
	public $eventNotificationAction = null;

	/**
	 * 
	 * @var Kaltura_Client_EventNotificationService
	 */
	public $eventNotification = null;

	/**
	 * 
	 * @var Kaltura_Client_ExportTaskService
	 */
	public $exportTask = null;

	/**
	 * 
	 * @var Kaltura_Client_ExternalChannelProfileService
	 */
	public $externalChannelProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_FavoriteService
	 */
	public $favorite = null;

	/**
	 * 
	 * @var Kaltura_Client_FollowTvSeriesService
	 */
	public $followTvSeries = null;

	/**
	 * 
	 * @var Kaltura_Client_HomeNetworkService
	 */
	public $homeNetwork = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdService
	 */
	public $household = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdCouponService
	 */
	public $householdCoupon = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdDeviceService
	 */
	public $householdDevice = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdLimitationsService
	 */
	public $householdLimitations = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdPaymentGatewayService
	 */
	public $householdPaymentGateway = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdPaymentMethodService
	 */
	public $householdPaymentMethod = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdPremiumServiceService
	 */
	public $householdPremiumService = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdQuotaService
	 */
	public $householdQuota = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdSegmentService
	 */
	public $householdSegment = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdUserService
	 */
	public $householdUser = null;

	/**
	 * 
	 * @var Kaltura_Client_ImageService
	 */
	public $image = null;

	/**
	 * 
	 * @var Kaltura_Client_ImageTypeService
	 */
	public $imageType = null;

	/**
	 * 
	 * @var Kaltura_Client_InboxMessageService
	 */
	public $inboxMessage = null;

	/**
	 * 
	 * @var Kaltura_Client_IngestProfileService
	 */
	public $IngestProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_IngestStatusService
	 */
	public $ingestStatus = null;

	/**
	 * 
	 * @var Kaltura_Client_IotService
	 */
	public $iot = null;

	/**
	 * 
	 * @var Kaltura_Client_IotProfileService
	 */
	public $iotProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_LabelService
	 */
	public $label = null;

	/**
	 * 
	 * @var Kaltura_Client_LanguageService
	 */
	public $language = null;

	/**
	 * 
	 * @var Kaltura_Client_LicensedUrlService
	 */
	public $licensedUrl = null;

	/**
	 * 
	 * @var Kaltura_Client_LineupService
	 */
	public $lineup = null;

	/**
	 * 
	 * @var Kaltura_Client_LiveToVodService
	 */
	public $liveToVod = null;

	/**
	 * 
	 * @var Kaltura_Client_MediaConcurrencyRuleService
	 */
	public $mediaConcurrencyRule = null;

	/**
	 * 
	 * @var Kaltura_Client_MediaFileService
	 */
	public $mediaFile = null;

	/**
	 * 
	 * @var Kaltura_Client_MediaFileDynamicDataService
	 */
	public $mediaFileDynamicData = null;

	/**
	 * 
	 * @var Kaltura_Client_MediaFileTypeService
	 */
	public $mediaFileType = null;

	/**
	 * 
	 * @var Kaltura_Client_MessageTemplateService
	 */
	public $messageTemplate = null;

	/**
	 * 
	 * @var Kaltura_Client_MetaService
	 */
	public $meta = null;

	/**
	 * 
	 * @var Kaltura_Client_MfaPartnerConfigurationService
	 */
	public $mfaPartnerConfiguration = null;

	/**
	 * 
	 * @var Kaltura_Client_NotificationService
	 */
	public $notification = null;

	/**
	 * 
	 * @var Kaltura_Client_NotificationsPartnerSettingsService
	 */
	public $notificationsPartnerSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_NotificationsSettingsService
	 */
	public $notificationsSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_OssAdapterProfileService
	 */
	public $ossAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_OttCategoryService
	 */
	public $ottCategory = null;

	/**
	 * 
	 * @var Kaltura_Client_OttUserService
	 */
	public $ottUser = null;

	/**
	 * 
	 * @var Kaltura_Client_ParentalRuleService
	 */
	public $parentalRule = null;

	/**
	 * 
	 * @var Kaltura_Client_PartnerConfigurationService
	 */
	public $partnerConfiguration = null;

	/**
	 * 
	 * @var Kaltura_Client_PartnerService
	 */
	public $partner = null;

	/**
	 * 
	 * @var Kaltura_Client_PartnerPremiumServicesService
	 */
	public $partnerPremiumServices = null;

	/**
	 * 
	 * @var Kaltura_Client_PasswordPolicyService
	 */
	public $passwordPolicy = null;

	/**
	 * 
	 * @var Kaltura_Client_PaymentGatewayProfileService
	 */
	public $paymentGatewayProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_PaymentMethodProfileService
	 */
	public $paymentMethodProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_PermissionService
	 */
	public $permission = null;

	/**
	 * 
	 * @var Kaltura_Client_PermissionItemService
	 */
	public $permissionItem = null;

	/**
	 * 
	 * @var Kaltura_Client_PersonalActivityCleanupService
	 */
	public $personalActivityCleanup = null;

	/**
	 * 
	 * @var Kaltura_Client_PersonalFeedService
	 */
	public $personalFeed = null;

	/**
	 * 
	 * @var Kaltura_Client_PersonalListService
	 */
	public $personalList = null;

	/**
	 * 
	 * @var Kaltura_Client_PinService
	 */
	public $pin = null;

	/**
	 * 
	 * @var Kaltura_Client_PlaybackProfileService
	 */
	public $playbackProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_PpvService
	 */
	public $ppv = null;

	/**
	 * 
	 * @var Kaltura_Client_PreviewModuleService
	 */
	public $previewModule = null;

	/**
	 * 
	 * @var Kaltura_Client_PriceDetailsService
	 */
	public $priceDetails = null;

	/**
	 * 
	 * @var Kaltura_Client_PricePlanService
	 */
	public $pricePlan = null;

	/**
	 * 
	 * @var Kaltura_Client_ProductPriceService
	 */
	public $productPrice = null;

	/**
	 * 
	 * @var Kaltura_Client_ProgramAssetGroupOfferService
	 */
	public $programAssetGroupOffer = null;

	/**
	 * 
	 * @var Kaltura_Client_PurchaseSettingsService
	 */
	public $purchaseSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_RatioService
	 */
	public $ratio = null;

	/**
	 * 
	 * @var Kaltura_Client_RecommendationProfileService
	 */
	public $recommendationProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_RecordingService
	 */
	public $recording = null;

	/**
	 * 
	 * @var Kaltura_Client_RegionService
	 */
	public $region = null;

	/**
	 * 
	 * @var Kaltura_Client_RegistrySettingsService
	 */
	public $registrySettings = null;

	/**
	 * 
	 * @var Kaltura_Client_ReminderService
	 */
	public $reminder = null;

	/**
	 * 
	 * @var Kaltura_Client_ReportService
	 */
	public $report = null;

	/**
	 * 
	 * @var Kaltura_Client_SearchHistoryService
	 */
	public $searchHistory = null;

	/**
	 * 
	 * @var Kaltura_Client_SearchPriorityGroupService
	 */
	public $searchPriorityGroup = null;

	/**
	 * 
	 * @var Kaltura_Client_SearchPriorityGroupOrderedIdsSetService
	 */
	public $searchPriorityGroupOrderedIdsSet = null;

	/**
	 * 
	 * @var Kaltura_Client_SegmentationTypeService
	 */
	public $segmentationType = null;

	/**
	 * 
	 * @var Kaltura_Client_SeriesRecordingService
	 */
	public $seriesRecording = null;

	/**
	 * 
	 * @var Kaltura_Client_SessionService
	 */
	public $session = null;

	/**
	 * 
	 * @var Kaltura_Client_SmsAdapterProfileService
	 */
	public $smsAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_SocialActionService
	 */
	public $socialAction = null;

	/**
	 * 
	 * @var Kaltura_Client_SocialCommentService
	 */
	public $socialComment = null;

	/**
	 * 
	 * @var Kaltura_Client_SocialService
	 */
	public $social = null;

	/**
	 * 
	 * @var Kaltura_Client_SocialFriendActivityService
	 */
	public $socialFriendActivity = null;

	/**
	 * 
	 * @var Kaltura_Client_SsoAdapterProfileService
	 */
	public $ssoAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_StreamingDeviceService
	 */
	public $streamingDevice = null;

	/**
	 * 
	 * @var Kaltura_Client_SubscriptionService
	 */
	public $subscription = null;

	/**
	 * 
	 * @var Kaltura_Client_SubscriptionSetService
	 */
	public $subscriptionSet = null;

	/**
	 * 
	 * @var Kaltura_Client_SystemService
	 */
	public $system = null;

	/**
	 * 
	 * @var Kaltura_Client_TagService
	 */
	public $tag = null;

	/**
	 * 
	 * @var Kaltura_Client_TimeShiftedTvPartnerSettingsService
	 */
	public $timeShiftedTvPartnerSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_TopicService
	 */
	public $topic = null;

	/**
	 * 
	 * @var Kaltura_Client_TopicNotificationService
	 */
	public $topicNotification = null;

	/**
	 * 
	 * @var Kaltura_Client_TopicNotificationMessageService
	 */
	public $topicNotificationMessage = null;

	/**
	 * 
	 * @var Kaltura_Client_TransactionService
	 */
	public $transaction = null;

	/**
	 * 
	 * @var Kaltura_Client_TransactionHistoryService
	 */
	public $transactionHistory = null;

	/**
	 * 
	 * @var Kaltura_Client_TvmRuleService
	 */
	public $tvmRule = null;

	/**
	 * 
	 * @var Kaltura_Client_UnifiedPaymentService
	 */
	public $unifiedPayment = null;

	/**
	 * 
	 * @var Kaltura_Client_UploadTokenService
	 */
	public $uploadToken = null;

	/**
	 * 
	 * @var Kaltura_Client_UsageModuleService
	 */
	public $usageModule = null;

	/**
	 * 
	 * @var Kaltura_Client_UserAssetRuleService
	 */
	public $userAssetRule = null;

	/**
	 * 
	 * @var Kaltura_Client_UserAssetsListItemService
	 */
	public $userAssetsListItem = null;

	/**
	 * 
	 * @var Kaltura_Client_UserInterestService
	 */
	public $userInterest = null;

	/**
	 * 
	 * @var Kaltura_Client_UserLoginPinService
	 */
	public $userLoginPin = null;

	/**
	 * 
	 * @var Kaltura_Client_UserRoleService
	 */
	public $userRole = null;

	/**
	 * 
	 * @var Kaltura_Client_UserSegmentService
	 */
	public $userSegment = null;

	/**
	 * 
	 * @var Kaltura_Client_UserSessionProfileService
	 */
	public $userSessionProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_WatchBasedRecommendationsAdminConfigurationService
	 */
	public $watchBasedRecommendationsAdminConfiguration = null;

	/**
	 * 
	 * @var Kaltura_Client_WatchBasedRecommendationsProfileService
	 */
	public $watchBasedRecommendationsProfile = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param Kaltura_Client_Configuration $config
	 */
	public function __construct(Kaltura_Client_Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:25-02-27');
		$this->setApiVersion('11.0.0.0');
		
		$this->announcement = new Kaltura_Client_AnnouncementService($this);
		$this->appToken = new Kaltura_Client_AppTokenService($this);
		$this->assetComment = new Kaltura_Client_AssetCommentService($this);
		$this->asset = new Kaltura_Client_AssetService($this);
		$this->assetFile = new Kaltura_Client_AssetFileService($this);
		$this->assetFilePpv = new Kaltura_Client_AssetFilePpvService($this);
		$this->assetHistory = new Kaltura_Client_AssetHistoryService($this);
		$this->assetPersonalMarkup = new Kaltura_Client_AssetPersonalMarkupService($this);
		$this->assetPersonalSelection = new Kaltura_Client_AssetPersonalSelectionService($this);
		$this->assetRule = new Kaltura_Client_AssetRuleService($this);
		$this->assetStatistics = new Kaltura_Client_AssetStatisticsService($this);
		$this->assetStruct = new Kaltura_Client_AssetStructService($this);
		$this->assetStructMeta = new Kaltura_Client_AssetStructMetaService($this);
		$this->assetUserRule = new Kaltura_Client_AssetUserRuleService($this);
		$this->bookmark = new Kaltura_Client_BookmarkService($this);
		$this->bulkUpload = new Kaltura_Client_BulkUploadService($this);
		$this->bulkUploadStatistics = new Kaltura_Client_BulkUploadStatisticsService($this);
		$this->businessModuleRule = new Kaltura_Client_BusinessModuleRuleService($this);
		$this->campaign = new Kaltura_Client_CampaignService($this);
		$this->categoryItem = new Kaltura_Client_CategoryItemService($this);
		$this->categoryTree = new Kaltura_Client_CategoryTreeService($this);
		$this->categoryVersion = new Kaltura_Client_CategoryVersionService($this);
		$this->cdnAdapterProfile = new Kaltura_Client_CdnAdapterProfileService($this);
		$this->cdnPartnerSettings = new Kaltura_Client_CdnPartnerSettingsService($this);
		$this->cDVRAdapterProfile = new Kaltura_Client_CDVRAdapterProfileService($this);
		$this->channel = new Kaltura_Client_ChannelService($this);
		$this->collection = new Kaltura_Client_CollectionService($this);
		$this->compensation = new Kaltura_Client_CompensationService($this);
		$this->configurationGroup = new Kaltura_Client_ConfigurationGroupService($this);
		$this->configurationGroupDevice = new Kaltura_Client_ConfigurationGroupDeviceService($this);
		$this->configurationGroupTag = new Kaltura_Client_ConfigurationGroupTagService($this);
		$this->configurations = new Kaltura_Client_ConfigurationsService($this);
		$this->country = new Kaltura_Client_CountryService($this);
		$this->coupon = new Kaltura_Client_CouponService($this);
		$this->couponsGroup = new Kaltura_Client_CouponsGroupService($this);
		$this->currency = new Kaltura_Client_CurrencyService($this);
		$this->deviceBrand = new Kaltura_Client_DeviceBrandService($this);
		$this->deviceFamily = new Kaltura_Client_DeviceFamilyService($this);
		$this->deviceReferenceData = new Kaltura_Client_DeviceReferenceDataService($this);
		$this->discountDetails = new Kaltura_Client_DiscountDetailsService($this);
		$this->drmProfile = new Kaltura_Client_DrmProfileService($this);
		$this->duration = new Kaltura_Client_DurationService($this);
		$this->dynamicList = new Kaltura_Client_DynamicListService($this);
		$this->email = new Kaltura_Client_EmailService($this);
		$this->engagementAdapter = new Kaltura_Client_EngagementAdapterService($this);
		$this->engagement = new Kaltura_Client_EngagementService($this);
		$this->entitlement = new Kaltura_Client_EntitlementService($this);
		$this->epg = new Kaltura_Client_EpgService($this);
		$this->epgServicePartnerConfiguration = new Kaltura_Client_EpgServicePartnerConfigurationService($this);
		$this->eventNotificationAction = new Kaltura_Client_EventNotificationActionService($this);
		$this->eventNotification = new Kaltura_Client_EventNotificationService($this);
		$this->exportTask = new Kaltura_Client_ExportTaskService($this);
		$this->externalChannelProfile = new Kaltura_Client_ExternalChannelProfileService($this);
		$this->favorite = new Kaltura_Client_FavoriteService($this);
		$this->followTvSeries = new Kaltura_Client_FollowTvSeriesService($this);
		$this->homeNetwork = new Kaltura_Client_HomeNetworkService($this);
		$this->household = new Kaltura_Client_HouseholdService($this);
		$this->householdCoupon = new Kaltura_Client_HouseholdCouponService($this);
		$this->householdDevice = new Kaltura_Client_HouseholdDeviceService($this);
		$this->householdLimitations = new Kaltura_Client_HouseholdLimitationsService($this);
		$this->householdPaymentGateway = new Kaltura_Client_HouseholdPaymentGatewayService($this);
		$this->householdPaymentMethod = new Kaltura_Client_HouseholdPaymentMethodService($this);
		$this->householdPremiumService = new Kaltura_Client_HouseholdPremiumServiceService($this);
		$this->householdQuota = new Kaltura_Client_HouseholdQuotaService($this);
		$this->householdSegment = new Kaltura_Client_HouseholdSegmentService($this);
		$this->householdUser = new Kaltura_Client_HouseholdUserService($this);
		$this->image = new Kaltura_Client_ImageService($this);
		$this->imageType = new Kaltura_Client_ImageTypeService($this);
		$this->inboxMessage = new Kaltura_Client_InboxMessageService($this);
		$this->IngestProfile = new Kaltura_Client_IngestProfileService($this);
		$this->ingestStatus = new Kaltura_Client_IngestStatusService($this);
		$this->iot = new Kaltura_Client_IotService($this);
		$this->iotProfile = new Kaltura_Client_IotProfileService($this);
		$this->label = new Kaltura_Client_LabelService($this);
		$this->language = new Kaltura_Client_LanguageService($this);
		$this->licensedUrl = new Kaltura_Client_LicensedUrlService($this);
		$this->lineup = new Kaltura_Client_LineupService($this);
		$this->liveToVod = new Kaltura_Client_LiveToVodService($this);
		$this->mediaConcurrencyRule = new Kaltura_Client_MediaConcurrencyRuleService($this);
		$this->mediaFile = new Kaltura_Client_MediaFileService($this);
		$this->mediaFileDynamicData = new Kaltura_Client_MediaFileDynamicDataService($this);
		$this->mediaFileType = new Kaltura_Client_MediaFileTypeService($this);
		$this->messageTemplate = new Kaltura_Client_MessageTemplateService($this);
		$this->meta = new Kaltura_Client_MetaService($this);
		$this->mfaPartnerConfiguration = new Kaltura_Client_MfaPartnerConfigurationService($this);
		$this->notification = new Kaltura_Client_NotificationService($this);
		$this->notificationsPartnerSettings = new Kaltura_Client_NotificationsPartnerSettingsService($this);
		$this->notificationsSettings = new Kaltura_Client_NotificationsSettingsService($this);
		$this->ossAdapterProfile = new Kaltura_Client_OssAdapterProfileService($this);
		$this->ottCategory = new Kaltura_Client_OttCategoryService($this);
		$this->ottUser = new Kaltura_Client_OttUserService($this);
		$this->parentalRule = new Kaltura_Client_ParentalRuleService($this);
		$this->partnerConfiguration = new Kaltura_Client_PartnerConfigurationService($this);
		$this->partner = new Kaltura_Client_PartnerService($this);
		$this->partnerPremiumServices = new Kaltura_Client_PartnerPremiumServicesService($this);
		$this->passwordPolicy = new Kaltura_Client_PasswordPolicyService($this);
		$this->paymentGatewayProfile = new Kaltura_Client_PaymentGatewayProfileService($this);
		$this->paymentMethodProfile = new Kaltura_Client_PaymentMethodProfileService($this);
		$this->permission = new Kaltura_Client_PermissionService($this);
		$this->permissionItem = new Kaltura_Client_PermissionItemService($this);
		$this->personalActivityCleanup = new Kaltura_Client_PersonalActivityCleanupService($this);
		$this->personalFeed = new Kaltura_Client_PersonalFeedService($this);
		$this->personalList = new Kaltura_Client_PersonalListService($this);
		$this->pin = new Kaltura_Client_PinService($this);
		$this->playbackProfile = new Kaltura_Client_PlaybackProfileService($this);
		$this->ppv = new Kaltura_Client_PpvService($this);
		$this->previewModule = new Kaltura_Client_PreviewModuleService($this);
		$this->priceDetails = new Kaltura_Client_PriceDetailsService($this);
		$this->pricePlan = new Kaltura_Client_PricePlanService($this);
		$this->productPrice = new Kaltura_Client_ProductPriceService($this);
		$this->programAssetGroupOffer = new Kaltura_Client_ProgramAssetGroupOfferService($this);
		$this->purchaseSettings = new Kaltura_Client_PurchaseSettingsService($this);
		$this->ratio = new Kaltura_Client_RatioService($this);
		$this->recommendationProfile = new Kaltura_Client_RecommendationProfileService($this);
		$this->recording = new Kaltura_Client_RecordingService($this);
		$this->region = new Kaltura_Client_RegionService($this);
		$this->registrySettings = new Kaltura_Client_RegistrySettingsService($this);
		$this->reminder = new Kaltura_Client_ReminderService($this);
		$this->report = new Kaltura_Client_ReportService($this);
		$this->searchHistory = new Kaltura_Client_SearchHistoryService($this);
		$this->searchPriorityGroup = new Kaltura_Client_SearchPriorityGroupService($this);
		$this->searchPriorityGroupOrderedIdsSet = new Kaltura_Client_SearchPriorityGroupOrderedIdsSetService($this);
		$this->segmentationType = new Kaltura_Client_SegmentationTypeService($this);
		$this->seriesRecording = new Kaltura_Client_SeriesRecordingService($this);
		$this->session = new Kaltura_Client_SessionService($this);
		$this->smsAdapterProfile = new Kaltura_Client_SmsAdapterProfileService($this);
		$this->socialAction = new Kaltura_Client_SocialActionService($this);
		$this->socialComment = new Kaltura_Client_SocialCommentService($this);
		$this->social = new Kaltura_Client_SocialService($this);
		$this->socialFriendActivity = new Kaltura_Client_SocialFriendActivityService($this);
		$this->ssoAdapterProfile = new Kaltura_Client_SsoAdapterProfileService($this);
		$this->streamingDevice = new Kaltura_Client_StreamingDeviceService($this);
		$this->subscription = new Kaltura_Client_SubscriptionService($this);
		$this->subscriptionSet = new Kaltura_Client_SubscriptionSetService($this);
		$this->system = new Kaltura_Client_SystemService($this);
		$this->tag = new Kaltura_Client_TagService($this);
		$this->timeShiftedTvPartnerSettings = new Kaltura_Client_TimeShiftedTvPartnerSettingsService($this);
		$this->topic = new Kaltura_Client_TopicService($this);
		$this->topicNotification = new Kaltura_Client_TopicNotificationService($this);
		$this->topicNotificationMessage = new Kaltura_Client_TopicNotificationMessageService($this);
		$this->transaction = new Kaltura_Client_TransactionService($this);
		$this->transactionHistory = new Kaltura_Client_TransactionHistoryService($this);
		$this->tvmRule = new Kaltura_Client_TvmRuleService($this);
		$this->unifiedPayment = new Kaltura_Client_UnifiedPaymentService($this);
		$this->uploadToken = new Kaltura_Client_UploadTokenService($this);
		$this->usageModule = new Kaltura_Client_UsageModuleService($this);
		$this->userAssetRule = new Kaltura_Client_UserAssetRuleService($this);
		$this->userAssetsListItem = new Kaltura_Client_UserAssetsListItemService($this);
		$this->userInterest = new Kaltura_Client_UserInterestService($this);
		$this->userLoginPin = new Kaltura_Client_UserLoginPinService($this);
		$this->userRole = new Kaltura_Client_UserRoleService($this);
		$this->userSegment = new Kaltura_Client_UserSegmentService($this);
		$this->userSessionProfile = new Kaltura_Client_UserSessionProfileService($this);
		$this->watchBasedRecommendationsAdminConfiguration = new Kaltura_Client_WatchBasedRecommendationsAdminConfigurationService($this);
		$this->watchBasedRecommendationsProfile = new Kaltura_Client_WatchBasedRecommendationsProfileService($this);
	}
	
	/**
	 * Client tag
	 * 
	 * @param string $clientTag
	 */
	public function setClientTag($clientTag)
	{
		$this->clientConfiguration['clientTag'] = $clientTag;
	}
	
	/**
	 * Client tag
	 * 
	 * @return string
	 */
	public function getClientTag()
	{
		if(isset($this->clientConfiguration['clientTag']))
		{
			return $this->clientConfiguration['clientTag'];
		}
		
		return null;
	}
	
	/**
	 * API Version
	 * 
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->clientConfiguration['apiVersion'] = $apiVersion;
	}
	
	/**
	 * API Version
	 * 
	 * @return string
	 */
	public function getApiVersion()
	{
		if(isset($this->clientConfiguration['apiVersion']))
		{
			return $this->clientConfiguration['apiVersion'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @param int $partnerId
	 */
	public function setPartnerId($partnerId)
	{
		$this->requestConfiguration['partnerId'] = $partnerId;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @return int
	 */
	public function getPartnerId()
	{
		if(isset($this->requestConfiguration['partnerId']))
		{
			return $this->requestConfiguration['partnerId'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->requestConfiguration['userId'] = $userId;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @return int
	 */
	public function getUserId()
	{
		if(isset($this->requestConfiguration['userId']))
		{
			return $this->requestConfiguration['userId'];
		}
		
		return null;
	}
	
	/**
	 * Content language
	 * 
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		$this->requestConfiguration['language'] = $language;
	}
	
	/**
	 * Content language
	 * 
	 * @return string
	 */
	public function getLanguage()
	{
		if(isset($this->requestConfiguration['language']))
		{
			return $this->requestConfiguration['language'];
		}
		
		return null;
	}
	
	/**
	 * Content currency
	 * 
	 * @param string $currency
	 */
	public function setCurrency($currency)
	{
		$this->requestConfiguration['currency'] = $currency;
	}
	
	/**
	 * Content currency
	 * 
	 * @return string
	 */
	public function getCurrency()
	{
		if(isset($this->requestConfiguration['currency']))
		{
			return $this->requestConfiguration['currency'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $ks
	 */
	public function setKs($ks)
	{
		$this->requestConfiguration['ks'] = $ks;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getKs()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		$this->requestConfiguration['ks'] = $sessionId;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getSessionId()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call
	 * 
	 * @param Kaltura_Client_Type_BaseResponseProfile $responseProfile
	 */
	public function setResponseProfile(Kaltura_Client_Type_BaseResponseProfile $responseProfile)
	{
		$this->requestConfiguration['responseProfile'] = $responseProfile;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call
	 * 
	 * @return Kaltura_Client_Type_BaseResponseProfile
	 */
	public function getResponseProfile()
	{
		if(isset($this->requestConfiguration['responseProfile']))
		{
			return $this->requestConfiguration['responseProfile'];
		}
		
		return null;
	}
	
	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * 
	 * @param bool $abortOnError
	 */
	public function setAbortOnError($abortOnError)
	{
		$this->requestConfiguration['abortOnError'] = $abortOnError;
	}
	
	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * 
	 * @return bool
	 */
	public function getAbortOnError()
	{
		if(isset($this->requestConfiguration['abortOnError']))
		{
			return $this->requestConfiguration['abortOnError'];
		}
		
		return null;
	}
	
	/**
	 * Abort all following requests if current request has an error
	 * 
	 * @param bool $abortAllOnError
	 */
	public function setAbortAllOnError($abortAllOnError)
	{
		$this->requestConfiguration['abortAllOnError'] = $abortAllOnError;
	}
	
	/**
	 * Abort all following requests if current request has an error
	 * 
	 * @return bool
	 */
	public function getAbortAllOnError()
	{
		if(isset($this->requestConfiguration['abortAllOnError']))
		{
			return $this->requestConfiguration['abortAllOnError'];
		}
		
		return null;
	}
	
	/**
	 * Skip current request according to skip condition
	 * 
	 * @param Kaltura_Client_Type_SkipCondition $skipCondition
	 */
	public function setSkipCondition(Kaltura_Client_Type_SkipCondition $skipCondition)
	{
		$this->requestConfiguration['skipCondition'] = $skipCondition;
	}
	
	/**
	 * Skip current request according to skip condition
	 * 
	 * @return Kaltura_Client_Type_SkipCondition
	 */
	public function getSkipCondition()
	{
		if(isset($this->requestConfiguration['skipCondition']))
		{
			return $this->requestConfiguration['skipCondition'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
		unset($this->requestConfiguration['responseProfile']);
	}
}
