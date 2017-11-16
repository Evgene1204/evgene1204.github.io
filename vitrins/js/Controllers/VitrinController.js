vitrinApp.controller('VitrinController', function($scope, $http) {

    $scope.mainSentences = [];
    $scope.otherSentences = [];

    $http.get("/vitrins/sandbox/offers.json")
        .then(function(response) {
            var ResponseMainSentences = response.data.main;

            angular.forEach(ResponseMainSentences, function (value, key) {
                if (!value.isAdv) {
                    var itemSentence = angular.fromJson(value.data);
                    $scope.mainSentences.push(itemSentence);
                    $scope.advertising = "";
                }
            });

            var ResponseOtherSentences = response.data.others;

            angular.forEach(ResponseOtherSentences, function (value, key) {
                var itemSentence = {
                    isAdv: value.isAdv
                };
                if (!value.isAdv) {
                    itemSentence.data = angular.fromJson(value.data);
                } else {
                    itemSentence.data = value.data;
                }

                $scope.otherSentences.push(itemSentence);
            });
            $scope.colorTheme = response.data.theme;
        }, function () {
            alert("error");
        });
});