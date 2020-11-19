<?php
// This file was auto-generated from sdk-root/src/data/accessanalyzer/2019-11-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-11-01', 'endpointPrefix' => 'access-analyzer', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Access Analyzer', 'serviceId' => 'AccessAnalyzer', 'signatureVersion' => 'v4', 'signingName' => 'access-analyzer', 'uid' => 'accessanalyzer-2019-11-01', ], 'operations' => [ 'ApplyArchiveRule' => [ 'name' => 'ApplyArchiveRule', 'http' => [ 'method' => 'PUT', 'requestUri' => '/archive-rule', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ApplyArchiveRuleRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'CreateAnalyzer' => [ 'name' => 'CreateAnalyzer', 'http' => [ 'method' => 'PUT', 'requestUri' => '/analyzer', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateAnalyzerRequest', ], 'output' => [ 'shape' => 'CreateAnalyzerResponse', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'CreateArchiveRule' => [ 'name' => 'CreateArchiveRule', 'http' => [ 'method' => 'PUT', 'requestUri' => '/analyzer/{analyzerName}/archive-rule', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateArchiveRuleRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteAnalyzer' => [ 'name' => 'DeleteAnalyzer', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/analyzer/{analyzerName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteAnalyzerRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteArchiveRule' => [ 'name' => 'DeleteArchiveRule', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/analyzer/{analyzerName}/archive-rule/{ruleName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteArchiveRuleRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'GetAnalyzedResource' => [ 'name' => 'GetAnalyzedResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/analyzed-resource', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetAnalyzedResourceRequest', ], 'output' => [ 'shape' => 'GetAnalyzedResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetAnalyzer' => [ 'name' => 'GetAnalyzer', 'http' => [ 'method' => 'GET', 'requestUri' => '/analyzer/{analyzerName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetAnalyzerRequest', ], 'output' => [ 'shape' => 'GetAnalyzerResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetArchiveRule' => [ 'name' => 'GetArchiveRule', 'http' => [ 'method' => 'GET', 'requestUri' => '/analyzer/{analyzerName}/archive-rule/{ruleName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetArchiveRuleRequest', ], 'output' => [ 'shape' => 'GetArchiveRuleResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetFinding' => [ 'name' => 'GetFinding', 'http' => [ 'method' => 'GET', 'requestUri' => '/finding/{id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetFindingRequest', ], 'output' => [ 'shape' => 'GetFindingResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListAnalyzedResources' => [ 'name' => 'ListAnalyzedResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/analyzed-resource', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListAnalyzedResourcesRequest', ], 'output' => [ 'shape' => 'ListAnalyzedResourcesResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListAnalyzers' => [ 'name' => 'ListAnalyzers', 'http' => [ 'method' => 'GET', 'requestUri' => '/analyzer', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListAnalyzersRequest', ], 'output' => [ 'shape' => 'ListAnalyzersResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListArchiveRules' => [ 'name' => 'ListArchiveRules', 'http' => [ 'method' => 'GET', 'requestUri' => '/analyzer/{analyzerName}/archive-rule', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListArchiveRulesRequest', ], 'output' => [ 'shape' => 'ListArchiveRulesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListFindings' => [ 'name' => 'ListFindings', 'http' => [ 'method' => 'POST', 'requestUri' => '/finding', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListFindingsRequest', ], 'output' => [ 'shape' => 'ListFindingsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'StartResourceScan' => [ 'name' => 'StartResourceScan', 'http' => [ 'method' => 'POST', 'requestUri' => '/resource/scan', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartResourceScanRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'UpdateArchiveRule' => [ 'name' => 'UpdateArchiveRule', 'http' => [ 'method' => 'PUT', 'requestUri' => '/analyzer/{analyzerName}/archive-rule/{ruleName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateArchiveRuleRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'UpdateFindings' => [ 'name' => 'UpdateFindings', 'http' => [ 'method' => 'PUT', 'requestUri' => '/finding', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateFindingsRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ActionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'AnalyzedResource' => [ 'type' => 'structure', 'required' => [ 'analyzedAt', 'createdAt', 'isPublic', 'resourceArn', 'resourceOwnerAccount', 'resourceType', 'updatedAt', ], 'members' => [ 'actions' => [ 'shape' => 'ActionList', ], 'analyzedAt' => [ 'shape' => 'Timestamp', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'error' => [ 'shape' => 'String', ], 'isPublic' => [ 'shape' => 'Boolean', ], 'resourceArn' => [ 'shape' => 'ResourceArn', ], 'resourceOwnerAccount' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'ResourceType', ], 'sharedVia' => [ 'shape' => 'SharedViaList', ], 'status' => [ 'shape' => 'FindingStatus', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'AnalyzedResourceSummary' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'resourceOwnerAccount', 'resourceType', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', ], 'resourceOwnerAccount' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'ResourceType', ], ], ], 'AnalyzedResourcesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyzedResourceSummary', ], ], 'AnalyzerArn' => [ 'type' => 'string', 'pattern' => '^[^:]*:[^:]*:[^:]*:[^:]*:[^:]*:analyzer/.{1,255}$', ], 'AnalyzerStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'CREATING', 'DISABLED', 'FAILED', ], ], 'AnalyzerSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'createdAt', 'name', 'status', 'type', ], 'members' => [ 'arn' => [ 'shape' => 'AnalyzerArn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'lastResourceAnalyzed' => [ 'shape' => 'String', ], 'lastResourceAnalyzedAt' => [ 'shape' => 'Timestamp', ], 'name' => [ 'shape' => 'Name', ], 'status' => [ 'shape' => 'AnalyzerStatus', ], 'statusReason' => [ 'shape' => 'StatusReason', ], 'tags' => [ 'shape' => 'TagsMap', ], 'type' => [ 'shape' => 'Type', ], ], ], 'AnalyzersList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalyzerSummary', ], ], 'ApplyArchiveRuleRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', 'ruleName', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'ruleName' => [ 'shape' => 'Name', ], ], ], 'ArchiveRuleSummary' => [ 'type' => 'structure', 'required' => [ 'createdAt', 'filter', 'ruleName', 'updatedAt', ], 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'filter' => [ 'shape' => 'FilterCriteriaMap', ], 'ruleName' => [ 'shape' => 'Name', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ArchiveRulesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ArchiveRuleSummary', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ConditionKeyMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateAnalyzerRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', 'type', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', ], 'archiveRules' => [ 'shape' => 'InlineArchiveRulesList', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'TagsMap', ], 'type' => [ 'shape' => 'Type', ], ], ], 'CreateAnalyzerResponse' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'AnalyzerArn', ], ], ], 'CreateArchiveRuleRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', 'filter', 'ruleName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'filter' => [ 'shape' => 'FilterCriteriaMap', ], 'ruleName' => [ 'shape' => 'Name', ], ], ], 'Criterion' => [ 'type' => 'structure', 'members' => [ 'contains' => [ 'shape' => 'ValueList', ], 'eq' => [ 'shape' => 'ValueList', ], 'exists' => [ 'shape' => 'Boolean', ], 'neq' => [ 'shape' => 'ValueList', ], ], ], 'DeleteAnalyzerRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], ], ], 'DeleteArchiveRuleRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', 'ruleName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'ruleName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'ruleName', ], ], ], 'FilterCriteriaMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'Criterion', ], ], 'Finding' => [ 'type' => 'structure', 'required' => [ 'analyzedAt', 'condition', 'createdAt', 'id', 'resourceOwnerAccount', 'resourceType', 'status', 'updatedAt', ], 'members' => [ 'action' => [ 'shape' => 'ActionList', ], 'analyzedAt' => [ 'shape' => 'Timestamp', ], 'condition' => [ 'shape' => 'ConditionKeyMap', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'error' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'FindingId', ], 'isPublic' => [ 'shape' => 'Boolean', ], 'principal' => [ 'shape' => 'PrincipalMap', ], 'resource' => [ 'shape' => 'String', ], 'resourceOwnerAccount' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'ResourceType', ], 'sources' => [ 'shape' => 'FindingSourceList', ], 'status' => [ 'shape' => 'FindingStatus', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'FindingId' => [ 'type' => 'string', ], 'FindingIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FindingId', ], ], 'FindingSource' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'detail' => [ 'shape' => 'FindingSourceDetail', ], 'type' => [ 'shape' => 'FindingSourceType', ], ], ], 'FindingSourceDetail' => [ 'type' => 'structure', 'members' => [ 'accessPointArn' => [ 'shape' => 'String', ], ], ], 'FindingSourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FindingSource', ], ], 'FindingSourceType' => [ 'type' => 'string', 'enum' => [ 'POLICY', 'BUCKET_ACL', 'S3_ACCESS_POINT', ], ], 'FindingStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'ARCHIVED', 'RESOLVED', ], ], 'FindingStatusUpdate' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'ARCHIVED', ], ], 'FindingSummary' => [ 'type' => 'structure', 'required' => [ 'analyzedAt', 'condition', 'createdAt', 'id', 'resourceOwnerAccount', 'resourceType', 'status', 'updatedAt', ], 'members' => [ 'action' => [ 'shape' => 'ActionList', ], 'analyzedAt' => [ 'shape' => 'Timestamp', ], 'condition' => [ 'shape' => 'ConditionKeyMap', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'error' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'FindingId', ], 'isPublic' => [ 'shape' => 'Boolean', ], 'principal' => [ 'shape' => 'PrincipalMap', ], 'resource' => [ 'shape' => 'String', ], 'resourceOwnerAccount' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'ResourceType', ], 'sources' => [ 'shape' => 'FindingSourceList', ], 'status' => [ 'shape' => 'FindingStatus', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'FindingsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FindingSummary', ], ], 'GetAnalyzedResourceRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', 'resourceArn', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', 'location' => 'querystring', 'locationName' => 'analyzerArn', ], 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'querystring', 'locationName' => 'resourceArn', ], ], ], 'GetAnalyzedResourceResponse' => [ 'type' => 'structure', 'members' => [ 'resource' => [ 'shape' => 'AnalyzedResource', ], ], ], 'GetAnalyzerRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], ], ], 'GetAnalyzerResponse' => [ 'type' => 'structure', 'required' => [ 'analyzer', ], 'members' => [ 'analyzer' => [ 'shape' => 'AnalyzerSummary', ], ], ], 'GetArchiveRuleRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', 'ruleName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], 'ruleName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'ruleName', ], ], ], 'GetArchiveRuleResponse' => [ 'type' => 'structure', 'required' => [ 'archiveRule', ], 'members' => [ 'archiveRule' => [ 'shape' => 'ArchiveRuleSummary', ], ], ], 'GetFindingRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', 'id', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', 'location' => 'querystring', 'locationName' => 'analyzerArn', ], 'id' => [ 'shape' => 'FindingId', 'location' => 'uri', 'locationName' => 'id', ], ], ], 'GetFindingResponse' => [ 'type' => 'structure', 'members' => [ 'finding' => [ 'shape' => 'Finding', ], ], ], 'InlineArchiveRule' => [ 'type' => 'structure', 'required' => [ 'filter', 'ruleName', ], 'members' => [ 'filter' => [ 'shape' => 'FilterCriteriaMap', ], 'ruleName' => [ 'shape' => 'Name', ], ], ], 'InlineArchiveRulesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'InlineArchiveRule', ], ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'ListAnalyzedResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', ], 'maxResults' => [ 'shape' => 'Integer', ], 'nextToken' => [ 'shape' => 'Token', ], 'resourceType' => [ 'shape' => 'ResourceType', ], ], ], 'ListAnalyzedResourcesResponse' => [ 'type' => 'structure', 'required' => [ 'analyzedResources', ], 'members' => [ 'analyzedResources' => [ 'shape' => 'AnalyzedResourcesList', ], 'nextToken' => [ 'shape' => 'Token', ], ], ], 'ListAnalyzersRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'type' => [ 'shape' => 'Type', 'location' => 'querystring', 'locationName' => 'type', ], ], ], 'ListAnalyzersResponse' => [ 'type' => 'structure', 'required' => [ 'analyzers', ], 'members' => [ 'analyzers' => [ 'shape' => 'AnalyzersList', ], 'nextToken' => [ 'shape' => 'Token', ], ], ], 'ListArchiveRulesRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], 'maxResults' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'Token', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListArchiveRulesResponse' => [ 'type' => 'structure', 'required' => [ 'archiveRules', ], 'members' => [ 'archiveRules' => [ 'shape' => 'ArchiveRulesList', ], 'nextToken' => [ 'shape' => 'Token', ], ], ], 'ListFindingsRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', ], 'filter' => [ 'shape' => 'FilterCriteriaMap', ], 'maxResults' => [ 'shape' => 'Integer', ], 'nextToken' => [ 'shape' => 'Token', ], 'sort' => [ 'shape' => 'SortCriteria', ], ], ], 'ListFindingsResponse' => [ 'type' => 'structure', 'required' => [ 'findings', ], 'members' => [ 'findings' => [ 'shape' => 'FindingsList', ], 'nextToken' => [ 'shape' => 'Token', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'Name' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[A-Za-z][A-Za-z0-9_.-]*$', ], 'OrderBy' => [ 'type' => 'string', 'enum' => [ 'ASC', 'DESC', ], ], 'PrincipalMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'ReasonCode' => [ 'type' => 'string', 'enum' => [ 'AWS_SERVICE_ACCESS_DISABLED', 'DELEGATED_ADMINISTRATOR_DEREGISTERED', 'ORGANIZATION_DELETED', 'SERVICE_LINKED_ROLE_CREATION_FAILED', ], ], 'ResourceArn' => [ 'type' => 'string', 'pattern' => 'arn:[^:]*:[^:]*:[^:]*:[^:]*:.*$', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'AWS::S3::Bucket', 'AWS::IAM::Role', 'AWS::SQS::Queue', 'AWS::Lambda::Function', 'AWS::Lambda::LayerVersion', 'AWS::KMS::Key', ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'SharedViaList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'SortCriteria' => [ 'type' => 'structure', 'members' => [ 'attributeName' => [ 'shape' => 'String', ], 'orderBy' => [ 'shape' => 'OrderBy', ], ], ], 'StartResourceScanRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', 'resourceArn', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', ], 'resourceArn' => [ 'shape' => 'ResourceArn', ], ], ], 'StatusReason' => [ 'type' => 'structure', 'required' => [ 'code', ], 'members' => [ 'code' => [ 'shape' => 'ReasonCode', ], ], ], 'String' => [ 'type' => 'string', ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'Timestamp' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'Token' => [ 'type' => 'string', ], 'Type' => [ 'type' => 'string', 'enum' => [ 'ACCOUNT', 'ORGANIZATION', ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateArchiveRuleRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerName', 'filter', 'ruleName', ], 'members' => [ 'analyzerName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'analyzerName', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'filter' => [ 'shape' => 'FilterCriteriaMap', ], 'ruleName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'ruleName', ], ], ], 'UpdateFindingsRequest' => [ 'type' => 'structure', 'required' => [ 'analyzerArn', 'status', ], 'members' => [ 'analyzerArn' => [ 'shape' => 'AnalyzerArn', ], 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'ids' => [ 'shape' => 'FindingIdList', ], 'resourceArn' => [ 'shape' => 'ResourceArn', ], 'status' => [ 'shape' => 'FindingStatusUpdate', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', 'reason', ], 'members' => [ 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], 'message' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'message', 'name', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'unknownOperation', 'cannotParse', 'fieldValidationFailed', 'other', ], ], 'ValueList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], 'max' => 20, 'min' => 1, ], ],];
