<?php
/**
 * RedactorGrammar plugin for Craft CMS 3.x
 *
 * Redactor with beyond grammar extension
 *
 * @link      https://fatfish.com.au
 * @copyright Copyright (c) 2018 fatfish
 */

namespace fatfish\redactorgrammar\models;

use fatfish\redactorgrammar\RedactorGrammar;

use Craft;
use craft\base\Model;

/**
 * RedactorGrammar Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    fatfish
 * @package   RedactorGrammar
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
