/*
This file is responsible for getting api and list of redactor field created by user
async option is set to false, otherwise it will affected by latency
so we will wait for ajax to complete and will let other js to load once this is complete.
 */

var apikey;
var field;

$.ajax({
    url: '/getapi',
    data: {id: 1}, // just for fun
    type: 'GET',
    async : false,
    success: function(data) {

        if(data==="false")
        {
            Craft.cp.displayNotice("Invalid Api Key");
        }
        else
        {
            var response=JSON.parse(data);
            $.each(response, function (key,value) {

                if(typeof(value['field-name'])==="undefined")
                {
                    apikey=value['API'];

                }
                else
                {
                   var contentfield='#fields-'+value['field-name'];
                   var found= $('#fields').find(contentfield).length;
                   if(found>0)
                   {
                       field=contentfield;
                   }

                }

            });
        }
    }
});