$(document).ready(function(){

    function showModal(){
        $('#modal-container101').show();
        

    }

    function closeModal(){
        $('#modal-container101').hide();
    }

    setTimeout(showModal,3000);

    $('#close101').click(function(){
        closeModal();
    })
});