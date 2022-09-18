function myProfileUpdate(){
    window.location.href="profile_editing.php";
}

function updateBtn() {
    var updateMessage = window.confirm("Bilgileri Güncelmek İstediğinizden Eminmisiniz.");
    if(updateMessage){
        alert(document.write('True'));
    }else{
        alert(document.write('Cancel'));
    }
  }