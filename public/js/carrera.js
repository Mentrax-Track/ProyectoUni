$(document).ready(function(){

        var options = 
        {
            url: "/entidades/carrera.json",

            categories: [
            {
                listLocation: "U.A.T.F. Potosí",
                maxNumberOfElements: 4,
                header: "U.A.T.F. Potosí"
            }, 
            {
                listLocation: "U.A.T.F. Villazón",
                maxNumberOfElements: 5,
                header: "U.A.T.F. Villazón"
            }, 
            {
                listLocation: "U.A.T.F. Tupiza",
                maxNumberOfElements: 5,
                header: "U.A.T.F. Tupiza"
            }, 
            {
                listLocation: "U.A.T.F. Uncia",
                maxNumberOfElements: 5,
                header: "U.A.T.F. Uncia"
            }, 
            {
                listLocation: "U.A.T.F. Uyuni",
                maxNumberOfElements: 5,
                header: "U.A.T.F. Uyuni"
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
                maxNumberOfElements: 8,
                match: {
                    enabled: true
                },
                sort: {
                    enabled: true
                }
            },

            theme: "bootstrap"
        };

        $("#carrera").easyAutocomplete(options);   
    });