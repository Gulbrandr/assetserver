'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myApp.services', [])
    .value('version', '0.1')
    .factory('Database', ['$http', '$scope',
        function($http) {
            return {
                ReadDatabase: function() {
                    var ddata;
                    console.log("read database was called");
                    $http.get('./php/readdatabase.php').success(function(data) {
                        console.log('Http.get to readdatabase.php was successful')
                        ddata = data;

                    });

                }
            };
        }
    ]);