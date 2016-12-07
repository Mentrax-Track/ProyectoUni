$(document).ready(function(){

        var options = 
        {
            url: "/vehiculosJson/tipo.json",

            categories: [
            {
                listLocation: "Tipo general del Vehículos",
                maxNumberOfElements: 12,
                header: "Tipo general del Vehículos"
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

        $("#tipoe").easyAutocomplete(options);   
    });