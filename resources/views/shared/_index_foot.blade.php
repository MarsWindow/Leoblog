<script src="/assets/owl-carousel/owl.carousel.min.js"></script>
<script src="/js/validator/bootstrapValidator.min.js"></script>
<script src="/js/broadcast-roll.js"></script>
<script type="text/javascript">
(function(){document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=14343664394917913612' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000);var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();
$(document).ready(function() {

	  var owl = $("#owl-demo");

		function random(owlSelector){
		    owlSelector.children().sort(function(){
		        return Math.round(Math.random()) - 0.5;
		    }).each(function(){
		      $(this).appendTo(owlSelector);
		    });
		}

	  owl.owlCarousel({
	  	items:4,
	  	autoPlay: true,
	  	navigation: true,
	    navigationText: [
	      "<i class='fa fa-chevron-left'></i>",
	      "<i class='fa fa-chevron-right'></i>"
	      ],
	    beforeInit : function(elem){
	      //Parameter elem pointing to $("#owl-demo")
	      random(elem);
	    }
	  });

	  // Custom Navigation Events
	  // $(".next").click(function(){
	  //   owl.trigger('owl.next');
	  // })
	  // $(".prev").click(function(){
	  //   owl.trigger('owl.prev');
	  // })
});

$(document).ready(function() {
    $('#send_message_form').bootstrapValidator({
        message: 'This value is not valid',
        excluded: ':disabled',
        feedbackIcons: {
            valid: 'fa fa-ok',
            invalid: 'fa fa-remove',
            validating: 'fa fa-refresh'
        },
        fields: {
            telPhone: {
                validators: {
                    notEmpty: {
                        message: '留下个电话再走吧！'
                    }
                }
            },
            Email: {
                validators: {
                    notEmpty: {
                        message: '留下邮箱再走吧！'
                    }
                }
            },
            Code: {
                validators: {
                    notEmpty: {
                        message: '验证码不能为空哦！'
                    },
					callback: {
                            message: '输错啦！',
                            callback: function(value, validator) {
                                var res = true;
									$.ajax({
										url: '/tools/verify_res',
										type: 'post',
										dataType: 'json',
										async: false,
										data: {},
										success: function (data) {
											if (data != value) {
												res = false;
											}
										}
									});
									return res;
                            }
                        }
                }
            }
        }
    }).on('error.form.bv', function(e) {
        console.log('error');

        // Active the panel element containing the first invalid element
        var $form         = $(e.target),
            validator     = $form.data('bootstrapValidator'),
            $invalidField = validator.getInvalidFields().eq(0),
            $collapse     = $invalidField.parents('.collapse');

        $collapse.collapse('show');
    }).on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
			$.ajax({
    			url:$form.attr('action'),
    			async:true,
    			type:"POST",
    			data:$form.serialize(),
    			success:function(data){
    					var globalVarMsg = data.msg;
    						if(globalVarMsg !=''){
    							$('#myModalHint').modal('show');
    							$("#modalBody").html("<div class='text text-warning'><strong>"+globalVarMsg+"</strong></div>");
    						}
    			},
    			dataType:"json"
		    });
        });
});
// $(function(){
//   //$('#Code').attr('placeholder','/tools/verify_num?'+Math.random());
// 	$.ajax({
// 		url:"/tools/verify_num", //处理页面的路径
//         type:"POST", //提交方式
//         success:function(data){ $('#Code').attr('placeholder',data);}
// 	});
// });
</script>