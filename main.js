form = document.forms.mod;
form.onclick = function(){
    let modal = document.getElementById('modal');
    modal.style.display = 'initial';
}
form.oninput = function(){
    let modal = document.getElementById('modal');
    modal.style.display = 'none';
}