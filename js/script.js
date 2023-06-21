

// Selecciona el elemento con la clase 'navbar' que está dentro de un elemento con la clase 'flex' que a su vez está dentro de un elemento con la clase 'header'
let navbar = document.querySelector('.header .flex .navbar');

// Selecciona el elemento con el id 'menu-btn' y agrega un evento 'onclick'
document.querySelector('#menu-btn').onclick = () =>{
   // Alterna la clase 'active' en el elemento 'navbar'
   navbar.classList.toggle('active');
   // Elimina la clase 'active' del elemento 'profile'
   profile.classList.remove('active');
}

// Selecciona el elemento con la clase 'profile' que está dentro de un elemento con la clase 'flex' que a su vez está dentro de un elemento con la clase 'header'
let profile = document.querySelector('.header .flex .profile');

// Selecciona el elemento con el id 'user-btn' y agrega un evento 'onclick'
document.querySelector('#user-btn').onclick = () =>{
   // Alterna la clase 'active' en el elemento 'profile'
   profile.classList.toggle('active');
   // Elimina la clase 'active' del elemento 'navbar'
   navbar.classList.remove('active');
}

// Agrega un evento 'onscroll' a la ventana
window.onscroll = () =>{
   // Elimina la clase 'active' del elemento 'profile'
   profile.classList.remove('active');
   // Elimina la clase 'active' del elemento 'navbar'
   navbar.classList.remove('active');
}



//tiliza el DOM para acceder y manipular elementos en una página HTML. En este código se seleccionan elementos específicos en la página utilizando el método document.querySelector y se agregan eventos a ellos para alterar sus clases cuando se hacen clic en ciertos botones o cuando se desplaza la página. Por ejemplo, cuando se hace clic en el elemento con el id ‘menu-btn’, se alterna la clase ‘active’ en el elemento ‘navbar’ y se elimina la clase ‘active’ del elemento ‘profile’. Esto puede ser utilizado para mostrar u ocultar elementos en la página o cambiar su apariencia. 