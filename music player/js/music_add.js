
function musicAddFormControl(){
    var forms = document.forms['musicForm'];
    var musicName = forms.musicNameAdd;
    var musicFile = forms.musicFile;
    var musicGenres = forms.musicGenres;

    forms.onsubmit  = function(){
        if(musicName.value != "" && musicFile !="" && musicGenres !=""){
           
        }else{
            alert("Do Not Enter Missing Information");
            return false;
        }
    }

}