<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.3.3.2',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'dolphiq/redirect' => 
  array (
    'class' => 'dolphiq\\redirect\\RedirectPlugin',
    'basePath' => $vendorDir . '/dolphiq/redirect/src',
    'handle' => 'redirect',
    'aliases' => 
    array (
      '@dolphiq/redirect' => $vendorDir . '/dolphiq/redirect/src',
    ),
    'name' => 'Redirect plugin for Craft 3',
    'version' => '1.0.23',
    'schemaVersion' => '1.0.5',
    'description' => 'Craft redirect plugin provides an easy way to enter and maintain 301 and 302 redirects and 404 error pages.',
    'developer' => 'Dolphiq',
    'developerUrl' => 'https://dolphiq.nl/',
    'documentationUrl' => 'https://github.com/Dolphiq/craft3-plugin-redirect/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Dolphiq/craft3-plugin-redirect/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
  ),
  'fatfish/redactor-grammar' => 
  array (
    'class' => 'fatfish\\redactorgrammar\\RedactorGrammar',
    'basePath' => $vendorDir . '/fatfish/redactor-grammar/src',
    'handle' => 'redactor-grammar',
    'aliases' => 
    array (
      '@fatfish/redactorgrammar' => $vendorDir . '/fatfish/redactor-grammar/src',
    ),
    'name' => 'RedactorGrammar',
    'version' => '1.0.0',
    'description' => 'Redactor with beyond grammar extension',
    'developer' => 'Fatfish',
    'developerUrl' => 'https://fatfish.com.au',
    'changelogUrl' => 'https://raw.githubusercontent.com/https://github.com/fatfishdigital/redactor-grammar/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
  ),
  'mmikkel/retcon' => 
  array (
    'class' => 'mmikkel\\retcon\\Retcon',
    'basePath' => $vendorDir . '/mmikkel/retcon/src',
    'handle' => 'retcon',
    'aliases' => 
    array (
      '@mmikkel/retcon' => $vendorDir . '/mmikkel/retcon/src',
    ),
    'name' => 'Retcon',
    'version' => '2.0.12',
    'schemaVersion' => '1.0.0',
    'description' => 'Powerful Twig filters for mutating and querying HTML',
    'developer' => 'Mats Mikkel Rummelhoff',
    'developerUrl' => 'https://vaersaagod.no',
    'changelogUrl' => 'https://raw.githubusercontent.com/mmikkel/Retcon-Craft/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
    ),
  ),
  'nystudio107/craft-seomatic' => 
  array (
    'class' => 'nystudio107\\seomatic\\Seomatic',
    'basePath' => $vendorDir . '/nystudio107/craft-seomatic/src',
    'handle' => 'seomatic',
    'aliases' => 
    array (
      '@nystudio107/seomatic' => $vendorDir . '/nystudio107/craft-seomatic/src',
    ),
    'name' => 'SEOmatic',
    'version' => '3.2.18',
    'description' => 'SEOmatic facilitates modern SEO best practices & implementation for Craft CMS 3. It is a turnkey SEO system that is comprehensive, powerful, and flexible.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'changelogUrl' => 'https://raw.githubusercontent.com/nystudio107/craft-seomatic/v3/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'frontendTemplates' => 'nystudio107\\seomatic\\services\\FrontendTemplates',
      'helper' => 'nystudio107\\seomatic\\services\\Helper',
      'jsonLd' => 'nystudio107\\seomatic\\services\\JsonLd',
      'link' => 'nystudio107\\seomatic\\services\\Link',
      'metaBundles' => 'nystudio107\\seomatic\\services\\MetaBundles',
      'metaContainers' => 'nystudio107\\seomatic\\services\\MetaContainers',
      'seoElements' => 'nystudio107\\seomatic\\services\\SeoElements',
      'script' => 'nystudio107\\seomatic\\services\\Script',
      'sitemaps' => 'nystudio107\\seomatic\\services\\Sitemaps',
      'tag' => 'nystudio107\\seomatic\\services\\Tag',
      'title' => 'nystudio107\\seomatic\\services\\Title',
    ),
  ),
  'superbig/craft3-mobiledetect' => 
  array (
    'class' => 'superbig\\mobiledetect\\MobileDetect',
    'basePath' => $vendorDir . '/superbig/craft3-mobiledetect/src',
    'handle' => 'mobile-detect',
    'aliases' => 
    array (
      '@superbig/mobiledetect' => $vendorDir . '/superbig/craft3-mobiledetect/src',
    ),
    'name' => 'MobileDetect',
    'version' => '1.0.2',
    'schemaVersion' => '1.0.0',
    'description' => 'Use Mobile_Detect for detecting mobile devices (including tablets)',
    'developer' => 'Superbig',
    'developerUrl' => 'https://superbig.co',
    'changelogUrl' => 'https://raw.githubusercontent.com/sjelfull/craft3-mobiledetect/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'mobileDetectService' => 'superbig\\mobiledetect\\services\\MobileDetectService',
    ),
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '2.1.0',
    'description' => 'Manage your fields and field groups with ease with simple field or group cloning and quicker overall management.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-3/CHANGELOG.md',
  ),
  'verbb/super-table' => 
  array (
    'class' => 'verbb\\supertable\\SuperTable',
    'basePath' => $vendorDir . '/verbb/super-table/src',
    'handle' => 'super-table',
    'aliases' => 
    array (
      '@verbb/supertable' => $vendorDir . '/verbb/super-table/src',
    ),
    'name' => 'Super Table',
    'version' => '2.2.1',
    'description' => 'Super-charge your Craft workflow with Super Table. Use it to group fields together or build complex Matrix-in-Matrix solutions.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'documentationUrl' => 'https://github.com/verbb/super-table',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/super-table/craft-3/CHANGELOG.md',
  ),
);
