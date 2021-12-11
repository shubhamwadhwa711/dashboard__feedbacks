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
        userLoginform:'/login',
        searchform:'/search'
    };
    async function isEmptyForm(id){
        var formid = '#'+id+'';
        var formUrlName = id.replace(/\-/g, '');
        var formData = $(formid).serializeArray();
        var formMethod = $(formid).attr('method');
        ajaxSendData(formid,formData,AjaxUrl[formUrlName],formMethod)
    }

    function userbio(user){
        var data = JSON.parse(user.data, true);        
        $("#name").text(data.firstname);
        $("#mobile").text(data.mobile);
        $("#email").text(data.email);
        $("#address").text(data.mailingstreet);
        $("#gst").text(data.cf_2213);
    }
    function wallet(amount){
        var data = JSON.parse(amount.data, true);        
        $("#wallet_balance").text(parseFloat(data.cf_2038).toFixed(2));
        $("#hold_balance").text(parseFloat(data.cf_2181).toFixed(2));
        $("#withdrawn_balance").text(parseFloat(data.cf_2177).toFixed(2));
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
                //console.log(data.data);
                var status = JSON.parse(data.data);
                //console.log(status.status);
                switch (data.componet) { 
                    case 'all':
                        userbio(data);
                        wallet(data);
                        var data1 = JSON.parse(data.data, true);
                        if(data1.cf_2236 != ''){
                            $("#ref_by").text(data1.cf_2236);
                        }
                        else{
                            $("#ref_by").text('.....');
                        }
                        $('#next_follow_date').val(data1.cf_2238);
                        
                        break;
                    case 'prototype': 
                        alert('prototype Wins!');
                        break;
                    case 'mootools': 
                        alert('mootools Wins!');
                        break;		
                    case 'dojo': 
                        alert('dojo Wins!');
                        break;
                    default:
                        alert('Nobody Wins!');
                }
                if(status.status == 'failed'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                      })
                }
                if(data.redirect != undefined){
                    var rdurl = window.location.origin+data.redirect;
                    window.location.replace(rdurl);
                }
                else if(data.error != undefined){
                    $(formid).find('.form-group-err').removeClass('d-none');
                    $(formid).find('.form-group-err').text(data.message)
                }
            },
            fail: function (data) {
                console.log('ASDAsdaSDAS');
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href="">Why do I have this issue?</a>'
                  })
            }
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