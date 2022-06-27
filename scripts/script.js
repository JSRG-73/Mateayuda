/*
Se declaran variables que van a tener el valor de los ids especificados en index, btn hace referencia a boton, mientras que los otros a contenedores
*/

const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn  = document.querySelector('.sign-in');

      /*Si uno de los dos esta activo realizara el cambio de formulario*/ 
document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});

