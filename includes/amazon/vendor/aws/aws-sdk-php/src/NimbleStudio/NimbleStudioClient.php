<?php
namespace Aws\NimbleStudio;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AmazonNimbleStudio** service.
 * @method \Aws\Result acceptEulas(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise acceptEulasAsync(array $args = [])
 * @method \Aws\Result createLaunchProfile(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createLaunchProfileAsync(array $args = [])
 * @method \Aws\Result createStreamingImage(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createStreamingImageAsync(array $args = [])
 * @method \Aws\Result createStreamingSession(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createStreamingSessionAsync(array $args = [])
 * @method \Aws\Result createStreamingSessionStream(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createStreamingSessionStreamAsync(array $args = [])
 * @method \Aws\Result createStudio(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createStudioAsync(array $args = [])
 * @method \Aws\Result createStudioComponent(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createStudioComponentAsync(array $args = [])
 * @method \Aws\Result deleteLaunchProfile(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteLaunchProfileAsync(array $args = [])
 * @method \Aws\Result deleteLaunchProfileMember(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteLaunchProfileMemberAsync(array $args = [])
 * @method \Aws\Result deleteStreamingImage(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteStreamingImageAsync(array $args = [])
 * @method \Aws\Result deleteStreamingSession(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteStreamingSessionAsync(array $args = [])
 * @method \Aws\Result deleteStudio(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteStudioAsync(array $args = [])
 * @method \Aws\Result deleteStudioComponent(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteStudioComponentAsync(array $args = [])
 * @method \Aws\Result deleteStudioMember(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteStudioMemberAsync(array $args = [])
 * @method \Aws\Result getEula(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getEulaAsync(array $args = [])
 * @method \Aws\Result getLaunchProfile(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getLaunchProfileAsync(array $args = [])
 * @method \Aws\Result getLaunchProfileDetails(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getLaunchProfileDetailsAsync(array $args = [])
 * @method \Aws\Result getLaunchProfileInitialization(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getLaunchProfileInitializationAsync(array $args = [])
 * @method \Aws\Result getLaunchProfileMember(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getLaunchProfileMemberAsync(array $args = [])
 * @method \Aws\Result getStreamingImage(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getStreamingImageAsync(array $args = [])
 * @method \Aws\Result getStreamingSession(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getStreamingSessionAsync(array $args = [])
 * @method \Aws\Result getStreamingSessionStream(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getStreamingSessionStreamAsync(array $args = [])
 * @method \Aws\Result getStudio(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getStudioAsync(array $args = [])
 * @method \Aws\Result getStudioComponent(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getStudioComponentAsync(array $args = [])
 * @method \Aws\Result getStudioMember(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getStudioMemberAsync(array $args = [])
 * @method \Aws\Result listEulaAcceptances(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listEulaAcceptancesAsync(array $args = [])
 * @method \Aws\Result listEulas(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listEulasAsync(array $args = [])
 * @method \Aws\Result listLaunchProfileMembers(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listLaunchProfileMembersAsync(array $args = [])
 * @method \Aws\Result listLaunchProfiles(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listLaunchProfilesAsync(array $args = [])
 * @method \Aws\Result listStreamingImages(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listStreamingImagesAsync(array $args = [])
 * @method \Aws\Result listStreamingSessions(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listStreamingSessionsAsync(array $args = [])
 * @method \Aws\Result listStudioComponents(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listStudioComponentsAsync(array $args = [])
 * @method \Aws\Result listStudioMembers(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listStudioMembersAsync(array $args = [])
 * @method \Aws\Result listStudios(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listStudiosAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putLaunchProfileMembers(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise putLaunchProfileMembersAsync(array $args = [])
 * @method \Aws\Result putStudioMembers(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise putStudioMembersAsync(array $args = [])
 * @method \Aws\Result startStreamingSession(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise startStreamingSessionAsync(array $args = [])
 * @method \Aws\Result startStudioSSOConfigurationRepair(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise startStudioSSOConfigurationRepairAsync(array $args = [])
 * @method \Aws\Result stopStreamingSession(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise stopStreamingSessionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateLaunchProfile(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateLaunchProfileAsync(array $args = [])
 * @method \Aws\Result updateLaunchProfileMember(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateLaunchProfileMemberAsync(array $args = [])
 * @method \Aws\Result updateStreamingImage(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateStreamingImageAsync(array $args = [])
 * @method \Aws\Result updateStudio(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateStudioAsync(array $args = [])
 * @method \Aws\Result updateStudioComponent(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateStudioComponentAsync(array $args = [])
 */
class NimbleStudioClient extends AwsClient {}
