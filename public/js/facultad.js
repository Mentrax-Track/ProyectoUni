$(document).ready(function(){

        var options = 
        {
            url: "/entidades/facultad.json",

            categories: [
            {
                listLocation: "U.A.T.F.",
                maxNumberOfElements: 12,
                header: "U.A.T.F."
            }
        ],
          


            getValue: function(element) {
                return element.character;
            },

            template: {
                type: "description",
                fields: {
                    description: "realName"
                }
            },

            list: {
                maxNumberOfElements: 12,
                match: {
                    enabled: true
                },
                sort: {
                    enabled: true
                }
            },

            theme: "bootstrap"
        };

        $("#facultad").easyAutocomplete(options);   
    });