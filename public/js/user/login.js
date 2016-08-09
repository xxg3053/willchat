var Login = function() {

    var handleLogin = function() {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            rules: {
                name: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                name: {
                    required: "请输入用户名."
                },
                password: {
                    required: "请输入密码."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                var _form = $(form);
                var url = _form.attr('action');
                var formData = _form.serialize();

                _form.find('.alert-danger span').html('');
                _form.find('.alert-danger').addClass('hide');

                $.post(url, formData, function(data, textStatus, xhr) {
                    if (data.status) {
                        location.href = data.url;
                    } else {
                        //登录失败则进行提示
                        _form.find('.alert-danger span').html(data.info);
                        _form.find('.alert-danger').removeClass('hide');
                    };
                }, 'json');
                return false;
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });
    };

    var handleForgetPassword = function() {


    };

    var handleRegister = function() {

        $('.register-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            rules: {
                name: {
                    required: true
                },
                password: {
                    required: true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                name: {
                    required: "请输入用户名."
                },
                password: {
                    required: "请输入密码."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit
                $('.alert-danger', $('.register-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                var _form = $(form);
                var url = _form.attr('action');
                var formData = _form.serialize();

                _form.find('.alert-danger span').html('');
                _form.find('.alert-danger').addClass('hide');

                $.post(url, formData, function(data, textStatus, xhr) {
                    if (data.status) {
                        location.href = data.url;
                    } else {
                        //登录失败则进行提示
                        _form.find('.alert-danger span').html(data.info);
                        _form.find('.alert-danger').removeClass('hide');
                    };
                }, 'json');
                return false;
            }
        });

        $('.register-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.register-form').validate().form()) {
                    $('.register-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });
    };

    return {
        handleLogin: handleLogin,
        handleForgetPassword: handleForgetPassword,
        handleRegister: handleRegister
    };
}();
//# sourceMappingURL=login.js.map
