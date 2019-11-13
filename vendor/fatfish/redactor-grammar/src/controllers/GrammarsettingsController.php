<?php
/**
 * RedactorGrammar plugin for Craft CMS 3.x
 *
 * Redactor with beyond grammar extension
 *
 * @link      https://fatfish.com.au
 * @copyright Copyright (c) 2018 fatfish
 */

namespace fatfish\redactorgrammar\controllers;

use fatfish\redactorgrammar\RedactorGrammar;

use Craft;
use craft\web\Controller;

/**
 * Default Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    fatfish
 * @package   RedactorGrammar
 * @since     1.0.0
 */
class GrammarsettingsController extends Controller
{

     public static $SectionHandle;

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];
    public $PluginName = "redactorgrammar";
    public $FileName = 'Standard.json';

    public function actionGetapi()
    {
        $ProAidApiKey = RedactorGrammar::$plugin->settings->someAttribute;


        if(Craft::$app->request->isAjax)
        {

              $Fields = Craft::$app->getFields()->getAllFields();
              $fieldName=[];

              if($ProAidApiKey==='Some Default' || is_null($ProAidApiKey) || empty($ProAidApiKey))
              {
                  echo json_encode(false);
                  return;
              }
            foreach ($Fields as $field):
                if($field instanceof \craft\redactor\Field):
                    $fieldName[]=[
                        'field-name'=>$field->handle
                    ];

                endif;
            endforeach;
            $fieldName[]=['API'=>$ProAidApiKey];
            echo json_encode($fieldName);
        }

    }

    /**
     *
     */
    public static function WriteConfigFile()
    {

        $PluginName = 'RedactorGrammar';
        $FileLocation = Craft::$app->getConfig()->configDir.DIRECTORY_SEPARATOR.'redactor/'.'Standard.json';
        $StandardConfigContent = file_get_contents($FileLocation);
        $StandardConfig = json_decode($StandardConfigContent);

        if(!array_search($PluginName,$StandardConfig->plugins))
        {
            $StandardConfig->plugins[]=$PluginName;
            file_put_contents($FileLocation,json_encode($StandardConfig));
        }





    }

    public static function RevertConfigFile()
    {



        $PluginName = 'RedactorGrammar';
        $FileLocation = Craft::$app->getConfig()->configDir.DIRECTORY_SEPARATOR.'redactor/'.'Standard.json';
        $StandardConfigContent = file_get_contents($FileLocation);
        $StandardConfig = json_decode($StandardConfigContent);
        $StandardPluginArray = (array)$StandardConfig->plugins;
        $arrayIndex=array_search($PluginName,$StandardPluginArray);


        if($arrayIndex) {

            unset($StandardPluginArray[$arrayIndex]);
            $StandardConfig->plugins = $StandardPluginArray;
           file_put_contents($FileLocation, json_encode((object)$StandardConfig));

        }

    }


}
