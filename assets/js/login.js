// cette fonction permet de valider le formulaire d'inscription
function registerValidation(){
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var passwordConfirm = document.getElementById('passwordConfirm').value;
    var telephone = document.getElementById('telephone').value;

    
    check(nom);

}


function check(params){
    if(params == '' || params == null){
        alert(params+" est obligatoire");
        params.classList.add('invalid');
        return false;
    }
}