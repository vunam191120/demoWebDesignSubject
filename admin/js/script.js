function showPass() {
    var x = document.getElementById("passwordLogin");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function confirmDelete(){
    var del = confirm("Are you sure to delete this ?"); //data type = boolean
    if(del){
        return true;
    }else{
        return false;
    }
}