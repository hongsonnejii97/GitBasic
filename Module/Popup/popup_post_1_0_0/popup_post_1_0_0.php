<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Popup/popup_call_3_0_0';
    if($check == 0){
        add_action('wp_footer', 'popup_post_1_0_0');
        function popup_post_1_0_0(){ 
            echo '
                <style>

                    .popup_post_1_0_0 .popup_post_1_0_0_overlay {
                      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeBAMAAADJHrORAAAAMFBMVEX///8HBwcICAgUFBQXFxcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABuanbkAAAAQUlEQVR4nOzOoQ0AIBDF0K5QNiC3wYUN2H8nJPkai6l5prSOdcPU2jckN8mTZEmWZEmW5EFy8f+e/g4AAAD//wMAKnM4yCLdBHkAAAAASUVORK5CYII=);
                    }
                  
                    .popup_post_1_0_0_box #popup_post_1_0_0_closePopup {
                      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBJREFUeNqc0z0KAjEQhuFx8E5qrqFeQdBCu0WwF2zsxd7fG+QCC+reyW8kgRjza+DdIksedgLb01rfiWiPWqpfA9QwHjt0QaM/gJucF+SFxpWQBabowWbTQucC6AuQDXZeCjTJQD+Aj+SgIBBCfEjlgBjiQie0SAGy+okLFGiLDmgeA1JfYkfYoBlaO6MVI0Mzgox0dEZTpYgAV3PwGbgjlUNCAOUgLgSSEFcAUYgrAfL+tQ8kyKoSsKsz0PItwAC6cz7Ubz7EKgAAAABJRU5ErkJggg==);
                    }
                  
                    .popup_post_1_0_0 {
                      font-size: 14px;
                      font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
                      width:100%;
                      top:0;
                      left:0;
                      z-index:11;
                      position:fixed;
                    }
                    .popup_post_1_0_0 input, .popup_post_1_0_0 textarea {
                      box-sizing: border-box;
                      -moz-box-sizing: border-box;
                    }
                    .popup_post_1_0_0__header .pic {
                      width: 30%;
                      margin: 0 auto;
                    }
                    .popup_post_1_0_0__header .pic img {
                      width: 100%;
                    }
                    .popup_post_1_0_0__header .search {
                      text-align: center;
                      margin-top: 10px;
                    }
                    .popup_post_1_0_0__header .search input {
                      border-radius: 15px;
                      border: 1px solid #ccc;
                      width: 40%;
                      outline: none;
                    }
                    .popup_post_1_0_0__header .search button {
                      background: none;
                      border: none;
                      color: #283f75;
                      font-size: 16px;
                      margin-left: -35px;
                      margin-top: -2px;
                      outline: none;
                    }
                    .popup_post_1_0_0__content {
                      margin-top: 20px;
                    }
                    .popup_post_1_0_0__content .title {
                      background: #283F75;
                      color: #fff;
                      position: relative;
                    }
                    .popup_post_1_0_0__content .title::before {
                      content: "";
                      position: absolute;
                      width: 150px;
                      height: 3px;
                      background: #EF4324;
                      top: 0;
                      left: 0;
                    }
                    .popup_post_1_0_0__content .title h2 {
                      font-size: 18px;
                      padding: 8px 0px 8px 10px;
                      font-weight: bold;
                    }
                    .popup_post_1_0_0__content .list ul {
                      list-style: none;
                      padding-left: 0;
                      overflow-y: scroll;
                      height: 260px;
                    }
                    .popup_post_1_0_0__content .list ul::-webkit-scrollbar-track {
                      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                      border-radius: 10px;
                      background-color: #F5F5F5;
                    }
                    .popup_post_1_0_0__content .list ul::-webkit-scrollbar {
                      width: 6px;
                      background-color: #F5F5F5;
                    }
                    .popup_post_1_0_0__content .list ul::-webkit-scrollbar-thumb {
                      border-radius: 10px;
                      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                      background-color: #7F8C8D;
                    }
                    .popup_post_1_0_0__content .list ul li {
                      padding: 10px 0;
                      border-bottom: 1px solid #eee;
                    }
                    .popup_post_1_0_0__content .list ul li a {
                      font-size: 14px;
                      color: #000;
                    }
                    .popup_post_1_0_0 .overlay_form {
                      font-size: 14px;
                    }
                    .popup_post_1_0_0 .popup_post_1_0_0_overlay {
                      position: fixed;
                      left: 0px;
                      top: 0px;
                      width: 100%;
                      height: 100%;
                      z-index: 10;
                      opacity: 0.7;
                    }
                    .popup_post_1_0_0_box {
                      position: absolute;
                      width: 100%;
                      top: 60px;
                    }
                    .popup_post_1_0_0_box article {
                      background: #fff;
                      z-index: 11;
                      margin: 50px auto;
                      padding: 20px;
                      width: 550px;
                      position: relative;
                      border-radius: 4px;
                      box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
                      border-top: 5px solid #00abe5;
                    }
                    @media (max-width: 320px) {
                      .popup_post_1_0_0_box article {
                        width: 300px;
                      }
                    }
                    .popup_post_1_0_0_box #popup_post_1_0_0_closePopup {
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
                      .popup_post_1_0_0_box #popup_post_1_0_0_closePopup {
                        top: 10px;
                        right: 10px;
                      }
                    }
                    .popup_post_1_0_0_box #popup_post_1_0_0_closePopup:hover {
                      transform: rotate(360deg);
                    }
                    .popup_post_1_0_0 .popup_post_1_0_0_clickPopup2 {
                      color: #fff;
                      width: 100px;
                      height: 20px;
                      padding: 10px;
                      background-color: #6e2daa;
                    }
                    .popup_post_1_0_0 .popup_post_1_0_0_clickPopup2:hover {
                      background-color: #00abe2;
                      cursor: pointer;
                    }
                  
                    @media (max-width: 414px) {
                      .popup_post_1_0_0_box article {
                        width: 350px;
                        margin-top: 20px;
                      }
                      .popup_post_1_0_0__header {
                        display: block;
                      }
                      .popup_post_1_0_0__header .pic {
                        width: 50%;
                        margin: 0 auto;
                      }
                      .popup_post_1_0_0__header .search input {
                        width: 70%;
                      }
                      .popup_post_1_0_0__content .title h2 {
                        font-size: 16px;
                      }
                    }
                    @media (max-width: 375px) {
                      .pop_box article {
                        width: 345px;
                      }
                  
                      .pop_box #close {
                        top: 12px;
                        right: 12px;
                      }
                  
                      .pop_box #close {
                        background: url(../images/pucb-close2.png) center center no-repeat;
                      }
                    }
                    @media (max-width: 360px) {
                      .popup_post_1_0_0_box article {
                        width: 340px;
                      }
                    }
                    @media (max-width: 320px) {
                      .popup_post_1_0_0_box article {
                        width: 300px;
                      }
                      .popup_post_1_0_0__content {
                        margin-top: 10px;
                      }
                  
                      .pop_fr > div:nth-child(2) .sol p {
                        margin: 3px 0;
                      }
                  
                      .pop_fr {
                        padding: 8px 10px 10px;
                      }
                  
                      .pop_tt p {
                        padding: 2px 30px 14px;
                        background: none;
                      }
                  
                      .pop_fr > div:nth-child(2) .note {
                        display: none;
                      }
                  
                      .pop_fr > div:nth-child(1) textarea {
                        height: 70px;
                      }
                    }
                  
                    /*# sourceMappingURL=popup_post_1_0_0.css.map */
                  
                </style>             

                <script type="text/javascript">
                    $(document).ready(function () {
                      $(".popup_post_1_0_0_clickPopup").click(function () {
                      $(".popup_post_1_0_0 #popup_post_1_0_0_overlayClickform").fadeIn(5);
                      $(".popup_post_1_0_0 .popup_post_1_0_0_overlay").fadeIn(500);
                      $("html, body").animate({ scrollTop: 0 }, "slow");
                    });
                  
                    $(".popup_post_1_0_0 #popup_post_1_0_0_closePopup, .popup_post_1_0_0 .popup_post_1_0_0_overlay").click(function () {
                      $(".popup_post_1_0_0 #popup_post_1_0_0_overlayClickform").fadeOut(500);
                      $(".popup_post_1_0_0 .popup_post_1_0_0_overlay").fadeOut(500);
                      });
                    });
                  
                </script>                
            
            ';           
        };
      }
  ?>



