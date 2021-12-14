jQuery(document).ready(function($){
    function valueset(){
        var contactid = localStorage.getItem('contactid') || undefined;
        if(contactid != undefined){
            $('.contactid').val(contactid);
        }
    }
    
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
        searchform:'/search',
        whatsappform:'/whatsapp',
        simplesearchform:'/whatsapplink',
        descriptionform:'/description',
        editASANAform:'/addasana'
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
        localStorage.setItem('contactid', data.contactid);
        valueset();
    }
    function wallet(amount){
        var data = JSON.parse(amount.data, true);        
        $("#wallet_balance").text(parseFloat(data.cf_2038).toFixed(2));
        $("#hold_balance").text(parseFloat(data.cf_2181).toFixed(2));
        $("#withdrawn_balance").text(parseFloat(data.cf_2177).toFixed(2));
    }
    //whatsapp
    function whatsappmsg(resDate){
        if(resDate.data != undefined){
            var allresData = JSON.parse(resDate.data)
            if(allresData.status == 'success'){
                SuccessMessage();
            }
        }
    }
    function SuccessMessage(){
        Swal.fire(
            '',
            'Success',
            'success'
          )
    }
    //whats app phonenumber set
    function whatsappphoneset(resDate){
        var allresData = JSON.parse(resDate.data);
        $('#whatsapp_number').val(allresData.mobile);
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
                var resDate = JSON.parse(data);
                
                if(resDate.data != undefined){
                    var allresData = JSON.parse(resDate.data);
                    console.log(allresData);
                    if(allresData.status == 'failed'){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                          })
                    }
                }
                switch (resDate.componet) {
                    case 'all':
                        userbio(resDate);
                        wallet(resDate);
                        whatsappphoneset(resDate);
                        var data1 = JSON.parse(resDate.data, true);
                        if(data1.cf_2236 != ''){
                            $("#ref_by").text(data1.cf_2236);
                        }
                        else{
                            $("#ref_by").text('.....');
                        }
                        $('#next_follow_date').val(data1.cf_2238);
                        SuccessMessage();
                        break;
                    case 'description': 
                        alert('prototype Wins!');
                        break;
                    case 'search': 
                        SuccessMessage();
                        break;		
                    case 'whatapp': 
                        whatsappmsg(resDate);
                        break;
                    default:
                        alert('Nobody Wins!');
                }
               
                if(resDate.redirect != undefined){
                    var rdurl = window.location.origin+resDate.redirect;
                    window.location.replace(rdurl);
                }
                else if(resDate.error != undefined){
                    $(formid).find('.form-group-err').removeClass('d-none');
                    $(formid).find('.form-group-err').text(resDate.message)
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
                    localStorage.clear();
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