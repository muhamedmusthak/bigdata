function getQuestions($this){
console.log($this.val(),'val');
    $.ajax({
       type:"post",
       //url:"<?php echo base_url() ?>" + "BigdatasiteController/getcoursequestion",
       url:base_url+ "BigdatasiteController/getcoursequestion",
        
       data:{enrollId:$this.val()},
       success :function(response) 
       {
         // unLoader();
        $("#AssModal .tab-content").html(response);
      }
     });
    $('#myModal').modal('hide'); 
    $("#AssModal").modal({backdrop: 'static', keyboard: false});
}
  
 $(".call_enroll").on('click',function(){
    $(".thankyoumes").show();
    $(".modalContent").hide();
    $(".call_enroll").hide();
 }) 
function payment_later(){
  $("#resultModal").hide();
  $('.modal-backdrop').removeClass("in");
  var enroll_id = localStorage.getItem('enroll');

   $.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/paymentlater",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}

 $(document).ready(function() 
 {
  $(".thankyoumes").hide();
    $(".modalContent").show();
    $('#contact_form').bootstrapValidator({
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please Enter your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please Enter your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter your email address'
                    },
                    emailAddress: {
                        message: 'Please Enter a valid email address'
                    }
                }
            },
            phone_num: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter your phone number'
                    },
                    /*phone: {
                        country: 'India',
                        message: 'Please supply a vaild phone number'
                    }*/
                }
            },
            
            }
        }).on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            var salutation=$("#salutation").val();
            var first_name=$("#first_name").val();
            var last_name=$("#last_name").val();
            var email=$("#email").val();
            var contact=$("#contact").val();
            var address=$("#address").val();
            var edu_qualification=$("#edu_qua").val();
            var work_exp=$('input[name=work_exp').val();
            var read_to_start=$('input[name=ready]:checked').val();
            var contact_me=$('input[name=contact_me]:checked').val();
            var course_id=$("#course_id").val();

          
            $.ajax({
               type:"post",
               //url:"<?php echo base_url() ?>" + "BigdataAdminController/enrollvalue",
               url: base_url+"BigdataAdminController/enrollvalue",
               data:{salutation:salutation,first_name:first_name,last_name:last_name,email:email,contact:contact,address:address,course_id:course_id,edu_qualification:edu_qualification,work_exp:work_exp,read_to_start:read_to_start,contact_me:contact_me},
               dataType:'json',
               success :function(response) 
               {

                console.log(response,"enroll_id");
                var enroll_id=response;
                localStorage.setItem('enroll', JSON.stringify(enroll_id));
                var enroll_id = localStorage.getItem('enroll');
                $("#myModal").hide();
                $("#resultModal").show();
                $("#resultModal").removeClass("fade");
                console.log($("#resultModal"));
                $("#call_Assessment").val(enroll_id);
                $("#enroll_map_id").val(enroll_id);
                $("#call_Assessment").val();
                $("#assessment").removeClass("hide");
                $("#enroll_form").addClass("hide");
                $("#head2").removeClass("hide");
                $("#head1").addClass("hide");
                 
                $(".enroll_close").addClass("hide");
                $(".call_Assessment").removeClass("hide");
                $(".call_enroll").addClass("hide");
                
                var course_id = $("#course_id").val();
       
                }
           });
        })

        $('#close_model').click(function() {
          location.reload();
        });
         $('#close_model1').click(function() {
          location.reload();
        });
  });

  $(document).ready(function() 
 {  
      $(".pg").hide();
     $("input[name='education_qua']").click(function()
     {
        console.log($("input[name='education_qua']:checked").val());
        var con=$("input[name='education_qua']:checked").val();
        console.log(con);
        if(con=="ug")
        {
          console.log(con);
          $(".pg").hide();
          $(".ug").show();
        }
        else
        {
          console.log(con);
          $(".pg").show();
          $(".ug").hide();
        }
        
      });
    


 });

 function scheduler()
 {
   //$("#AssModal").modal("hide");
  //$('#thankyou').hide();
  //$('#courseDetails').hide();
  $("#myModal").hide();
  $('#batchSched').show();
  $("#BatchModel").modal({backdrop: 'static', keyboard: false});
 }

  function call_classtiming(){
    
  $("#AssModal").modal("hide");
  $('#thankyou').show();
  $('#courseDetails').show();
  //$('#batchSched').show();
  $("#BatchModel").modal({backdrop: 'static', keyboard: false});

  }

  function get_batchtiming($id)
 {
        var id=$id;
       /*alert(id);*/
       $.ajax({
           type:"post",
           //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
           url: base_url+ "BigdatasiteController/get_batchtiming",
          
           data:{id:id},
           success :function(response)
           {
              //console.log(response);
              $("#session1").html(response);
              radiocall2('#session1');


           }
       });


 }

