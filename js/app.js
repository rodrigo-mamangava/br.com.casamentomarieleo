
// define angular module/app
var formApp = angular.module('formApp', []);

// create angular controller and pass in $scope and $http
function formController($scope, $http) {

// process the form
    $scope.processFormMsg = function () {
        console.log($scope.msg);

        $http({
            method: 'POST',
            url: 'process-msg.php',
            data: $.param($scope.msg), // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        })
                .success(function (data) {
                    console.log(data);

                    if (!data.success) {
                        // if not successful, bind errors to error variables
                        $scope.message = data.errors.message;
                        
                        
                    } else {
                        // if successful, bind success message to message
                        $scope.message = data.message;
                    }
                    
                    console.log($scope.message);
                    
                    
                });

    };

}
;
