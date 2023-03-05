import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
Echo.private('App.Models.User.'+userId)
    .notification(function(msg){
        console.log(msg);
        alert(msg.body);


});
