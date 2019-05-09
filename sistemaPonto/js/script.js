function login(){
    let usuario = document.getElementById('usuario');
    let senha = document.getElementById('senha');
    
    if (usuario.value == 'qua207010' && senha.value == 'senai010'){
        window.location.href = "apresentacao.php";
    } else {
        alert('Usuário e/ou senha INVÁLIDOS');
    }
}