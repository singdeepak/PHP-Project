window.onload = function() {
    var msSettingsIn = setInterval("MSsettings()", 1);
    var msLimitIn = setInterval("msLimit()", 1);
      
    var secControlIn = setInterval("secControl()", 1);
    var secLimitIn = setInterval("secLimit()", 1);
    var minControlIn = setInterval("minControl()", 1);
    
    var zeroAdderMsIn = setInterval("zeroAdderMs()", 1);
    var zeroAdderSecIn = setInterval("zeroAdderSec()", 1);
    var zeroAdderMinIn = setInterval("zeroAdderMin()", 1);
    }
    
    function zeroAdderMs() {
      var msLen = document.getElementById("msDisplayer").value.length;
      if (msLen < 2) {
        msDisplayer.value = "0" + msDisplayer.value;
      }
    }
    function zeroAdderSec() {
      var secLen = document.getElementById("secDisplayer").value.length;
      if (secLen < 2) {
        secDisplayer.value = "0" + secDisplayer.value;
      }
    }
    function zeroAdderMin() {
      var minLen = document.getElementById("minDisplayer").value.length;
      if (minLen < 2) {
        minDisplayer.value = "0" + minDisplayer.value;
      }
    }
    //---
    
    function MSsettings() {
      if (msDisplayer.value == "") { 
        msDisplayer.value = "0";
      }
    }
    var msBuildsIn;
    function timeG() {
       msBuildsIn = setInterval("msBuilds()", 10); 
    }
    
    function msStart() { 
      if (msDisplayer.value == "00") {
        timeG();
      }
      document.getElementById("startButton").style.opacity="50%";
    document.getElementById("startButton").removeAttribute("onclick");
    }
    function msBuilds() {
      if (msDisplayer.value == "00") {
        msDisplayer.value = "1";}
        else {
          msDisplayer.value++;
        }
    }
    function msLimit() { //what happens when milliseonds reach their limit
      if (msDisplayer.value > "9") {
        msDisplayer.value = "00";
      }
    }
    
    //---
    
    function secControl() {
      if (msDisplayer.value == "9") {
        if (secDisplayer.value == "") {
          secDisplayer.value = "1";
        } else {
          secDisplayer.value++;
        }
      }
    }
    
    function secLimit() {
      if (secDisplayer.value > 59) {
        secDisplayer.value = "0";
        if (minDisplayer.value == "") {
        minDisplayer.value = "1";
        } else {
          minDisplayer.value++;
        }
      }
    }
    
    function minControl() {
      if (minDisplayer.value > 59) {
        minDisplayer.value = "0";
      }
    }
    
    //---
    
    function allStop() {
         clearInterval(msBuildsIn);
         //clearInterval(minControlIn);
         
         document.getElementById("resumeButton").style.opacity = "100%";
         document.getElementById("resumeButton").setAttribute("onclick", "allResume()");
    }
    
    function allResume() {
         timeG();
       
        document.getElementById("resumeButton").style.opacity = "50%";
        document.getElementById("resumeButton").setAttribute("onclick","");
         
    }
    
    function allReset() {
      clearInterval(msBuildsIn);
      msDisplayer.value = "";
      secDisplayer.value = "";
      minDisplayer.value = "";
      
      document.getElementById("startButton").style.opacity="100%";
      document.getElementById("startButton").setAttribute("onclick", "msStart()");
      
      document.getElementById("resumeButton").style.opacity = "50%";
      document.getElementById("resumeButton").setAttribute("onclick","");
    }