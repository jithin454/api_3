var app = angular.module("myApp", []);
app.controller("controller", function ($scope, $http) {
  $scope.insert = function () {
    $http
      .post("http://localhost/time-picker/api/insert.php", {
        time: $scope.time,
      })
      .success(function (data) {
        $scope.time = null;
      });
  };
});
