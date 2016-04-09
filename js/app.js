
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
                    if (data.success) {
                        $scope.message1 = {
                            msg: "Mensagem enviada com sucesso! enviado com sucesso :)",
                            code: true
                        };
                    } else {
                        $scope.message1 = {
                            msg: "Erro no envio! Tente mais tarde :(",
                            code: false
                        };
                    }
                });
    };//processFormMsg
    
    
    $scope.processFormMusica = function(){
        
        $http({
            method: 'POST',
            url: 'process-mus.php',
            data: $.param($scope.musica), // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        })
                .success(function (data) {
                    if (data.success) {
                        $scope.message2 = {
                            msg: "Mensagem enviada com sucesso! Adicionamos sua música a nossa lista. :)",
                            code: true
                        };
                    } else {
                        $scope.message2 = {
                            msg: "Erro no envio! Tente mais tarde :(",
                            code: false
                        };
                    }
                });
        
    };//processFormMusica
    
    
    $scope.processFormRsvp = function(){
        
        $http({
            method: 'POST',
            url: 'process-rsvp.php',
            data: $.param($scope.rsvp), // pass in data as strings
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}  // set the headers so angular passing info as form data (not request payload)
        })
                .success(function (data) {
                    if (data.success) {
                        $scope.message3 = {
                            msg: "Muito obrigado pela mensagem! :)",
                            code: true
                        };
                    } else {
                        $scope.message3 = {
                            msg: "Erro no envio! Tente mais tarde :(",
                            code: false
                        };
                    }
                });
        
    };//processFormRsvp
    
    
    
}
;
