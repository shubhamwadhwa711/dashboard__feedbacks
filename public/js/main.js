jQuery(document).ready(function($){
    function checkSearchType(){
        jQuery('#searchModal #nav-tab .nav-item').each(function(){
            if($(this).hasClass('active')){
                $('.searchType-field').val($(this).attr('aria-controls'));
            }
        })
    }
    checkSearchType();
    $('#searchModal #nav-tab .nav-item').on('click', function(){
        $('.searchType-field').val($(this).attr('aria-controls'));
    })
    $('#searchBox a').on('click', function(){
        var tagetTab = $(this).attr('href');
        jQuery('#searchModal #nav-tab .nav-item').each(function(){
            if($(this).attr('href') == tagetTab){
                $(this).click();
            }
        })
    })
    function currentUerData(){
        var data = localStorage.getItem("allCurretData") || undefined;
        if(data != undefined){
            var data = JSON.parse(data);
            userbio(data);
            var newdata =JSON.parse(data.data) ;
            console.log(newdata);
        }
    }
    currentUerData();
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
        Advanceformwcsform:'/whatsapplink',
        descriptionform:'/description',
        editASANAform:'/addasana',
        editBioDetailsform:'/edit-user-bio',
        placeOrderNumberform:'/phonenumber-check',

    };
    async function isEmptyForm(id){
        var contactid = localStorage.getItem('contactid') || undefined;
        var  mobile = localStorage.getItem('userMobile') || undefined;
        var formid = '#'+id+'';
        var formUrlName = id.replace(/\-/g, '');
        var formData = $(formid).serializeArray();
        var formMethod = $(formid).attr('method');
        if(contactid != undefined && mobile != undefined){
            var mb = {name: 'mobile', value :mobile};
            var cntid = {name: 'contactid', value :contactid};
            formData.push(mb);
            formData.push(cntid);
        }

        ajaxSendData(formid,formData,AjaxUrl[formUrlName],formMethod);
    }

    function userbio(user){
        var data = JSON.parse(user.data);
        $("#name").text(data.firstname);
        $("#mobile").text(data.mobile);
        $("#email").text(data.email);
        $("#address").text(data.mailingstreet);
        $("#gst").text(data.cf_2213);

        $('input[name="user_bio_name"]').val(data.firstname);
        $('input[name="user_bio_mobile"]').val(data.mobile);
        $('input[name="user_bio_email"]').val(data.email);
        $('input[name="user_bio_address"]').val(data.mailingstreet);
        $('input[name="user_bio_city"]').val(data.mailingcity);
        $('input[name="user_bio_state"]').val(data.mailingstate);
        $('input[name="user_bio_code"]').val(data.mailingzip);
        
        userbio_gstNo_Update(data);
        userbio_account_details(data);
        localStorage.setItem('contactid', data.contactid);
        localStorage.setItem('userMobile',data.mobile);
        valueset();
    }
    function userbio_gstNo_Update(res){
        $("#gst").text(res.cf_2213);
        $('input[name="GST_no"]').val(res.cf_2213);
    }
    function hideModal(formid){
        formid = formid.replace("-form", "");
        $(formid).modal('hide');
    }
    function userbio_account_details(resDate){
        $('#editAccountDetails-form input[name="paytm"]').val(resDate.cf_2083);
        $('#editAccountDetails-form input[name="phone"]').val(resDate.cf_2085);
        $('#editAccountDetails-form input[name="googlepay"]').val(resDate.cf_2081);
        $('#editAccountDetails-form input[name="account_no"]').val(resDate.cf_2087);
        $('#editAccountDetails-form input[name="upi_no"]').val(resDate.cf_2234);
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
    function checkdata(){
        var pop = localStorage.getItem('allCurretData');
        console.log(pop);
    }
    function redirectHome(resDate){
        if(resDate.redirect != undefined){
            var rdurl = window.location.origin+resDate.redirect;
            window.location.replace(rdurl);
        }
        else if(resDate.error != undefined){
            $(formid).find('.form-group-err').removeClass('d-none');
            $(formid).find('.form-group-err').text(resDate.message)
        }
    }

    function localStorageDataUpdate(){
        var orgData = localStorage.getItem('allCurretData') || undefined;
        var getdata = localStorage.getItem('tempdata') || undefined;
        if(orgData != undefined && getdata != undefined){
            var orgData = JSON.parse(orgData);
            var orgData = JSON.parse(orgData.data);
            
            var resdata = JSON.parse(getdata);
            console.log("Seting Local value");
            var updateDate ='';
            updateDate = {...orgData,...resdata};
            console.log(updateDate);
            var data = {data: JSON.stringify(updateDate)};
            console.log(data);
            localStorage.setItem('allCurretData', JSON.stringify(data));
            currentUerData();
        }
        localStorage.removeItem('tempdata');
        
    }


    function phoneNumbercheck(resdata){
        var allresData = JSON.parse(resdata.data);
        console.log(allresData);
        if(allresData.data.number_status === '1'){
            localStorage.setItem('allCurrentNumberSearch',JSON.stringify(allresData.data));
        }
        else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'This Number not Available!'
              })
        }
    }

    function phoneNumberSet(){
        var numberSearch = localStorage.getItem('allCurrentNumberSearch') || undefined;
        if(numberSearch != undefined){
            var data = JSON.parse(numberSearch);
            console.log(data);
            var single_amount = data.cf_942;
            var og_amount = data.cf_980;
            var total_amount =  data.cf_942 + data.cf_980;
            $('#placeNumbersearchSet tbody').html('<tr><td>'+og_amount+'</td><td>'+single_amount+'</td><td>'+total_amount+'</td><td class="vip-sticky__action"><div class="btn-group"><button type="button" class="btn btn-primary btn-bg dropdown-toggle" data-toggle="dropdown" ria-expanded="false">Action</button><div class="dropdown-menu"><a class="dropdown-item" href="#">Place Order</a><a class="dropdown-item" href="#">Add to Wishlist</a></div></div></td></tr>');
        }
    }
    phoneNumberSet();
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
                var resDate = data;
                console.log(resDate);
                if(resDate.data != undefined){
                    var allresData = resDate.data;
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
                        localStorage.setItem("allCurretData",JSON.stringify(resDate));
                        userbio(resDate);
                        wallet(resDate);
                        whatsappphoneset(resDate);

                        var data1 = resDate.data;
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
                        $('#searchModal').modal('hide');
                        SuccessMessage();
                        break;		
                    case 'whatapp': 
                        whatsappmsg(resDate);
                        break;
                    case 'userbio_gst': 
                        localStorage.setItem('tempdata',JSON.stringify(resDate.update_content));
                        localStorageDataUpdate();
                        hideModal(formid);
                        SuccessMessage();
                        break;
                    case 'userbio_account_details': 
                        localStorage.setItem('tempdata',JSON.stringify(resDate.update_content));
                        localStorageDataUpdate();
                        hideModal(formid);
                        SuccessMessage();
                    case 'userbio_update_detailts':
                        localStorage.setItem('tempdata',JSON.stringify(resDate.update_content));
                        localStorageDataUpdate();
                        hideModal(formid);
                        SuccessMessage();
                        break;
                    case 'login':
                        redirectHome(resDate);
                        break;
                    case 'phoneNumberCheck':
                        phoneNumbercheck(resDate);
                        break;
                    default:
                        alert('Nobody Wins!');
                }
               $(formid).modal("hide");
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
                    localStorage.clear();
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