function emailSend()
{
var enroll_id = localStorage.getItem('enroll');
$.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/sendEmailfail",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}
 

function enroll_mail()
{
  //alert();
var enroll_id = localStorage.getItem('enroll');

 $.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/enroll_mail",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}


function proceedPayment()
{
var enroll_id = localStorage.getItem('enroll');

 $.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/detailform",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}
 function insert_batch()
{     
        $("#batchSched").hide();
        $(".batch_start").hide();
        var enroll_id = localStorage.getItem('enroll');
        var batch_timing_id=$('input[name=batch_timing]:checked').val();
        console.log(batch_timing_id,'batch_timing_id');
        var data =batch_timing_id.split(",");
        var id=data[0];
        var status=data[1];
        console.log(data[0],'0');
        console.log(data[1],'1');
        if(id=='3')
        {
          //alert("comethird");
          var yourArray = [];
          $("input:checkbox[name=type]:checked").each(function()
          {
              console.log($(this).val())
              yourArray.push($(this).val());
              console.log(yourArray,"array");
              //alert(yourArray);
          });

          $.ajax({
             type:"post",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
             url: base_url+ "BigdatasiteController/insert_batch",
             data:{id:id,enroll_id:enroll_id,status:status,yourArray:yourArray},
             success :function(response)
             {
                //console.log(response);
                //$("#session1").html(response);
               radiocall3('#payment1');



             }
           });
        }
        else{

          $.ajax({
             type:"post",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
             url: base_url+ "BigdatasiteController/insert_batch",
            
             data:{id:id,enroll_id:enroll_id,status:status},
             success :function(response)
             {
                //console.log(response);
                //$("#session1").html(response);
                radiocall3('#payment1');


             }
           });

        }


 }
  function radiocall2(next)
  { 
        console.log(next,'nxtid');
        $("[href='"+next+"']").trigger('click');
        // $this.parents('.tab-pane').find('.nextButtonbtn').removeClass('disabled');
  }

  function radiocall3(next)
  { 
        console.log(next,'nxtid');
        $("[href='"+next+"']").trigger('click');
        // $this.parents('.tab-pane').find('.nextButtonbtn').removeClass('disabled');
  }


function submitForm()
{
  // var enroll_id=response;
  var enroll_id = localStorage.getItem('enroll');
  $("#enrollId").val(JSON.parse(enroll_id)); 

         $.ajax({
               type:"post",
               //url:"<?php echo base_url() ?>" + "BigdatasiteController/testdata",
               url: base_url+ "BigdatasiteController/testdata",
              
               data: $("#assessmentForm").serialize(),
               success: function(response){
                    console.log(response);
                    if(response==true){
                      call_classtiming();
                      console.log('pass');
                       $('#AssModal').modal('hide');
                       $('#BatchModel').modal('show');

                    }
                    else{
                      $('#AssModal').modal('hide');
                      if(course_id!=1){
                        $('#failmodel').modal('show');

                        console.log('fail');
                      }
                      else{
                        alert();
                        call_classtiming();
                       $('#BatchModel').modal('show');
                      }
                    }
           // alert("success");
           // $('#email').val('');
           // $('#qText').val('');
              },
               error: function(){
                   alert("Fail")
               }
     });

}
function radiocall(next, $this)
{ 
  console.log(next,$this,'jsdjfj');
  $("[href='#"+next+"']").trigger('click');
  $this.parents('.tab-pane').find('.nextButtonbtn').removeClass('disabled');
  console.log('Next:',next,'Previous',$this.parents('.tab-pane').find('.nextButtonbtn'));
  // if (next=='#step13') {
  //   $('#assess_submit').show();
  // }
  // else{
  //  $('#assess_submit').hide();
  // }
 }

 $(document).ready(function()
 {

    $('#batchSched').hide();
    $('#timeSched').hide();
    $('#courseDetails').hide();
    $('#thankyou').hide();
    // $('button[name="assess_submit"]').prop('disabled', true);
    $('.next').click(function(){  
    var nextId = $(this).parents('.tab-pane').next().attr("id");
    $('[href=#'+nextId+']').tab('show');
    return false;
    
  })

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e)
  {
    
    //update progress
    var step = $(e.target).data('step');
    var percent = (parseInt(step) / 10) * 100;
    
    $('.progress-bar').css({width: percent + '%'});
    $('.progress-bar').text("Step " + step + " of 10");
    
    //e.relatedTarget // previous tab
    
  })
  
  $('.first').click(function()
  {
  
    $('#myWizard a:first').tab('show')
  
  })

});
 function load_pathmodel()
 { 
    $("[href='#path1']").trigger('click')
    $("#PathfinderModel").modal("hide");
 }
 function PathfinderModel()
 {
    $("#PathfinderModel").modal({backdrop: 'static', keyboard: false});
 }
function RegisterModel(){
    $("#RegisterModel").modal({backdrop: 'static', keyboard: false});
}
function TrainingModel() {
    console.log($("#TrainingModel"),"TrainingModel");
    $("#TrainingModel").modal({ backdrop: 'static', keyboard: false });
    // $("#TrainingModel").modal({ backdrop: 'static', keyboard: false });
}

//  function enrollmodel()
//  {
    
//   var ele=document.querySelector(".ui-tabs-active").childNodes[0].childNodes[0].data;
//   console.log(ele,"ele");
//   var ele1=document.querySelector(".ui-tabs-active").childNodes[0].attributes[1].nodeValue;
//   console.log(ele1,"ele1")
//   document.getElementById("head1").innerHTML= ele;
//   document.getElementById("course_id").value= ele1;
//   $('#myModal').modal('show'); 
// }

function enrollmodel() 
{
    //alert();
    var url = $(location)[0].href;
    //alert(url);
    var data = url.split("/");
    //alert(data[5]);
   var uriindex = data[5] || 'index';
    if (uriindex =="index") 
    {
        document.getElementById("head1").innerHTML = "Register for a Course";
        $('#myModal').modal('show');
        $(".showonlyindex").show();
        //$('#myOldId').attr('id', 'newID');
        $(".hide_index").attr('id','no_value');
        $(".hide_separate").attr('id','course_id');

    }
    else{
        $(".showonlyindex").hide();
        var ele = document.querySelector(".ui-tabs-active").childNodes[0].childNodes[0].data;
        console.log(ele, "ele");
        var ele1 = document.querySelector(".ui-tabs-active").childNodes[0].attributes[1].nodeValue;
        console.log(ele1, "ele1")
        document.getElementById("head1").innerHTML = ele;
        document.getElementById("course_id").value = ele1;
        $('#myModal').modal('show');
        $(".hide_index").attr('id','course_id');
        $(".hide_separate").attr('id','no_value');
    }
   
}

function call_enroll()
{
    var ele1=document.querySelector(".titleService").childNodes[0].data;
    console.log(ele1);
    var ele2=document.querySelector(".titleService").attributes[1].nodeValue;
     console.log(ele2);
    document.getElementById("head1").innerHTML= ele1;
    document.getElementById("course_id").value= ele2;
    $('#myModal').modal('show'); 
}
// function show_enrolldetail()
// {
     
//        var batch=$('input[name=batch]:checked').val();
//        var batch_timing=$('input[name=batch_timing]:checked').val();
        
//         localStorage.setItem("batch", batch);
//         localStorage.setItem("batch_timing", batch_timing);

//        // alert(batch);
//         //var url1="<?php echo base_url() ?>" + "BigdataAdminController/detailform/";
//         var url1= base_url+ "BigdataAdminController/detailform/";
        
//        $(location).attr('href', url1);
//        //var batch_timing=$('input[name=batch_timing]:checked').val();
//        //  $.ajax({
//        //     type:"post",
//        //     url:"<?php //echo base_url();?>" + "BigdataAdminController/detailform",
//        //     data:{
//        //      batch:batch,
//        //      batch_timing:batch_timing,
//        //      firstname:$('#first_name').val(),
//        //      lastname:$('#last_name').val(),
//        //      email:$('#email').val(),
//        //      company:$("#company").val(),
//        //      phone_num:$("#phone_num").val(),
//        //      course:$("#course").val()
//        //    },
//        //     success :function(response) {
//        //         console.log(response);
//        //    }
//        // });
// }
function show_enrolldetail()
{
     
    var enroll_id = localStorage.getItem('enroll');
    $.ajax({
       type:"post",
       url: base_url+ "BigdataAdminController/detailform",
       data:{enroll_id:enroll_id},
       success :function(response) 
       {
          console.log(response);
          window.location.href = base_url+ "BigdataAdminController/payment";
       }
   });
}
function emailSend()
{

  var first_name=$("#first_name").val();
       //alert(first_name);
  var last_name=$("#last_name").val();
  var email=$("#email").val();
  var company=$("#company").val();
  var phone_num=$("#phone_num").val();
  var course=$("#course").val();
  //alert(email);
 $.ajax({
     type:"post",
     url:"<?php echo base_url() ?>" + "BigdataAdminController/sendEmail",
     data:{first_name:first_name,last_name:last_name,email:email,phone_num:phone_num,company:company,course:course},
     success :function(response) {
     }
 });
}

  // function call_Assessment(){
  //  //alert();
  //  $('#myModal').modal('hide');
 //    // $('#assessment').modal('show'); 
  //  $("#AssModal").modal({backdrop: 'static', keyboard: false});

  // }
     
/*  $(document).ready(function()

  {
    $('#close_model').click(function() {
    location.reload();
});*/
  /*  $("#call_enroll").click(function(){
      
      var salutation=$("#salutation").val();
            var first_name=$("#first_name").val();
          var last_name=$("#last_name").val();
            var email=$("#email").val();
            var company=$("#company").val();
            var phone_num=$("#phone_num").val();
            var course=$("#course").val();
            $.ajax({
               type:"post",
               url:"<?php echo base_url() ?>" + "BigdataAdminController/enrollvalue",
               data:{salutation:salutation,first_name:first_name,last_name:last_name,email:email,phone_num:phone_num,company:company,course:course},
               success :function(response) 
               {
                
                $("#assessment").removeClass("hide");
                $("#enroll_form").addClass("hide");
                $("#head2").removeClass("hide");
                $("#head1").addClass("hide");
                $(".enroll_close").addClass("hide");
                     $(".call_Assessment").removeClass("hide");
               $(".call_enroll").addClass("hide");
                            // $("#myModal").modal('hide');
                            // $("#AssModal").modal({backdrop: 'static', keyboard: false});
                       // emailSend();
                               $("#first_name,#last_name,#email,#company,#phone_num,#course").val('');
              }
           });
        })
  });*/