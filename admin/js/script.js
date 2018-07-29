$(document).ready(function(){
    $('select').select2();  
    $('table').DataTable();
    $('textarea').summernote();
    
    //Confirmation sur suppression
    $('.form-delete').submit(function(event){
        
        var reponse = confirm('Etes-vous sûr de vouloir supprimer?');
        if (!reponse) {
            event.preventDefault();
            
        }
    })
});

