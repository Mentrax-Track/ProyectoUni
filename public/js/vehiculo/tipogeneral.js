$(document).ready(function(){

        var options = 
        {
            url: "/vehiculosJson/tipogeneral.json",

            categories: [
            {
                listLocation: "Tipo general del Vehículo",
                maxNumberOfElements: 12,
                header: "Tipo general del Vehículo"
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

        $("#tipog").easyAutocomplete(options);   
    });