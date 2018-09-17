// Define the `phonecatApp` module
var phonecatApp = angular.module('App', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
phonecatApp.controller('Ctrl', function PhoneListController($scope, $http) {

    var URL = "http://localhost/newzeno/Service/";
    console.log(URL);
    // $http.get(URL).then(function (res) {
    //     $scope.data = res.data;
    // })

    $scope.fnSubmit = function () {
        var URL = "http://localhost/newzeno/Service/";
        var ViewModel = {};
        ViewModel.member = $scope.member;
        $scope.contact = {};
        ViewModel.contact = $scope.contact;
        console.log(URL);
        var data = JSON.stringify(ViewModel);
        var config = {};
        // $http.post(URL + 'data.php', data, config).then(function (res) {
        //     $scope.data = res.data;
        // })
    }


});
