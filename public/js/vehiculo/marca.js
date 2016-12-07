$(document).ready(function(){

        var options = 
        {
            url: "/vehiculosJson/marca.json",

            categories: [
            {
                listLocation: "Marca del Vehículo",
                maxNumberOfElements: 12,
                header: "Marca del Vehículo"
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

        $("#mar").easyAutocomplete(options);   
    });