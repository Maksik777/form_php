'use strict'

var userName = document.querySelector('username');
var userNameError = document.querySelector('')
function send () {}

if (!(/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,14}\.[a-z]{1,}$/i.test(userEmail.value))) {
    userNameError.classList.remove('auth__error_hide');
    userNameError.classList.add('auth__error_show');
    isError = true;

}

if (!(/^\+{0,1}(380|380|80|0){1,4}[0-9]{9}$/.test(userEmail.value))) {
    userNameError.classList.remove('auth__error_hide');
    userNameError.classList.add('auth__error_show');
    isError = true;
}
if(isError) return null; 

    document.guerySelector('auth_error').classList .remove('auth_error_show');
    document.guerySelector('auth_error').classList .remove('auth_error_hide');

    if (!/^[a-яа-]00)


    function setClearHandler () {
        var elements = document.querySelectorAll('.auth__text');
        
        elements.forEach(function(element) {
        
            element.onclick = function() {
                
                
                this.nextElementSibling.classList .remove('auth_error_show');
                this.nextElementSibling.classList .add('auth_error_hide');

            }

        });
    
    }
    console.log(this)

    if (this.valid() === false)  return null;

    var data = {
        name: this.name.value,
        email:this.email.value,
        phone: this.phone.value,
        password: this.password.value,
        subscribe: this.subscribe.checked,
    }

    fetch ('/login')