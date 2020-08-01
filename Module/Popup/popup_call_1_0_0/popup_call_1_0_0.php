<?php
  $path = get_template_directory_uri();
  $path = $path.'/Module/Popup/popup_call_1_0_0';
  if($check == 0){
    include(locate_template("Module/Popup/popup_call_1_0_0/style.php"));
    add_action('wp_footer', 'popup_call_1_0_0');
    function popup_call_1_0_0(){ 
        echo '                    
          <script type="text/javascript">
          $(document).ready(function () {
            $(".popup_call_1_0_0 .popup_call_1_0_0_clickPopup,.bvh_dkcall").click(function () {
              $(".popup_call_1_0_0 #popup_call_1_0_0_overlayClickform").fadeIn(5);
              $(".popup_call_1_0_0 .popup_call_1_0_0_overlay").fadeIn(500);
              $("html, body").animate({ scrollTop: 0 }, "slow");
      
            });
            $(".popup_call_1_0_0 #popup_call_1_0_0_closePopup, .popup_call_1_0_0 .popup_call_1_0_0_overlay").click(function () {
              $(".popup_call_1_0_0 #popup_call_1_0_0_overlayClickform").fadeOut(500);
              $(".popup_call_1_0_0 .popup_call_1_0_0_overlay").fadeOut(500);
            });
          });
        </script>
        ';           
      };
  }
?>

<style>
    .popup_call_1_0_0 .popup_call_1_0_0_overlay {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeBAMAAADJHrORAAAAMFBMVEX///8HBwcICAgUFBQXFxcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABuanbkAAAAQUlEQVR4nOzOoQ0AIBDF0K5QNiC3wYUN2H8nJPkai6l5prSOdcPU2jckN8mTZEmWZEmW5EFy8f+e/g4AAAD//wMAKnM4yCLdBHkAAAAASUVORK5CYII=);
}

.popup_call_1_0_0_box #popup_call_1_0_0_closePopup {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBJREFUeNqc0z0KAjEQhuFx8E5qrqFeQdBCu0WwF2zsxd7fG+QCC+reyW8kgRjza+DdIksedgLb01rfiWiPWqpfA9QwHjt0QaM/gJucF+SFxpWQBabowWbTQucC6AuQDXZeCjTJQD+Aj+SgIBBCfEjlgBjiQie0SAGy+okLFGiLDmgeA1JfYkfYoBlaO6MVI0Mzgox0dEZTpYgAV3PwGbgjlUNCAOUgLgSSEFcAUYgrAfL+tQ8kyKoSsKsz0PItwAC6cz7Ubz7EKgAAAABJRU5ErkJggg==);
}

