function Show_Password() {
document.querySelectorAll('.password_field').forEach(function(e) {
    if(e.type === "password"){
        e.type = "text";
    } else {
        e.type = "password";
    }
});
}