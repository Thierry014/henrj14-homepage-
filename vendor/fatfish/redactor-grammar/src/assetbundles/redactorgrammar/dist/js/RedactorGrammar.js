/**
 * RedactorGrammar plugin for Craft CMS
 *
 * RedactorGrammar JS
 *
 * @author    fatfish
 * @copyright Copyright (c) 2018 fatfish
 * @link      https://fatfish.com.au
 * @package   RedactorGrammar
 * @since     1.0.0
 */
/*
gets api key and gets redactor field api.
 */

$R(field, {

    plugins: ['beyondgrammar'],

    beyondgrammar: {
        service: {

            //You should signup for getting this key
            apiKey: apikey,

            //[optional] You can specify it for permanent access
            // to your settings and dictionaries
            //userId: "<YOUR_USER_ID>",

            //[optional] path to js file with BeyondGrammar Core
            //sourcePath : "",

            //[optional] path to service which provides grammar checking
            // url shouldn't contain "/" in the end
            serviceUrl: "https://rtg.prowritingaid.com",
        },
        grammar: {
            languageFilter: ["en-US", "en-GB"],

            //[optional] Default language [en-US, en-GB],
            languageIsoCode: "en-US",

            //[optional] checking Style. By default is "true"
            checkStyle: true,

            //[optional] checking Spelling. By default is "true"
            checkSpelling: true,

            //[optional] checking Grammar. By default is "true"
            checkGrammar: true,

            //[optional] Show thesaurus information by double click, by default true
            showThesaurusByDoubleClick: true,

            //[optional] Showing context thesaurus,
            // works only if showThesaurusByDoubleClick = true, by default false
            showContextThesaurus: false,
        }
    }
});