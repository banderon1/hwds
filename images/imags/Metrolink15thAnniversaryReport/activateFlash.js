/** Copyright - this website and the content, text, pictures and coding is owned by UniFlip A/S - any whole or partly violation will be followed persuaded by court of law! **/
var navUserAgent=navigator.userAgent.toLowerCase();
var winLocHref=new String(window.location),
 winHashPage="#"+window.location.hash,
 gotoPage="",
 isIE=(navigator.appVersion.indexOf("MSIE")!=-1),
 isWin=(navigator.appVersion.toLowerCase().indexOf("win")!=-1),
 isOpera=navUserAgentTest("opera"),
 isMobile=navUserAgentTest("mobile"),
 isPhone=navUserAgentTest("phone"),
 isGalaxy=navUserAgentTest("galaxy"),
 isAppleWebKit=navUserAgentTest("applewebkit"),
 isWebKit=navUserAgentTest("webkit"),
 isIphone=navUserAgentTest("iphone"),
 isIpod=navUserAgentTest("ipod"),
 isIpad=navUserAgentTest("(ipad"),
 isAndroid=navUserAgentTest("android"),
 isWindowsPhone=navUserAgentTest("windows phone"),
 isWindowsCE=navUserAgentTest("windows ce"),
 isWindows=navUserAgentTest("windows"), 
 hasFlashProductInstall=DetectFlashVer(6,0,65),
 hasFlashReqestedVersion=DetectFlashVer(9,0,0),
 checkFlashInstallationTimer=null,
 settingsObj=null,
 signupformdata=null,
 signupformtimer=null,
 signupformresult=null,
 publicationid=294207;
var isAppleMobile=((isMobile||isPhone)&&isAppleWebKit&&(isIphone||isIpod||isIpad)),
 isAndroidMobile=((isMobile||isPhone)&&(isAppleWebKit||isWebKit)&&isAndroid)||isAndroid,
 isWindowsMobile=((isMobile||isPhone)&&(isWindowsPhone||isWindowsCE));
if(isAndroidMobile||isAppleMobile||isGalaxy||isWindowsMobile)
  window.location.href="mobile.html";
