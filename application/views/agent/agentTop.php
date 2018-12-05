<?php ?>

 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box " style="background-color: #8892d6;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="inner" style="color: white;">
              <!-- <h3 id="orders"></h3> -->
              <p style="margin:0;">New Inquiries:</p>
               <p style="font-size:2.3em;margin:0;"><?php echo sizeof($inquirydata); ?></p>

            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" style="padding:6px 0;"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box " style="background-color: #45bbe0;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="inner" style="color: white;">
              <!-- <h3 id="visitors"></h3> -->

                <p style="margin:0;">Filter Count:</p>
               <p style="font-size:2.3em;margin:0;"><?php echo sizeof($filterdata); ?></p>
  </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url ('index.php/AgentController/viewFilter'); ?>" class="small-box-footer" style="padding:6px 0;"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#F06292;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="inner" style="color: white;">
              <!-- <h3 id="inquiries"></h3> -->
   <p style="margin:0;">Customer Count: </p>
               <p style="font-size:2.3em;margin:0;"><?php echo sizeof($customerdata); ?></p>

            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url ('index.php/AgentController/viewCustomer'); ?>" class="small-box-footer" style="padding:6px 0;"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:#78c350;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="inner" style="color: white;">
              <h3 id="notifications"></h3>

                <p style="margin:0;">Agent Name:</p>
               <p style="font-size:1.4em;margin:4px;"><?php echo $agentdata->agentName; ?> </p>

            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url ('index.php/AgentController/viewAgent'); ?>" class="small-box-footer" style="padding:6px 0;"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

     

     

<script>
//firstCall();
    function firstCall(){
        setvisitors();
        setorders();
        setinquiries();
        setupdates();
     var myVar1 = setInterval(setvisitors, 1000*600);
     var myVar2 = setInterval(setorders, 1000*600);
     var myVar3 = setInterval(setinquiries, 1000*600);
     var myVar4 = setInterval(setupdates, 1000*600);
    }
                                                                        
    function setvisitors() {
        
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                   
                    var opt1 = JSON.parse(res)[0].count;
                    
                    document.getElementById('visitors').innerHTML=opt1;
                     
                        }
            }
            obj.open("GET", "getData.php?visitors=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function setorders() {
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                    var opt1 = JSON.parse(res)[0].items;
                    document.getElementById('orders').innerHTML=opt1; 
                    document.getElementById('ordersSideBar').innerHTML=opt1;
                }
            }
            obj.open("GET", "getData.php?orders=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function setinquiries() {
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                   
                    var opt1 = JSON.parse(res)[0].contacts;
                    document.getElementById('inquiries').innerHTML=opt1;
                     document.getElementById('inquirySideBar').innerHTML=opt1;
                }
            }
            obj.open("GET", "getData.php?inquiries=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    function setupdates() {
        var comp=1;
        var obj;
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            obj = new ActiveXObject("Microsoft.XMLHTTP");
        } else {
            alert("Browser Doesn't Support AJAX!");
        }
        if (obj !== null) {
            obj.onreadystatechange = function () {
                if (obj.readyState < 4) {
                    // progress
                } else if (obj.readyState === 4) {
                    var res = obj.responseText;
                    var opt1 = JSON.parse(res)[0].updates;
                  
                    document.getElementById('notifications').innerHTML=opt1; 
                    document.getElementById('updateSideBar').innerHTML=opt1; 
                }
            }
            obj.open("GET", "getData.php?notifications=" + encodeURIComponent(comp), true);
            obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            obj.send();
        }
    }
    </script>