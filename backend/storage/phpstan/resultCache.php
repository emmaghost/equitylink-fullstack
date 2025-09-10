<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1757531362,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.22',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80213,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, level: 5, paths: [C:\\laragon\\www\\equitylink-fullstack\\backend\\app, C:\\laragon\\www\\equitylink-fullstack\\backend\\tests], tmpDir: C:\\laragon\\www\\equitylink-fullstack\\backend\\storage\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem}]}',
  'analysedPaths' => 
  array (
    0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app',
    1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/laragon/www/equitylink-fullstack/backend/composer.lock' => '7e30c9ad687cea1a26349b3b248bd4f348e29908',
  ),
  'composerInstalled' => 
  array (
    'C:/laragon/www/equitylink-fullstack/backend/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.5.0',
          'version' => '7.5.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'reference' => '90a0ba27d1347e054d62fea30f3414f09fe9bad3',
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.0',
          'version' => '0.14.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'reference' => '113a8ee2656b882d4c3164fa31aa6e12cbb7aaa2',
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.28.1',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/breeze' => 
        array (
          'pretty_version' => 'v2.3.8',
          'version' => '2.3.8.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/breeze',
          'aliases' => 
          array (
          ),
          'reference' => '1a29c5792818bd4cddf70b5f743a227e02fbcfcd',
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.28.1',
          'version' => '12.28.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'reference' => '868c1f2d3dba4df6d21e3a8d818479f094cfd942',
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'reference' => '8cc3d575c1f0e57eeb923f366a37528c50d2385a',
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.24.0',
          'version' => '1.24.0.0',
          'type' => 'project',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'reference' => '0345f3b05f136801af8c339f9d16ef29e6b4df8a',
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.6',
          'version' => '0.3.6.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'reference' => '86a8b692e8661d0fb308cec64f3d176821323077',
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.45.0',
          'version' => '1.45.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'reference' => '019a2933ff4a9199f098d4259713f9bc266a874e',
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.2.0',
          'version' => '4.2.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'reference' => 'fd6df4f79f48a72992e8d29a9c0ee25422a0d677',
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'reference' => 'b352cf0534aa1ae6b4d825d1e762e35d43f8a841',
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.0',
          'version' => '3.30.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'reference' => '2203e3151755d874bb2943649dae1eb8533ac93e',
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.0',
          'version' => '3.30.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.5.1',
          'version' => '7.5.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.10.3',
          'version' => '3.10.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'reference' => '8e3643dcd149ae0fe1d2ff4f2c8e4bbfad7c165f',
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.8',
          'version' => '4.0.8.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.6.1',
          'version' => '5.6.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'reference' => 'f103601b29efebd7ff4a1ca7b3eeea9e3336a2a2',
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.2',
          'version' => '8.8.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'reference' => '60207965f9b7b7a4ce15a0f75d57f9dadb105bdb',
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'reference' => '6b7d28a2762a4b69f0f064e1e5b7358af11f04e4',
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.1',
          'version' => '2.3.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'reference' => 'dfa08f390e509967a15c22493dc0bac5733d9123',
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.22',
          'version' => '2.1.22.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'reference' => '41600c8379eb5aee63e9413fe9e97273e25d57e4',
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.11',
          'version' => '11.0.11.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'reference' => '4f7722aa9a7b76aa775e2d9d4e95d1ea16eeeef4',
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.15',
          'version' => '11.5.15.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'reference' => '4b6a4ee654e5e0c5e1f17e2f83c0f4c91dee1f9c',
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.10',
          'version' => '0.12.10.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'reference' => '6e80abe6f2257121f1eb9a4c55bf29d921025b22',
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.1',
          'version' => '4.9.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.1',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.0',
          'version' => '6.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'reference' => '3473f61172093b2da7de1fb5782e1f24cc036dc3',
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'dev_requirement' => true,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '6.21.0',
          'version' => '6.21.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'reference' => '6a118e8855dfffcd90403aab77bbf35a03db51b3',
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'reference' => 'cb0102a1c5ac3807cf3fdf8bea96007df7fdbea7',
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.3.0',
          'version' => '7.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'reference' => '0b31a944fcd8759ae294da4d2808cbc53aebd0c3',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'reference' => 'b7dc69e71de420ac04bc9ab830cf3ffebba48191',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'reference' => '2a6614966ba1074fa93dae0bc804227422df4dfe',
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'reference' => '7475561ec27020196c49bb7c4f178d33d7d3dc00',
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'reference' => '72c304de37e1a1cec6d5d12b81187ebd4850a17b',
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'reference' => 'a32f3f45f1990db8c4341d5122a7d3a381c7e575',
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'reference' => 'e0a0f859148daf1edf6c60b398eb40bfc96697d1',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'reference' => '32241012d521e2e8a9d713adb0812bb773b907f1',
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.3.2',
          'version' => '7.3.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'reference' => '7614b8ca5fa89b9cd233e21b627bfc5774f586e4',
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'reference' => 'f021b05a130d35510bd6b25fe9053c2a8a15d5d4',
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'reference' => '17a426cce5fd1f0901fefa9b2a490d0038fd3c9c',
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'reference' => 'e0837b4cbcef63c754d89a4806575cada743a38d',
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'reference' => 'df210c7a2573f1913b2d17cc95f90f53a73d8f7d',
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.3.1',
          'version' => '7.3.1.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'reference' => 'a69f69f3159b852651a6bf45a9fdd149520525bb',
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'reference' => '34d8d4c4b9597347306d1ec8eb4e1319b1e6986f',
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.3.3',
          'version' => '7.3.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'reference' => 'd4f4a66866fe2451f61296924767280ab5732d9d',
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'type' => 'library',
          'install_path' => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\nunomaduro\\larastan\\bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar://C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar://C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://C:\\laragon\\www\\equitylink-fullstack\\backend\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'calendar',
    9 => 'com_dotnet',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dom',
    14 => 'exif',
    15 => 'fileinfo',
    16 => 'filter',
    17 => 'gd',
    18 => 'gettext',
    19 => 'gmp',
    20 => 'hash',
    21 => 'iconv',
    22 => 'imap',
    23 => 'intl',
    24 => 'json',
    25 => 'ldap',
    26 => 'libxml',
    27 => 'mbstring',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcre',
    32 => 'pdo_mysql',
    33 => 'pdo_sqlite',
    34 => 'random',
    35 => 'readline',
    36 => 'session',
    37 => 'soap',
    38 => 'sockets',
    39 => 'sqlite3',
    40 => 'standard',
    41 => 'tokenizer',
    42 => 'xml',
    43 => 'xmlreader',
    44 => 'xmlwriter',
    45 => 'xsl',
    46 => 'zip',
    47 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ProcessInvoiceUpload.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Actions\\Invoices\\ProcessInvoiceUpload',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\NewPasswordController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 41,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 35,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 24,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'auth.failed',
        1 => 48,
      ),
      1 => 
      array (
        0 => 'auth.throttle',
        1 => 71,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 66,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'hit',
        2 => 45,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\InvoiceUploadRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\InvoiceUploadRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\InvoiceUploadRequest',
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\LoginRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\LoginRequest',
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\CreatesApplication.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'Tests\\CreatesApplication',
        1 => 7,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\DatabaseMigrations',
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\ExchangeRateService',
        ),
        1 => 'getTipoCambio',
        2 => 36,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\ExchangeRateService',
        ),
        1 => 'getTipoCambio',
        2 => 49,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 18,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 29,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 42,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 58,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 23,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 21,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 58,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 23,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 33,
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 18,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 19,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 20,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'firstOrCreate',
        2 => 53,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\DatabaseMigrations',
      ),
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\TestCase.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Tests\\CreatesApplication',
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Auth\\LoginUser.php' => 
  array (
    'fileHash' => '7b9cc47fa2b3f072744fa8f1a5b967502a09fe13',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ParseInvoiceXml.php' => 
  array (
    'fileHash' => 'd120d91212a9bfe866ac1ce1ae0c644eed7a110a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ProcessInvoiceUpload.php' => 
  array (
    'fileHash' => 'bd6bbf9bf9debb76a38e0ec425ef29273548715c',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Console\\Commands\\ProcessInvoicesCommand.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\SearchInvoices.php' => 
  array (
    'fileHash' => '0228814afe1206266ddfa1a5236807bc92a6c0b6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Console\\Commands\\ProcessInvoicesCommand.php' => 
  array (
    'fileHash' => '27ef3440f89964b750c8d813ab629e38da910c83',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Helpers\\ApiResponse.php' => 
  array (
    'fileHash' => 'bbba304b2b1ceb51531b89b0563078a14885ac91',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\PermissionController.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\UserController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    'fileHash' => '610a3e6149a2879ba334a53fb4896df499a924cb',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php' => 
  array (
    'fileHash' => '9796f2374704035cf3859b2dbacaa87390e537ef',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php' => 
  array (
    'fileHash' => 'd8ce0246f80f40e7c11681289eb3d09fe13804b6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php' => 
  array (
    'fileHash' => '862143497e819913e5f340be86ff7c49468c99e9',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\NewPasswordController.php' => 
  array (
    'fileHash' => '404ec0685bf12f2669121655215dcee702c8f88e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php' => 
  array (
    'fileHash' => 'c23086d594cee500b06c5b4e2000b2b781609059',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php' => 
  array (
    'fileHash' => 'd0d6652499f6f8dd5fac31ff343ccfa21a73158b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php' => 
  array (
    'fileHash' => 'f499cd7498ce5c3f17d8b83cf00a81db23aeed20',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\AuthController.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php',
      4 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\NewPasswordController.php',
      5 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php',
      6 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php',
      7 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php',
      8 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php',
      9 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\PermissionController.php',
      10 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\UserController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php' => 
  array (
    'fileHash' => 'f8900f5b3973b678d03dfa4bd512a0c18adc7bc3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\PermissionController.php' => 
  array (
    'fileHash' => '9a4c3eb40edc580eb26a5b701c30afb00633309f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\UserController.php' => 
  array (
    'fileHash' => '9e7f74d4992831289062463bda245650db1f5f6d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Middleware\\EnsureEmailIsVerified.php' => 
  array (
    'fileHash' => 'f5ddae59ab32f548475eef2e57ea7a49268f1b0e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    'fileHash' => '8dd59b8574623dd37cd206fbecd33ee29498a186',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\InvoiceUploadRequest.php' => 
  array (
    'fileHash' => '99c8ac0cfca41b8219bbeb1d7a5fa7aa00e559d9',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\LoginRequest.php' => 
  array (
    'fileHash' => 'f695072596ec97de553a46a4851c89add18c922e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Resources\\InvoiceResource.php' => 
  array (
    'fileHash' => '02fc99de74b6c50334ef91dbdf2202032fefaada',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Resources\\UserResource.php' => 
  array (
    'fileHash' => '34400cf9c72d5bc0fddab87c9f0fed7ef17809ad',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\UserController.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Models\\Invoice.php' => 
  array (
    'fileHash' => 'cabeb764ad8d6000a2bdbad736218f7ba1281498',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ProcessInvoiceUpload.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\SearchInvoices.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Console\\Commands\\ProcessInvoicesCommand.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php',
      4 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Resources\\InvoiceResource.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Models\\User.php' => 
  array (
    'fileHash' => 'd587ed80cd66bdb4d00542539188ac92e5931b41',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Auth\\LoginUser.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\AuthController.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php',
      4 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php',
      5 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php',
      6 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\UserController.php',
      7 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Middleware\\EnsureEmailIsVerified.php',
      8 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Resources\\UserResource.php',
      9 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php',
      10 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php',
      11 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php',
      12 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php',
      13 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php',
      14 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => 'b244d73f7df611867104547dd91de4e998bd30da',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Services\\ExchangeRateService.php' => 
  array (
    'fileHash' => '153000103640ccaf91d9795893a93a0dfba614e7',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ProcessInvoiceUpload.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\CreatesApplication.php' => 
  array (
    'fileHash' => 'b86e4ccb5372230a4f2db670bbb42ecc9555dfc4',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php',
      4 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php',
      5 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php',
      6 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\TestCase.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php',
      4 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php',
      5 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php',
      6 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\TestCase.php',
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php' => 
  array (
    'fileHash' => 'b5e0bd51765eb32d4b8517ce14d8c916e0162ebb',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php' => 
  array (
    'fileHash' => '9af7781127253f395c3f46fac566509e68245d09',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php' => 
  array (
    'fileHash' => '0bfe4200488d862475d56b5d8c440b4e117d82d7',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php' => 
  array (
    'fileHash' => '10455068122417ae85955970487de55a3e2a9224',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php' => 
  array (
    'fileHash' => '7305f574fcf3cf58e6228ab96b4ec04495fe247f',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php' => 
  array (
    'fileHash' => 'cef390abcb85057f1fac74da093a027f7690ae17',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Pest.php' => 
  array (
    'fileHash' => '9a3ca00e34f19b4baf876e9783ec03141469daf2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\TestCase.php' => 
  array (
    'fileHash' => '7463c4e076db9b8da27dff7663d87fec22a5b4db',
    'dependentFiles' => 
    array (
      0 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php',
      1 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php',
      2 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php',
      3 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php',
      4 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php',
      5 => 'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Auth\\LoginUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Auth\\LoginUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'credentials',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ParseInvoiceXml.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Invoices\\ParseInvoiceXml',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'xml',
               'type' => 'Illuminate\\Http\\UploadedFile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\ProcessInvoiceUpload.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Invoices\\ProcessInvoiceUpload',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exchangeRateService',
               'type' => 'App\\Services\\ExchangeRateService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\Invoice',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'file',
               'type' => 'Illuminate\\Http\\UploadedFile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Actions\\Invoices\\SearchInvoices.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Actions\\Invoice\\SearchInvoices',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Action SearchInvoices
 *
 * Encargado de filtrar facturas según parámetros opcionales:
 * - UUID exacto
 * - Emisor
 * - Rango de fechas
 */',
         'namespace' => 'App\\Actions\\Invoice',
         'uses' => 
        array (
          'invoice' => 'App\\Models\\Invoice',
          'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Console\\Commands\\ProcessInvoicesCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ProcessInvoicesCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Invoices\\ProcessInvoiceUpload',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Helpers\\ApiResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Helpers\\ApiResponse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'success',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'error',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'errors',
               'type' => '?mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'me',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\ApiAuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ApiAuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Auth\\LoginUser',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming authentication request.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy an authenticated session.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send a new email verification notification.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse|Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\NewPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming new password request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming password reset link request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming registration request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'App\\Models\\User',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Illuminate\\Http\\Response',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'verified' => 'Illuminate\\Auth\\Events\\Verified',
              'emailverificationrequest' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\Invoice\\InvoiceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Invoice\\InvoiceController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'upload',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'App\\Actions\\Invoices\\ProcessInvoiceUpload',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\PermissionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\PermissionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Listar permisos
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Crear un nuevo permiso
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Eliminar un permiso
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'permission',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Controllers\\User\\UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\User\\UserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Listar usuarios
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Crear un nuevo usuario
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'assignPermissions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Asignar permisos a un usuario
     */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
 * Listar todos los permisos y roles
 */',
             'namespace' => 'App\\Http\\Controllers\\User',
             'uses' => 
            array (
              'apiresponse' => 'App\\Helpers\\ApiResponse',
              'controller' => 'App\\Http\\Controllers\\Controller',
              'userresource' => 'App\\Http\\Resources\\UserResource',
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'permission' => 'Spatie\\Permission\\Models\\Permission',
              'role' => 'Spatie\\Permission\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Middleware\\EnsureEmailIsVerified.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EnsureEmailIsVerified',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Closure(\\Illuminate\\Http\\Request): (\\Symfony\\Component\\HttpFoundation\\Response)  $next
     */',
             'namespace' => 'App\\Http\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'mustverifyemail' => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\Auth\\LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempt to authenticate the request\'s credentials.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ensureIsNotRateLimited',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Ensure the login request is not rate limited.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'throttleKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the rate limiting throttle key for the request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\InvoiceUploadRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\InvoiceUploadRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Requests\\LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Resources\\InvoiceResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\InvoiceResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Resource InvoiceResource
 *
 * Transforma un modelo Invoice en respuesta estandarizada para la API.
 *
 * @mixin \\App\\Models\\Invoice
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'invoice' => 'App\\Models\\Invoice',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Http\\Resources\\UserResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\UserResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @mixin \\App\\Models\\User
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
          'user' => 'App\\Models\\User',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Transform the resource into an array.
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
              'user' => 'App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Models\\Invoice.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Invoice',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Modelo Invoice
 *
 * Representa una factura cargada desde un XML CFDI.
 * Contiene atributos clave: UUID, folio, emisor, receptor, moneda,
 * total y tipo de cambio.
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'resetpassword' => 'Illuminate\\Auth\\Notifications\\ResetPassword',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'resetpassword' => 'Illuminate\\Auth\\Notifications\\ResetPassword',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\app\\Services\\ExchangeRateService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\ExchangeRateService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTipoCambio',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Obtiene el tipo de cambio FIX USD/MXN desde Banxico.
     *
     * @param string $moneda
     * @return float
     * @throws \\Exception
     */',
             'namespace' => 'App\\Services',
             'uses' => 
            array (
              'http' => 'Illuminate\\Support\\Facades\\Http',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'moneda',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\CreatesApplication.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'Tests\\CreatesApplication',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createApplication',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\AuthTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\AuthTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\DatabaseMigrations',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_registers_a_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_logs_in_a_user_with_correct_credentials',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_rejects_login_with_wrong_password',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_me_endpoint_returns_authenticated_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_logout_invalidates_token',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\ExchangeRateServiceTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Unit\\ExchangeRateServiceTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_get_tipo_cambio_returns_float',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_get_tipo_cambio_fails',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_get_tipo_cambio_handles_network_timeout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_invoice_upload_uses_exchange_rate_service',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\InvoiceTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_invoices_requires_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_invoices_with_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_invoices_without_auth_returns_401',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\InvoiceUploadTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\InvoiceUploadTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_upload_invoice_saves_with_exchange_rate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_upload_invoice_fails_with_invalid_xml',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\PermissionTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\PermissionTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_permissions_requires_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_permissions_with_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_create_permission_with_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\Feature\\UserTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\UserTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\DatabaseMigrations',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_creates_a_new_user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_users_with_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_list_users_without_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_create_user_without_permission_returns_403',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\laragon\\www\\equitylink-fullstack\\backend\\tests\\TestCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\TestCase',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Testing\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Tests\\CreatesApplication',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUp',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
