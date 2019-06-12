<!--footer-->
<section class="footer">
 <div class="container">
  <div class="row footer-top">
   <div class="col-lg-9 col-md-9 col-sm-9 col-12">
    <div class="footer-left">
     <h3>Join The Adventure!</h3>
     <p>We are now live. Join our email list for behind-the-scenes access!</p>
<form action="https://kanetus.us18.list-manage.com/subscribe/post?u=431b11afe31adaad3e3bc5a00&amp;id=451aa83844" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate footer-form" target="_blank" novalidate>

        <div id="mce-responses" class="clear">
          <span id="invalidEmail2" style="color: red;"><i class="fa fa-warning"></i> Invalid Email Address</span>
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
      <div class="form-group">
        <input type="email" class="form-control" name="EMAIL" id="email2" placeholder="email address">
      </div>     <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_431b11afe31adaad3e3bc5a00_451aa83844" tabindex="-1" value=""></div>
      <div class="form-group">
        <input type="submit" class="form-control slowHover" value="Subscribe">
      </div>
     </form>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-3 col-12">
    <div class="footer-right">
     <ul class="mg0 pd0">
       <li><a href="https://www.instagram.com/voy.app/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="https://www.linkedin.com/company/thevoyapp/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="https://www.facebook.com/voyapp/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      </ul>
    </div>
   </div>
  </div>
 </div>
 <div class="footer-strip text-center">
  <ul class="mg0 pd0">
   <li><a href="javascript:void(0)">&copy; Voy 2019. All Rights Reserved.</a></li>
   <li><a href="policies/privacy.html" target="_blank">Privacy Policy</a></li>
   <li><a href="policies/terms.html" target="_blank">Terms of Use</a></li>
   <li><a href="policies/mobile.html" target="_blank">Mobile App Privacy Policy</a></li>
   <!--<li><a href="javascript:void(0)" target="_blank">About Us</a></li>-->
  </ul>
 </div>
</section><!--footer-->



<!--top to bottom-->
<a id="scrollToTop" class="scroll-hide" href=""><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!--top to bottom-->

</div><!--website-wrapper-->


<!-- <script type="text/javascript">
 $(window).scroll(function(e){
    if ($(this).scrollTop() > 100) {
       $('.navigation').addClass("scrollDown");
    } else {
       $('.navigation').removeClass("scrollDown");
    }
});
</script> -->
<!-- <script type="text/javascript">
  $(function() {
    //caches a jQuery object containing the header element
    var header = $(".navigation");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass("navigation").addClass("scrollDown");
        } else {
            header.removeClass("scrollDown").addClass("navigation");
        }
    });
});
</script> -->



<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='MMERGE6';ftypes[6]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<script type="text/javascript">
 var $scrollStatus = $('.scroll-status');

    $('.nav-bar').navScroll({
      mobileDropdown: true,
      mobileBreakpoint: 767,
      scrollSpy: true,
      onScrollStart: function() {
        $scrollStatus.show();
        $scrollStatus.text('Started scrolling');
      },
      onScrollEnd: function() {
        $scrollStatus.text('Scrolling ended');
        setTimeout(function() {
          $scrollStatus.fadeOut(200);
        }, 1000);
      }
    });
    $('.nav-bar').on('click', '.nav-mobile', function (e) {
      e.preventDefault();
      $('.nav-bar ul').slideToggle('fast');
    });
</script>

<script type="text/javascript">
jQuery(document).ready(function($){
 $(window).scroll(function(e){
    if ($(this).scrollTop() > 40) {
       $('.mynavigation').css({"background-color": "#fff","position": "fixed"});
    } else {
       $('.mynavigation').css({"background-color": "transparent","position": "absolute"});
    }
});
 });
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
 $(window).scroll(function(e){
    if ($(this).scrollTop() > 40) {
       $('.nav-bar li a').css({"color": "#777"});
    } else {
       $('.nav-bar li a').css({"color": "#fff"});
    }
});
});
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
 $(window).scroll(function(e){
    if ($(this).scrollTop() > 40) {
       $('.navlogoimg').css({"display": "inline-block"});
    } else {
       $('.navlogoimg').css({"display": "none"});
    }
});
 });
</script>
<!--- Math CAPTCHA---->
<script>
  var total;
function validateEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
    $('#invalidEmail1').hide();
    $('#invalidEmail2').hide();
$('#email2').keyup(function() {
  if(validateEmail($(this).val())==false){
    $('#invalidEmail2').show();
  }else{
    $('#invalidEmail2').hide();  }
});
$('#email1').keyup(function() {
  if(validateEmail($(this).val())==false){
    $('#invalidEmail1').show();
  }else{
    $('#invalidEmail1').hide();  }
});
// function getRandom(){return Math.ceil(Math.random()* 20);}
// function createSum(){
//     var randomNum1 = getRandom(),
//       randomNum2 = getRandom();
//   total =randomNum1 + randomNum2;
//   $( "#question" ).text( randomNum1 + " + " + randomNum2 + "=" );
//   $("#ans").val('');
//   checkInput();
// }

// function checkInput(){
//     var input = $("#ans").val(),
//       slideSpeed = 200,
//       hasInput = !!input,
//       valid = hasInput && input == total;
//     // $('#message').toggle(!hasInput);
//      $('#contact').prop('disabled', !valid);
//      if($("#contact").is('[disabled]')){
//      $('#contact').css({'opacity':'.5','cursor':'not-allowed'});
//      }else{
//      $('#contact').css({'opacity':'1','cursor':'default'});
//      }
//      $('#invalidCaptcha').toggle(valid);
//      $('#invalidCaptcha').toggle(hasInput && !valid);
// }

// $(document).ready(function(){
//   //create initial sum
//   createSum();
//   // On "reset button" click, generate new random sum
//   $('button[type=reset]').click(createSum);
//   // On user input, check value
//   $( "#ans" ).keyup(checkInput);
// });

// $('#contact').click(function(){
//   var name=$('#fname').val();
//   var email=$('#email1').val();
//   var message=$('#mce-MMERGE2').val();
//    $.ajax({
//             url: 'SendEmail.php',
//             type: 'GET',
//             data:{name:name,email:email,msg:message},
//             //dataType: 'html',
//             success: function (data) {
//              // alert(data);
//                 //$('#container').html(data);
//             }
//         });
// });
</script>





</body>
</html>
