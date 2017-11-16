vitrinApp.controller('VitrinController', function($scope, $http) {

    $scope.mainSentences = [];
    $scope.otherSentences = [];

    $http.get("/vitrins/sandbox/offers.json")
        .then(function(response) {
            var ResponseMainSentences = response.data.main;

            angular.forEach(ResponseMainSentences, function (value, key) {
                var itemSentence = angular.fromJson(value);
                $scope.mainSentences.push(itemSentence);
            });
            var ResponseOtherSentences = response.data.others;
            angular.forEach(ResponseOtherSentences, function (value, key) {
                var itemSentence = angular.fromJson(value);
                $scope.otherSentences.push(itemSentence);
            });
            $scope.colorTheme = response.data.theme;
        }, function () {
            alert("error");
        });
});