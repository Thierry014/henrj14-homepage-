<?php
/**
 * RedactorGrammar plugin for Craft CMS 3.x
 *
 * Redactor with beyond grammar extension
 *
 * @link      https://fatfish.com.au
 * @copyright Copyright (c) 2018 fatfish
 */

namespace fatfish\redactorgrammar;


use craft\redactor\assets\redactor\RedactorAsset;
use fatfish\redactorgrammar\assetbundles\RedactorGrammar\RedactorGrammarAsset;
use fatfish\redactorgrammar\controllers\GrammarsettingsController;
use fatfish\redactorgrammar\models\Settings;
use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;
use craft\redactor\Field;
use craft\redactor\events\RegisterPluginPathsEvent;
use yii\base\Event;

/**
 * Craft plugins are very much like little applications in and of themselves. We’ve made
 * it as simple as we can, but the training wheels are off. A little prior knowledge is
 * going to be required to write a plugin.
 *
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL,
 * as well as some semi-advanced concepts like object-oriented programming and PHP namespaces.
 *
 * https://craftcms.com/docs/plugins/introduction
 *
 * @author    fatfish
 * @package   RedactorGrammar
 * @since     1.0.0
 *
 * @property  Settings $settings
 * @method    Settings getSettings()
 */
class RedactorGrammar extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * RedactorGrammar::$plugin
     *
     * @var RedactorGrammar
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * To execute your plugin’s migrations, you’ll need to increase its schema version.
     *
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * Set our $plugin static property to this class so that it can be accessed via
     * RedactorGrammar::$plugin
     *
     * Called after the plugin class is instantiated; do any one-time initialization
     * here such as hooks and events.
     *
     * If you have a '/vendor/autoload.php' file, it will be loaded for you automatically;
     * you do not need to load it in your init() method.
     *
     */
    public function init()
    {

        parent::init();
        self::$plugin = $this;


        // Register our site routes
        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_SITE_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['siteActionTrigger1'] = 'redactor-grammar/';
                $event->rules['getapi'] = 'redactor-grammar/grammarsettings/getapi';



            }
        );

        // Register our CP routes
        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_CP_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['getapi'] = 'redactor-grammar/grammarsettings/index';
            }
        );

        // Do something after we're installed
        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                    GrammarsettingsController::WriteConfigFile();
                }
            }
        );

        Event::on(Plugins::class,
            Plugins::EVENT_AFTER_UNINSTALL_PLUGIN,function (PluginEvent $event){

            if($event->plugin===$this)
            {
                GrammarsettingsController::RevertConfigFile();
            }

            });





        if(Craft::$app->request->isCpRequest && Craft::$app->getPlugins()->isPluginInstalled('redactor')) {
            Event::on(Field::class, Field::EVENT_REGISTER_PLUGIN_PATHS, function (RegisterPluginPathsEvent $event) {
            $source = Craft::getAlias('@fatfish/redactorgrammar') . DIRECTORY_SEPARATOR . 'assetbundles/redactorgrammar/dist/js';
            $event->paths[] = $source;
            Craft::$app->getView()->registerAssetBundle(RedactorGrammarAsset::class);
                      });
            }

/**
 * Logging in Craft involves using one of the following methods:
 *
 * Craft::trace(): record a message to trace how a piece of code runs. This is mainly for development use.
 * Craft::info(): record a message that conveys some useful information.
 * Craft::warning(): record a warning message that indicates something unexpected has happened.
 * Craft::error(): record a fatal error that should be investigated as soon as possible.
 *
 * Unless `devMode` is on, only Craft::warning() & Craft::error() will log to `craft/storage/logs/web.log`
 *
 * It's recommended that you pass in the magic constant `__METHOD__` as the second parameter, which sets
 * the category to the method (prefixed with the fully qualified class name) where the constant appears.
 *
 * To enable the Yii debug toolbar, go to your user account in the AdminCP and check the
 * [] Show the debug toolbar on the front end & [] Show the debug toolbar on the Control Panel
 *
 * http://www.yiiframework.com/doc-2.0/guide-runtime-logging.html
 */
        Craft::info(
            Craft::t(
                'redactor-grammar',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

    /**
     * Creates and returns the model used to store the plugin’s settings.
     *
     * @return \craft\base\Model|null
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * Returns the rendered settings HTML, which will be inserted into the content
     * block on the settings page.
     *
     * @return string The rendered settings HTML
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'redactor-grammar/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
