$(document).ready(function(){

        var options = 
        {
            url: "/entidades/entidad.json",

            categories: [
            {
                listLocation: "Facultad de Artes",
                maxNumberOfElements: 4,
                header: "Facultad de Artes"
            }, 
            {
                listLocation: "Facultad de Ciencias de la Salud",
                maxNumberOfElements: 5,
                header: "Facultad de Ciencias de la Salud"
            }, 
            {
                listLocation: "Facultad de Ciencias Económicas Financieras y Administrativas",
                maxNumberOfElements: 5,
                header: "Facultad de Ciencias Económicas Financieras y Administrativas"
            }, 
            {
                listLocation: "Facultad de Ciencias Puras",
                maxNumberOfElements: 5,
                header: "Facultad de Ciencias Puras"
            }, 
            {
                listLocation: "Facultad de Ciencias Sociales y Humanísticas",
                maxNumberOfElements: 5,
                header: "Facultad de Ciencias Sociales y Humanísticas"
            }, 
            {
                listLocation: "Facultad de Ingeniería",
                maxNumberOfElements: 5,
                header: "Facultad de Ingeniería"
            }, 
            {
                listLocation: "Facultad de Ingeniería Geológica",
                maxNumberOfElements: 5,
                header: "Facultad de Ingeniería Geológica"
            }, 
            {
                listLocation: "Facultad de Ingeniería Minera",
                maxNumberOfElements: 5,
                header: "Facultad de Ingeniería Minera"
            }, 
            {
                listLocation: "Facultad de Medicina",
                maxNumberOfElements: 5,
                header: "Facultad de Medicina"
            }, 
            {
                listLocation: "Facultad Tegnológica",
                maxNumberOfElements: 5,
                header: "Facultad Tegnológica"
            }, 
            {
                listLocation: "Otros",
                maxNumberOfElements: 5,
                header: "Otros"
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

        $("#entidad").easyAutocomplete(options);   
    });