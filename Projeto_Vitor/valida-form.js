document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('form');
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const passwordConfirmation = document.getElementById('password-confirmation');


    if (form) {
        form.addEventListener("submit", function (e){
            e.preventDefault();
            checkInputs();
        });
    } else {
        console.error("Elemento com ID 'form' não encontrado no DOM.");
    }
    
    function checkInputs() {
        const usernameValue = username.value;
        const emailValue = email.value;
        const passwordValue = password.value;
        const passwordConfirmationValue = passwordConfirmation.value;
         
        // Check usuario

        if (usernameValue === "") {
            setErrorFor(username, "O nome de usuário é obrigatório.");
        } else {
            setSuccessFor(username);
        }

        // Check email

        if (emailValue === "") {
            setErrorFor(email, 'O email é obrigatório.')
        } else if (!checkEmail(emailValue)) {
            setErrorFor(email, "Insira um email válido.")
        } else {
          setSuccessFor(email)
        }

        // Check password

        if (passwordValue === "") {
          setErrorFor(password, "A senha é obrigatória.")
        } else if (passwordValue.lenght < 5) {
          setErrorFor(password, "A senha precisa ter no minimo 5 caractéres.")
        } else {
          setSuccessFor(password)
        }
        
        // Check password confirmation

        if (passwordConfirmationValue === "") {
          setErrorFor(passwordConfirmation, "A confirmação de senha é obrigatória.")
        } else if (passwordConfirmationValue !== passwordValue) {
          setErrorFor(passwordConfirmation, "As senhas não conferem.")
        } else {
          setSuccessFor(passwordConfirmation)
        }

        const formControls = form.querySelectorAll ('.form-control')

          const formIsValid = [...formControls].every(formControl => {
            return( formControl.className === 'form-control success')
          })

        if (formIsValid) {
          const formData = new FormData(form)
          const searchParams = new URLSearchParams();
    
          for(const par of formData){
            searchParams.append(par[0],par[1],par[2],par[3])
          }
    
          fetch('cadastro.php',{
            method: 'POST',
            body: formData
          }).then(function(response){
            document.getElementById('username').value="";
            document.getElementById('email').value="";
            document.getElementById('password').value="";
            document.getElementById('password-confirmation').value="";
            return alert ('Dados gravados com sucesso!')
            
            
          }).catch(function(error){
            console.log(error);
          })
        }
    }

    function setErrorFor(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');

        // Adicionar a mensagem de erro
        small.innerText = message;

        // Adicionar a classe de erro
        formControl.className = "form-control error";
    }

    function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = "form-control success";
    }

    function checkEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
      email
    );
  }

    function redirect(){
      window.location = "login.php"
    }

});

