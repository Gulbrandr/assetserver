'use strict';

/* Controllers */

angular.module('myApp.controllers', [])
    .controller('HomeCtrl', ['$scope', '$http',
        function($scope, $http) {
            $http.get('./php/readdatabase.php').success(function(data) {
                $scope.alldisplay = true;
                console.log('Http.get to readdatabase.php was successful');
                $scope.assets = data;
            })
            $scope.editentry = function(edit) {
                $scope.entrydisplay = true;
                console.log("switched");
                $scope.edit = edit;
                console.log(edit);
                $scope.saveNotification = "";
                $http.get('./php/getentry.php?entry=' + $scope.edit).success(function(data) {
                    $scope.entry = data;
                    console.log("getentry was successful");
                    console.log(data);
                });
                $scope.save = function() {
                    $http.get('./php/setentry.php?Id=' + $scope.entry.Id + '&Make=' + $scope.entry.Make + '&Model=' +
                        $scope.entry.Model + '&Type=' + $scope.entry.Type + "&Custodian=" +
                        $scope.entry.Custodian + '&Location=' + $scope.entry.Location)
                        .success(function(data) {
                            $scope.assets = data;
                            $scope.saveNotification = "Saved";
                        });
                }
                $scope.done = function() {
                    $scope.entrydisplay = false;
                }
            }
        }
    ])
    .controller('StockCtrl', ['$scope', '$http',
        function($scope, $http) {
            $http.get('./php/getcomputers.php').success(function(data) {
                console.log('Http.get to readdatabase.php was successful');

                $scope.ComputerCount = data;
            })
            $http.get('./php/getmonitor.php').success(function(data) {
                console.log('Http.get to getmonitors.php was successful');
                $scope.MonitorCount = data;
            })
            $http.get('./php/getkit.php').success(function(data) {
                console.log('Http.get to getkits.php was successful');
                $scope.KitCount = data;
            })
        }
    ])
    .controller('BuildingCtrl', ['$scope', '$http',

        function($scope, $http) {
            $http.get('./php/getbuildinga.php').success(function(data) {
                $scope.assetsa = data;
            })
            $http.get('./php/getbuildingb.php').success(function(data) {
                $scope.assetsb = data;
            })

        }
    ])
    .controller('TypeCtrl', ['$scope', '$http',

        function($scope, $http) {
            $http.get('./php/gettype.php?type=computer').success(function(data) {
                $scope.assetscomputers = data
            })
            $http.get('./php/gettype.php?type=monitor').success(function(data) {
                $scope.assetsmonitors = data
            })
            $http.get('./php/gettype.php?type=kit').success(function(data) {
                $scope.assetskits = data
            })
        }
    ])
    .controller('MyCtrl1', ['$scope', '$http',
        function($scope, $http) {
            $scope.entry = "";
            $scope.entry.Now = Date();
            $scope.showQR = function() {
                $scope.showqr = true;
            }
            $scope.csvtoentry = function() {
                $scope.entry = $.csv.toObjects($scope.csv);
            }
            $scope.insert = function() {
                var today = Date();


                $scope.entry.Now = today;
                $http.get('./php/insert.php' +
                    "?Make=" + $scope.entry.Make +
                    "&Model=" + $scope.entry.Model +
                    "&Type=" + $scope.entry.Type +
                    "&Serial=" + $scope.entry.Serial +
                    "&Custodian=" + $scope.entry.Custodian +
                    "&Location=" + $scope.entry.Location +
                    "&Scanned=1" +
                    "&LastScanned=" + $scope.entry.Now).success(function(data) {
                    $scope.entry = data;
                })
            }

        }
    ])
    .controller('MyCtrl2', ['$scope',
        function($scope) {

        }
    ]);