.popup_call_1_0_0 {
  font-size: 14px;
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
}
.popup_call_1_0_0 input, .popup_call_1_0_0 textarea {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.popup_call_1_0_0 .overlay_form {
  font-size: 14px;
}
.popup_call_1_0_0 .popup_call_1_0_0_overlay {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 10;
  opacity: 0.7;
}
.popup_call_1_0_0_box {
  position: absolute;
  width: 100%;
  top: 60px;
}
.popup_call_1_0_0_box article {
  background: #fff;
  z-index: 11;
  margin: 50px auto;
  padding: 20px 0;
  width: 350px;
  position: relative;
  border-radius: 4px;
  box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
}
@media (max-width: 320px) {
  .popup_call_1_0_0_box article {
    width: 300px;
  }
}
.popup_call_1_0_0_box #popup_call_1_0_0_closePopup {
  background-position: 0 0;
  background-repeat: no-repeat;
  width: 17px;
  height: 17px;
  position: absolute;
  top: -18px;
  right: -24px;
  transition: all 0.5s ease 0s;
  font-family: arial;
}
@media (max-width: 375px) {
  .popup_call_1_0_0_box #popup_call_1_0_0_closePopup {
    top: 10px;
    right: 10px;
  }
}
.popup_call_1_0_0_box #popup_call_1_0_0_closePopup:hover {
  transform: rotate(360deg);
}
.popup_call_1_0_0_header {
  text-align: center;
  position: relative;
  padding: 0 20px;
}
.popup_call_1_0_0_headerpc {
  display: block;
  text-align: center;
}
@media (max-width: 414px) {
  .popup_call_1_0_0_headerpc {
    display: none;
  }
}
.popup_call_1_0_0_headermb {
  display: none;
}
@media (max-width: 414px) {
  .popup_call_1_0_0_headermb {
    display: block;
  }
}
.popup_call_1_0_0_headermb-call {
  background: #ea3b41;
  color: #fff;
  text-transform: uppercase;
  display: block;
  padding: 12px 0;
  border-radius: 4px;
  font-weight: bold;
  text-transform: uppercase;
  text-decoration: none;
}
.popup_call_1_0_0_headermb-call-icon {
  background: url(../images/pop-call.png) 0 0 no-repeat;
  width: 22px;
  height: 22px;
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
}
.popup_call_1_0_0_header-note {
  padding: 20px 0 10px;
  color: #777;
  font-weight: 600;
  font-style: italic;
}
.popup_call_1_0_0_header img {
  display: block;
  padding: 0 0 20px;
  margin: 0 auto;
}
.popup_call_1_0_0_content {
  padding: 5px 20px 1px;
}
.popup_call_1_0_0_content input, .popup_call_1_0_0_content textarea {
  padding: 9px 12px;
}
.popup_call_1_0_0_content > div:nth-child(1) input, .popup_call_1_0_0_content > div:nth-child(1) textarea {
  background: #fff;
  border: 1px solid #b7b7b7;
  border-radius: 4px;
}
.popup_call_1_0_0_content > div:nth-child(1) input {
  width: 100%;
  margin-bottom: 4px;
  font-size: 14px;
  padding: 15px 0;
  text-align: center;
  color: #333;
}
.popup_call_1_0_0_content > div:nth-child(1) select {
  width: 100%;
  margin-bottom: 5px;
  padding: 5px 8px;
  background: #ddd;
  border: 1px solid #adadad;
  color: #444;
  cursor: pointer;
}
.popup_call_1_0_0_content > div:nth-child(1) textarea {
  width: 100%;
  font-family: arial;
  font-size: 13px;
  margin-bottom: 4px;
  resize: none;
  height: 96px;
}
.popup_call_1_0_0_content > div:nth-child(2) input {
  width: 100%;
  background: #00abe2;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 14px;
  margin-top: 5px;
  border-radius: 4px;
  text-transform: uppercase;
  padding: 15px 0;
}
.popup_call_1_0_0_content > div:nth-child(2) input#pop_sent {
  font-weight: bold;
}
.popup_call_1_0_0 .popup_call_1_0_0_clickPopup2 {
  color: #fff;
  width: 100px;
  height: 20px;
  padding: 10px;
  background-color: #6e2daa;
}
.popup_call_1_0_0 .popup_call_1_0_0_clickPopup2:hover {
  background-color: #00abe2;
  cursor: pointer;
}
@media screen and (max-width: 375px) {
  .popup_call_1_0_0 .pop_box article {
    width: 345px;
  }
  .popup_call_1_0_0 .pop_box #close {
    top: 12px;
    right: 12px;
  }
  .popup_call_1_0_0 .pop_box #close {
    background: url(../images/pucb-close2.png) center center no-repeat;
  }
}
@media screen and (max-width: 360px) {
  .popup_call_1_0_0 .pop_box article {
    width: 325px;
  }
}
@media screen and (max-width: 320px) {
  .popup_call_1_0_0 .pop_box article {
    width: 300px;
  }
  .popup_call_1_0_0 .pop_fr > div:nth-child(2) .sol p {
    margin: 3px 0;
  }
  .popup_call_1_0_0 .pop_fr {
    padding: 8px 10px 10px;
  }
  .popup_call_1_0_0 .pop_tt p {
    padding: 2px 30px 14px;
    background: none;
  }
  .popup_call_1_0_0 .pop_fr > div:nth-child(2) .note {
    display: none;
  }
  .popup_call_1_0_0 .pop_fr > div:nth-child(1) textarea {
    height: 70px;
  }
}

/*# sourceMappingURL=popup_Call_1_0_0.css.map */

</style>
        <div class="popup_call_1_0_0">
          <!-- <p class="popup_call_1_0_0_clickPopup button">1900.633.988 </p> -->
          <!-- <p class="popup_call_1_0_0_clickPopup2 button">1900.633.988 </p> -->
          <div class="popup_call_1_0_0_overlay" style="display:none"></div>
          <div id="popup_call_1_0_0_overlayClickform" class="overlay_form" style="display:none">
              <div class="popup_call_1_0_0_box">
                  <article>
                      <div class="popup_call_1_0_0_header">
                          <img src="<?php echo $path ?>/images/logo.png" alt="">
                          <div class="popup_call_1_0_0_headerpc">
                              <div class="popup_call_1_0_0_header-note">Để lại số điện thoại <br>để được Trung Tâm Điều Trị VSHM Hồng Hà gọi lại ngay!</div>
                          </div>
                          <div class="popup_call_1_0_0_headermb">
                              <a href="tel:1900633988" class="popup_call_1_0_0_headermb-call"><i class="popup_call_1_0_0_headermb-call-icon"></i> gọi ngay cho chúng tôi</a>
                              <div class="popup_call_1_0_0_header-note">- hoặc để lại số điện thoại của bạn - <br>
                                  để nhận cuộc gọi từ <br> Trung Tâm Điều Trị VSHM Hồng Hà</div>
                          </div>
                      </div>
                      <div class="popup_call_1_0_0_content">
                          <div>
                            <div style="display:none" >
                                <input type="text" placeholder="Họ và tên (*)" value="Yêu Cầu Gọi Lại" id="iname" name="iname">
                                <textarea type="text" placeholder="Nhu cầu tư vấn" id="itext" name="itext"></textarea>
                                <input id="iemail" name="iemail" value="no@email.chuahiemmuon.vn" type="hidden" placeholder="Email">
                                <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            </div>
                                <input id="imob" name="imob" type="textbox" placeholder="Nhập số điện thoại của bạn*:">
                          </div>
                          <div>
                              <input onclick="ants_send_contact(this)" id="pop_sent" type="button" value="yêu cầu gọi lại">
                          </div>
                      </div>
                      <div class="popup_call_1_0_0_headerpc">
                          <div class="popup_call_1_0_0_header-note">* Hoặc gọi ngay với chúng tôi hotline: <br> 1900.633.988</div>
                      </div>
                      <a href="#" id="popup_call_1_0_0_closePopup"></a>
                  </article>
              </div>
          </div>
      </div>
