$(document).ready(function(){

        var options = 
        {
            url: "/vehiculosJson/modelo.json",

            categories: [
            {
                listLocation: "Modelo del Vehículo",
                maxNumberOfElements: 12,
                header: "Modelo del Vehículo"
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

        $("#model").easyAutocomplete(options);   
    });