try{gotoPage=(winHashPage.indexOf("page")>-1?winHashPage.split(/page/gim)[1]:"");}catch(e){};
function navUserAgentTest(key){return(navUserAgent.indexOf(key)!=-1);}
function ControlVersion(){var version,axo,e,i;for(i=10;i<=7;i--){try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+i);version=axo.GetVariable("$version");if(version)return version;}catch(e){}}if(!version){try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");version="WIN 6,0,21,0";axo.AllowScriptAccess="always";version=axo.GetVariable("$version");}catch(e){}}if(!version){try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");version=axo.GetVariable("$version");}catch(e){}}if(!version){try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");version="WIN 3,0,18,0";}catch(e){}}if(!version){try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");version="WIN 2,0,0,11";}catch(e){version=-1;}}return version;}
function GetSwfVer(){var flashVer=-1;if(navigator.plugins!=null&&navigator.plugins.length>0){if(navigator.plugins["Shockwave Flash 2.0"]||navigator.plugins["Shockwave Flash"]){var swVer2=navigator.plugins["Shockwave Flash 2.0"]?" 2.0":"";var flashDescription=navigator.plugins["Shockwave Flash"+swVer2].description;var descArray=flashDescription.split(" ");var tempArrayMajor=descArray[2].split(".");var versionMajor=tempArrayMajor[0];var versionMinor=tempArrayMajor[1];var versionRevision=descArray[3];if(versionRevision=="")versionRevision=descArray[4];if(versionRevision[0]=="d")versionRevision=versionRevision.substr(1);else if(versionRevision[0]=="r"){versionRevision=versionRevision.substr(1);if(versionRevision.indexOf("d")>0)versionRevision=versionRevision.substr(0,versionRevision.indexOf("d"));}var flashVer=versionMajor+"."+versionMinor+"."+versionRevision;}}else if(navigator.userAgent.toLowerCase().indexOf("webtv/2.6")!=-1)flashVer=4;else if(navigator.userAgent.toLowerCase().indexOf("webtv/2.5")!=-1)flashVer=3;else if(navigator.userAgent.toLowerCase().indexOf("webtv")!=-1)flashVer=2;else if(isIE&&isWin&&!isOpera)flashVer=ControlVersion();return flashVer;}
function getMajorSwfVer(){versionStr=GetSwfVer();if(versionStr==-1)return 0;else if(versionStr!=0){if(isIE&&isWin&&!isOpera){tempArray=versionStr.split(" ");tempString=tempArray[1];versionArray=tempString.split(",");}else versionArray=versionStr.split(".");return versionArray[0];}return 0;}
function DetectFlashVer(reqMajorVer,reqMinorVer,reqRevision){versionStr=GetSwfVer();if(versionStr==-1)return false;else if(versionStr!=0){if(isIE&&isWin&&!isOpera){tempArray=versionStr.split(" ");tempString=tempArray[1];versionArray=tempString.split(",");}else versionArray=versionStr.split(".");var versionMajor=versionArray[0],versionMinor=versionArray[1],versionRevision=versionArray[2];if(versionMajor>parseFloat(reqMajorVer))return true;else if(versionMajor==parseFloat(reqMajorVer)){if(versionMinor>parseFloat(reqMinorVer))return true;else if(versionMinor==parseFloat(reqMinorVer)&&versionRevision>=parseFloat(reqRevision))return true;}return false;}}
function FL_Generateobj(objAttrs,params,embedAttrs){var str='<object ';for(var i in objAttrs)str+=i+'="'+objAttrs[i]+'" ';str+='>';for(var i in params)str+='<param name="'+i+'" value="'+params[i]+'" /> ';str+='<embed ';for(var i in embedAttrs)str+=i+'="'+embedAttrs[i]+'" ';str+=' ></embed></object>';document.write(str);}
function FL_RunContent(){var ret=FL_GetArgs(arguments,"movie","clsid:d27cdb6e-ae6d-11cf-96b8-444553540000","application/x-shockwave-flash");FL_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);window.setTimeout("FL_RunContentTimed('"+ret.embedAttrs.id+"');",500);}
function FL_RunContentTimed(id){try{eval(id).focus();}catch(e){try{o=getFlashMovieObject(id);o.focus();document.getElementById("firstfocus1").style.display="none";}catch(e){}}}
function FL_GetArgs(args,srcParamName,classid,mimeType){var ret={};ret.embedAttrs={};ret.params={};ret.objAttrs={};for(var i=0;i<args.length;i=i+2){var currArg=args[i].toLowerCase();switch(currArg){case "classid":break;case "pluginspage":ret.embedAttrs[args[i]]=args[i+1];break;case "src":case "movie":ret.embedAttrs["src"]=args[i+1];ret.params[srcParamName]=args[i+1];break;case "onafterupdate":case "onbeforeupdate":case "onblur":case "oncellchange":case "onclick":case "ondblclick":case "ondrag":case "ondragend":case "ondragenter":case "ondragleave":case "ondragover":case "ondrop":case "onfinish":case "onfocus":case "onhelp":case "onmousedown":case "onmouseup":case "onmouseover":case "onmousemove":case "onmouseout":case "onkeypress":case "onkeydown":case "onkeyup":case "onload":case "onlosecapture":case "onpropertychange":case "onreadystatechange":case "onrowsdelete":case "onrowenter":case "onrowexit":case "onrowsinserted":case "onstart":case "onscroll":case "onbeforeeditfocus":case "onactivate":case "onbeforedeactivate":case "ondeactivate":case "type":case "codebase":ret.objAttrs[args[i]]=args[i+1];break;case "width":case "height":case "align":case "vspace":case "hspace":case "class":case "title":case "accesskey":case "name":case "id":case "tabindex":ret.embedAttrs[args[i]]=ret.objAttrs[args[i]]=args[i+1];break;default:ret.embedAttrs[args[i]]=ret.params[args[i]]=args[i+1];}}ret.objAttrs["classid"]=classid;if(mimeType)ret.embedAttrs["type"]=mimeType;return ret;}
function getFlashMovieObject(movieName){if(window.document[movieName])return window.document[movieName];if(!isIE){if(document.embeds&&document.embeds[movieName])return document.embeds[movieName];}else return document.getElementById(movieName);}
function setFlashMovieVariable(movieName,variable,value){var flashMovie=getFlashMovieObject(movieName);try{flashMovie.SetVariable(variable,value);}catch(e){try{for(index in flashMovie){if(flashMovie[index].SetVariable){flashMovie[index].SetVariable(variable,value);break;}}}catch(e){}}}
function checkFlashInstallation(){window.clearTimeout(checkFlashInstallationTimer);checkFlashInstallationTimer=null;if(DetectFlashVer(9,0,0)){document.getElementById("divFlash").style.width="100%";document.getElementById("divFlash").style.height="100%";try{window.location.href=""+window.location.href;}catch(e){}}else checkFlashInstallationTimer=window.setTimeout("checkFlashInstallation()",3000);}
function resetTimerTest(){window.clearTimeout(timertest);timertest=null;var d=document.getElementById("flashDiv");d.style.position="absolute";d.style.left="-100px";onWinResize();d.style.left="0px";onWinResize();}
function addScript(src,async){var st=document.createElement('script');st.type='text/javascript';st.async=async;st.src=src;var so=document.getElementsByTagName('script')[0];so.parentNode.insertBefore(st,so);}
function validateIsEmpty(str){return(""+str=="undefined"||str==null||str.length==0);}
function validateEmail(str){if(validateIsEmpty(str))return false;var regex=/^([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,4}))$/;return regex.test(str);}
function validateString(str,minLen,maxLen){if(validateIsEmpty(str))return false;return !(str.length<minLen||str.length>maxLen);}
function loadSignupForm(){try{document.getElementById("flashTable").style.display="none";}catch(e){}signupformtimer=window.setTimeout("showSignupForm();",50);}
function showSignupForm(){
  if(signupformtimer!=null){window.clearTimeout(signupformtimer);signupformtimer=null;}
  if(!jQuery){signupformtimer=window.setTimeout("showSignupForm();",50);return false;}
  var html="";
  html="<div id='signupformdiv'><div id='signupformdiv2' style='position:absolute;top:0px;left:0px;'></div><div id='signupformdiv3' style='position:absolute;top:0px;left:0px;'></div></div><div id='flashContent'>";
  var o1=document.getElementById("flashDiv").getElementsByTagName("td")[0];o1.innerHTML=html+o1.innerHTML+"</div>";
  $("#flashContent").css("display","none");
  $("#flashTable").css("display","");
  $.ajax({
    type:"GET",
    url:"pagedata.xml",
    data:"nocache="+(new Date()).getTime(),
    dataType:"xml",
    success:function(xmlObj, status, requestObj){
      var text=requestObj.responseText;
      var settings=$(xmlObj).find("Settings");
      settingsObj={
        "pubid":settings.attr('pubid'),
        "ssEnabled":settings.attr('ssEnabled')=="true",
        "ssEnabledPW":settings.attr('ssEnabledPW')=="true",
        "ssACancel":settings.attr('ssACancel')=="true",
        "ssFH":settings.attr('ssFH'),
        "ssFF":settings.attr('ssFF'),
        "ssFT":settings.attr('ssFT'),
        "MenuColour":settings.attr('MenuColour').replace(/0x/gim,"#"),
        "MenuFontColour":settings.attr('MenuFontColour').replace(/0x/gim,"#"),
        "LogoURL":settings.attr('LogoURL'),
        "BackgroundImage":settings.attr('BackgroundImage'),
        "BigLogoImage":settings.attr('BigLogoImage')
      };
      if((("ssEnabled" in settingsObj)&&settingsObj.ssEnabled)||(("ssEnabledPW" in settingsObj)&&settingsObj.ssEnabledPW)){
        for(i=1;i<=6;i++){
          settingsObj["ssF"+i]=settings.attr('ssF'+i);
          settingsObj["ssF"+i+"t"]=settings.attr('ssF'+i+'t');
        }
        if(settingsObj.BackgroundImage!="")$("#signupformdiv2").html("<img src='"+settingsObj.BackgroundImage+"' style='width:100%;height:100%;'/>");
        else $("#signupformdiv2").html("");
        var cssFont="font-family:verdana;color:"+settingsObj.MenuFontColour+";";
        var cssFont1=cssFont+"font-size:18px;font-weight:bold;";
        var cssFont2=cssFont+"font-size:12px;";
        var cssFont3=cssFont+"font-size:11px;";
        var html="<table style='width:100%;height:100%;'><tr><td valign=middle align=center><div style='height:auto;'>";
        if(settingsObj.BigLogoImage!=""){
          if(settingsObj.LogoURL!="")html+="<a href='"+settingsObj.LogoURL+"' target='_blank'>";
          html+="<img src='"+settingsObj.BigLogoImage+"' border=0 style='margin-bottom:10px;'/>";
          if(settingsObj.LogoURL!="")html+="</a>";
        }
        if(settingsObj.ssACancel)
          html+="<div style='width:420px;height:19px;position:relative;top:10px;z-index:20;'><img src='https://www.uniflip.com/images/close_icon.gif' width=19 height=19 onClick='closeSignupForm();' style='float:right;cursor:pointer;'/></div>";
        html+="<div style='width:400px;height:auto;position:relative;z-index:10;border:2px solid "+settingsObj.MenuFontColour+";background-color:"+settingsObj.MenuColour+";text-align:left;display:table-cell;'>";
        html+="<table cellspacing='12' cellpadding='0' border='0' style='table-layout:fixed;width:400px;'><tr><td style='width:125px;height:0px;'></td><td style='width:230px;'></td></tr>";
        html+="<tr><td style='min-height:100px;height:auto;'><img src='pre1.jpg'/></td><td style='"+cssFont1+"padding-bottom:6px;vertical-align:top;'>"+settingsObj.ssFH+"</td></tr>";
        for(var i=1;i<=6;i++){
          if(("ssF"+i+"t" in settingsObj)&&settingsObj["ssF"+i+"t"]!="hidden"){
            html+="<tr><td style='height:20px;"+cssFont2+"'><nobr>"+settingsObj["ssF"+i]+"</nobr></td><td style='text-align:left;'>";
            if(settingsObj["ssF"+i+"t"]=="email"||settingsObj["ssF"+i+"t"]=="string"||settingsObj["ssF"+i+"t"]=="number")html+="<input type='text' id='field"+i+"' name='field"+i+"' value='' style='width:230px;padding:2px;'/>";
            else if(settingsObj["ssF"+i+"t"]=="password")html+="<input type='password' id='field"+i+"' name='field"+i+"' value='' style='width:230px;padding:2px;'/>";
            else if(settingsObj["ssF"+i+"t"]=="checkbox")html+="<input type='checkbox' id='field"+i+"' name='field"+i+"' value='1'/>";
            html+="</td></tr>\r\n";
          }
        }
        html+="<tr><td colspan='2' align='right'><input type='button' id='fieldSubmit1' onClick='sendSignupForm();' value='"+settingsObj.ssFT+"' style='padding:3px;'/></td></tr>\r\n"
          +"<tr><td colspan='2' style='"+cssFont3+"'>"+settingsObj.ssFF+"</td></tr>"
          +"</table></div></div></td></tr></table>";
        $("#signupformdiv3").html(html);
        for(var i=1;i<=6;i++){
          if(("ssF"+i+"t" in settingsObj)&&(settingsObj["ssF"+i+"t"]=="email"||settingsObj["ssF"+i+"t"]=="string"||settingsObj["ssF"+i+"t"]=="number"))
            $("#field"+i).keydown(function(e){if(e.keyCode==13){e.preventDefault();sendSignupForm();}});
        }
        try{document.getElementById("signupformdiv3").getElementsByTagName("input")[0].focus();}catch(e){}
      }
    }
  });
}
function sendSignupForm(){
  var data="?id="+settingsObj.pubid,err=false;
  $("#fieldSubmit1").attr("disabled",true);
  data+="&type="+(("ssEnabled" in settingsObj)&&settingsObj.ssEnabled?"signup":("ssEnabledPW" in settingsObj)&&settingsObj.ssEnabledPW?"password":"none");
  for(var i=1;i<=6;i++){
    if(document.getElementById("field"+i)&&(document.getElementById("field"+i).type=="text"||document.getElementById("field"+i).type=="password")){
      data+="&field"+i+"="+escape(document.getElementById("field"+i).value);
      $("#field"+i).css("background","#fff");
      $("#field"+i).css("border","");
      if(
        (settingsObj["ssF"+i+"t"]=="email"&&!validateEmail($("#field"+i).val()))
        ||(!validateString($("#field"+i).val(),2,128))
      ){
        $("#field"+i).css("background","#fee url(https://www.uniflip.com/images/alert12x11.png) 220 5 no-repeat");
        $("#field"+i).css("border","2px solid red");
        err=true;
      }
    }
    else if(document.getElementById("field"+i)&&document.getElementById("field"+i).type=="checkbox")
      data+="&field"+i+"="+escape(document.getElementById("field"+i).checked?1:0);
  }
  if(err){
    $("#fieldSubmit1").attr("disabled",false);
    return false;
  }
  signupformresult=null;
  addScript("https://www.uniflip.com/showsignupformsubmit.js.php"+data,true);
  signupformtimer=window.setTimeout("sendSignupForm2();",50);
}
function sendSignupForm2(){
  if(signupformtimer!=null){window.clearTimeout(signupformtimer);signupformtimer=null;}
  if(signupformresult==null){signupformtimer=window.setTimeout("sendSignupForm2();",100);return false;}
  $("#fieldSubmit1").attr("disabled",false);
  if(signupformresult=="OK")closeSignupForm();
  else{
    alert(signupformresult);
    for(var i=1;i<=6;i++){
      $("#field"+i).css("background","#fee url(https://www.uniflip.com/images/alert12x11.png) 220 5 no-repeat");
      $("#field"+i).css("border","2px solid red");
    }
  }
}
function closeSignupForm(){$("#signupformdiv").css("display","none");$("#flashContent").css("display","");}
var timertest=window.setTimeout("resetTimerTest();",1000);
/*loadSignupForm();*/