<body style="margin:0;padding:0">

<div class="popup_post_1_0_0">
  <!-- <p class="popup_post_1_0_0_clickPopup button">1900.633.988 </!-->
  <div class="popup_post_1_0_0_overlay" style="display:none"></div>
  <div id="popup_post_1_0_0_overlayClickform" class="overlay_form" style="display:none">
    <div class="popup_post_1_0_0_box">
      <article>

        <div class="popup_post_1_0_0__header">
            <div class="pic">
              <img src="<?php echo $path ?>/images/logo.png" alt="">
            </div>
            <!-- <div class="search">
              <input type="text">
              <button><i class="icon-search"></i></button>
            </div> -->
        </div>

        <div class="popup_post_1_0_0__content">
          <div class="title">
            <h2>Danh sách bài viết liên quan</h2>
          </div>
          <div class="list"><ul>
            <?php
                $sidebar_new_list = $list['content'];
                if($sidebar_new_list) :
                    foreach ($sidebar_new_list as $post) :
                      setup_postdata($post);
                      $link = get_permalink($post->ID);
                      $title = get_the_title($post->ID);
                      echo '
                        <li><a href="'.$link.'">'.$title.'</a></li>
                      ';
                    endforeach;
                  wp_reset_postdata();
                endif;
                //End Tin Tuc 
            ?>
            </ul>
          </div>
        </div>
        
        <a id="popup_post_1_0_0_closePopup"></a>

      </article>
    </div>
  </div>
</div>





