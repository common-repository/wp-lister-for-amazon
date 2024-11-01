<?php
namespace Aws\CloudWatchEvidently;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch Evidently** service.
 * @method \Aws\Result batchEvaluateFeature(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise batchEvaluateFeatureAsync(array $args = [])
 * @method \Aws\Result createExperiment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createExperimentAsync(array $args = [])
 * @method \Aws\Result createFeature(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createFeatureAsync(array $args = [])
 * @method \Aws\Result createLaunch(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createLaunchAsync(array $args = [])
 * @method \Aws\Result createProject(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws\Result createSegment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise createSegmentAsync(array $args = [])
 * @method \Aws\Result deleteExperiment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteExperimentAsync(array $args = [])
 * @method \Aws\Result deleteFeature(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteFeatureAsync(array $args = [])
 * @method \Aws\Result deleteLaunch(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteLaunchAsync(array $args = [])
 * @method \Aws\Result deleteProject(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws\Result deleteSegment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise deleteSegmentAsync(array $args = [])
 * @method \Aws\Result evaluateFeature(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise evaluateFeatureAsync(array $args = [])
 * @method \Aws\Result getExperiment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getExperimentAsync(array $args = [])
 * @method \Aws\Result getExperimentResults(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getExperimentResultsAsync(array $args = [])
 * @method \Aws\Result getFeature(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getFeatureAsync(array $args = [])
 * @method \Aws\Result getLaunch(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getLaunchAsync(array $args = [])
 * @method \Aws\Result getProject(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \Aws\Result getSegment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise getSegmentAsync(array $args = [])
 * @method \Aws\Result listExperiments(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listExperimentsAsync(array $args = [])
 * @method \Aws\Result listFeatures(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listFeaturesAsync(array $args = [])
 * @method \Aws\Result listLaunches(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listLaunchesAsync(array $args = [])
 * @method \Aws\Result listProjects(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws\Result listSegmentReferences(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listSegmentReferencesAsync(array $args = [])
 * @method \Aws\Result listSegments(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listSegmentsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putProjectEvents(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise putProjectEventsAsync(array $args = [])
 * @method \Aws\Result startExperiment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise startExperimentAsync(array $args = [])
 * @method \Aws\Result startLaunch(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise startLaunchAsync(array $args = [])
 * @method \Aws\Result stopExperiment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise stopExperimentAsync(array $args = [])
 * @method \Aws\Result stopLaunch(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise stopLaunchAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testSegmentPattern(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise testSegmentPatternAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateExperiment(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateExperimentAsync(array $args = [])
 * @method \Aws\Result updateFeature(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateFeatureAsync(array $args = [])
 * @method \Aws\Result updateLaunch(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateLaunchAsync(array $args = [])
 * @method \Aws\Result updateProject(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \Aws\Result updateProjectDataDelivery(array $args = [])
 * @method \WPLab\GuzzeHttp\Promise\Promise updateProjectDataDeliveryAsync(array $args = [])
 */
class CloudWatchEvidentlyClient extends AwsClient {}
