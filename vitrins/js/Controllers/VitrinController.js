vitrinApp.controller('VitrinController', function($scope, $http) {

    $scope.mainSentences = [];
    $scope.otherSentences = [];

    $http.get("https://f28fa15c.ngrok.io/dev.php/api/offer/vitrine/offers")
        .then(function(response) {
            console.log(response);
            var ResponseOtherSentences = response.data.offers
            angular.forEach(ResponseOtherSentences, function (value, key) {
                var response = angular.fromJson(value);
                if (!key) {
                    $scope.mainSentences.push(response);
                    return;
                }
                var itemSentence = {
                    isAdv: response.is_adv
                };
                if (!response.is_adv) {
                    itemSentence.data = response
                } else {
                    itemSentence.data = response.script;
                }

                $scope.otherSentences.push(itemSentence);
            });
            $scope.colorTheme = response.data.theme;
        }, function () {
            alert("error");
        });
});