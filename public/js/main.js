jQuery(document).ready(function($){
    
    //Setup Token in Ajax Call
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var AjaxUrl = {
        editGSTform:'/add-edit-gst',
        editAccountDetailsform:'/edit-acount-details',
        userLoginform:'/login'
    };
    async function isEmptyForm(id){
        var formid = '#'+id+'';
        var formUrlName = id.replace(/\-/g, '');
        var formData = $(formid).serializeArray();
        var formMethod = $(formid).attr('method');
        ajaxSendData(formid,formData,AjaxUrl[formUrlName],formMethod)
    }
    function ajaxSendData(formid,formData, formUrl,formMethod){
        if(!$(formid).find('.form-group-err').hasClass('d-none')){
            $(formid).find('.form-group-err').addClass('d-none');
            $(formid).find('.form-group-err').text("");
        }
        $.ajax({
            url: formUrl,
            type: formMethod,
            data:formData,
            success: function(data) {
                console.log(data);
                if(data.redirect != undefined){
                    var rdurl = window.location.origin+data.redirect;
                    window.location.replace(rdurl);
                }
                else if(data.error != undefined){
                    $(formid).find('.form-group-err').removeClass('d-none');
                    $(formid).find('.form-group-err').text(data.message)
                }
            },
        });
    }
    $('#userLogout').on('click',function(e){
        e.preventDefault();
        $.ajax({
            url: '/logout',
            type: 'POST',
            data:'logout',
            success: function(data) {
                if(data.redirect != undefined){
                    var rdurl = window.location.origin+data.redirect;
                    window.location.replace(rdurl);
                }
            },
        });
    })
    $(document).on('click', '.submit-btn-form', function(e){
        e.preventDefault();
        var formID = $(this).attr('data-form-id');
        isEmptyForm(formID); 
    })

})