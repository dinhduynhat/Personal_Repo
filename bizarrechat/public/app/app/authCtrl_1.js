    $scope.doReg = function ()
    {
        firstname = $scope.signup.firstname;
        email = $scope.signup.email;
        password = $scope.signup.password;
        $scope.data.show = false;
        $scope.data.show = true
        var quickbloxapitoken = localStorage.getItem('quickbloxapitoken');
        $http.post('http://api.quickblox.com/users.json', {
            token: quickbloxapitoken,
            user: {
                full_name: 'sulthan',
                email: 'email@e.acom',
                login: 'loginname',
                password: 'passwordpassword'
            }
        }, {
            'Content-Type': 'application/x-www-form-urlencoded'
        })

                .then(function (results)
                {
                    var apiid = results.data.user.id;
                    console.log(apiid);

                    $http.post('RegisterUser', {firstname: firstname, email: email, password: password, quickblox_id: apiid}).then(function (results)
                    {
                            
                        if (results.data == 'success')
                        {
                            
                            console.log('Register Success');
                            $location.path('registersuccess');
                        }
                        else
                        {
                            console.log('error5');
                        }
                    });



                })
                .catch(function (response)
                {
                    console.log(response.data.errors.email);
                    var email = response.data.errors.email;
                    console.log('outputing');
                    $scope.data.msg = 'Error : Email ' + email;

                });







    };