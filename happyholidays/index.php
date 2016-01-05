<?php
/**
 * MIT License
 * ===========
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * -----------------------------------------------------------------------
 * The demo is running all the Mobile_Detect's internal methods.
 * Here you can spot detections errors instantly.
 * -----------------------------------------------------------------------
 *
 * @author      Serban Ghita <serbanghita@gmail.com>
 * @license     MIT License https://github.com/serbanghita/Mobile-Detect/blob/master/LICENSE.txt
 *
 */

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if ($detect->isMobile()) {
    header('Location: http://www.westdesign.com/happyholidays/phone/');
    exit(0);
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>HWDS2016 Holiday Card</title>

    <script language="javascript">
        AC_FL_RunContent = 0;
        useGoogleTracker = "0";
        GoogleAccountId  = "";
        <!--
        // -----------------------------------------------------------------------------
        // Globals
        // Major version of Flash required
        var requiredMajorVersion = 9;
        // Minor version of Flash required
        var requiredMinorVersion = 0;
        // Minor version of Flash required
        var requiredRevision = 115;
        // -----------------------------------------------------------------------------
        // -->
    </script>

    <script src="FlipViewerXpressSystem/FVXContent.js" language="javascript"></script>

    <script language="javascript">
        //
        //retrieve language of browser
        //
        function getBrowserLanguage()
        {
            var browserLanguage;
            if (navigator.userLanguage) // Explorer
                browserLanguage = navigator.userLanguage;
            else if (navigator.language) // FF
                browserLanguage = navigator.language;
            else
                browserLanguage = "en-US";

            var langsSupported = new Array("EN", "ENG", "JA", "JPN", "DE", "DEU", "ZH", "CHS", "ZH", "CHT",
                "FR", "FRA", "IT", "ITA", "ES", "ESN", "CS", "CSY", "DA", "DAN", "NL", "NLD",
                "HU", "HUN", "PT", "PTG", "PL", "PLK", "RU", "RUS", "TH", "THA",
                //"VI", "VIT", "KR", "KOR", "IW", "IWR",		//not support for now
                //"HE", "HEB", "HI", "HIN", "MS", "MSL", "TA", "TAM", "IN", "IND",//not support for now
                "TR", "TRK", "SV", "SVE");
            var expectedLang = "";
            var code = browserLanguage.substr(0, 2).toUpperCase();
            for (var i = 0; i < langsSupported.length - 1; i += 2)
            {
                if (code == langsSupported[i])
                {
                    if (code == "ZH")//Chinese
                    {
                        var region = browserLanguage.substr(3, 2);
                        //alert(region);
                        if ((region.toUpperCase() == "CN") || (region.toUpperCase() == "SG"))
                            expectedLang = "CHS";//Simplified Chinese
                        else
                            expectedLang = "CHT";//Traditional Chinese
                    }
                    else
                        expectedLang = langsSupported[i + 1];
                    break;
                }
            }
            //alert(expectedLang);
            return expectedLang;
        }

        sequence = Request("seq");
        var startPageNumber = Request("pn");
        if (startPageNumber == null || startPageNumber == "")
        {
            startPageNumber = "";
        }

        var uiLanguage = Request("ui");
        var autoUiLanguage = "1";
        if (uiLanguage == null || uiLanguage == "")
        {
            if (autoUiLanguage == "1")
                uiLanguage = getBrowserLanguage();
            if (uiLanguage == null || uiLanguage == "")
                uiLanguage = "ENG";;
        }

        var highlightTexts = Request("keyword");
        highlightTexts = decodeURI(highlightTexts);

        hiliteWordsStyle = Request("hiliteWordsStyle");
        if (hiliteWordsStyle == null || hiliteWordsStyle == "")
        {
            hiliteWordsStyle = "0";
        }

        hiliteWordsColor = Request("hiliteWordsColor");
        if (hiliteWordsColor == null || hiliteWordsColor == "")
        {
            hiliteWordsColor = "0xFFFF00";//yellow
        }

        hiliteLineWidth = Request("hiliteLineWidth");
        if (hiliteLineWidth == null || hiliteLineWidth == "")
        {
            hiliteLineWidth = "2";
        }

        publishingwebsite = Request("publishingwebsite");
        if (publishingwebsite == null || publishingwebsite == "")
        {
            publishingwebsite = "";
        }

        infoservlet = Request("infoservlet");
        if (infoservlet == null || infoservlet == "")
        {
            infoservlet = "";
        }

        socialservlet = Request("socialservlet");
        if (socialservlet == null || socialservlet == "")
        {
            socialservlet = "";
        }

        var urlOfFlipBook = Request("opf");
        if (urlOfFlipBook == null || urlOfFlipBook == "")
        {
            urlOfFlipBook = "HWDS2016_Holiday_Card.xml";
        }

        var subid = Request("subid");
        if (subid == null || subid == "")
        {
            subid = "";
        }

        var pswd = Request("pswd");
        if (pswd == null || pswd == "")
        {
            pswd = "";
        }

        userBtn = Request("userBtn");
        if (userBtn == null || userBtn == "")
        {
            //unless you know how to use this function
            //NOT change this value
            userBtn = "0";
        }

        nodeid = Request("nodeid");
        nopdfsave = Request("nopdf");

        var urlOfMain = "main.swf";

        var urlOfArchivingServer = "";
        archivingserver = urlOfArchivingServer;//never change this

        var urlOfAdditionalControl = "HWDS2016_Holiday_Card_opf_files/additionalControl.xml";

        var uiLanguages = "FlipViewerXpressSystem/languages/languages.xml";

        var launchLogo = "";

        //customize for book background
        var bgColor = "";
        var bgTexture = "HWDS2016_Holiday_Card_opf_files/HWDS2016_Holiday_Card_bookBgTexture_.jpg";

        //set if flat-structure is applied
        var flatstructure = "";

        var useFullScreen = "0";

        widthOfFlip = "30";

        //this url will be launched when reader clicks icon of shoppingcart
        shoppingCart = "";//publisher should modify its value, e.g. http://www.flipviewer.com/en/index_en";
        shoppingText = "";//" %d purchased"
        bookTitle = "HWDS2016 Holiday Card";

        //**
        //** This Url is used to overwrite the URL of launching page when social-network sharing
        //** NOT CHANGE UNLESS YOU HOW
        redirectUrl = "";

        //NOT try to change for now
        searchBGColor = "";
        searchBRColor = "";
        bookmarkBGColor = "";
        bookmarkBRColor = "";
        notesBGColor = "";
        notesBRColor = "";
        notesCTColor = "";

        function userButtonAction(actionId) {
            //!!
            //!! add your own code
            //!! actionId:  1--click login button
            //              2--click logout button
            //              3--click discount button
            //              4--click shopcart button
            //              5--click account button
            //              6--click favorite button
            //!!
            //!! i.e. login/logout
            // in live system, please comment alert();
            alert(actionId);

            //!!
            //!! after action,
            //call onUserActionResponseConfirmed(actionId, SuccessOrFailed) to inform FVX-Viewer whether
            //     action is successful or fail
            //   actionId:  1--click login button
            //              2--click logout button
            //              3--click discount button
            //              4--click shopcart button
            //              5--click account button
            //              6--click favorite button
            //   SuccessOrFailed:  1--action is successful
            //                     0--action is unsuccessful
            //
            onUserActionResponseConfirmed(actionId, "1");
        }

        var isMobile = (navigator.userAgent.match(/Mobile/i)) ? true : false;

        function checkbrowser(forceUseHTML5)
        {

            //alert(navigator.userAgent);
            var urlOfiFVXPage = "HWDS2016_Holiday_Card_opf_files/flipviewerxpress-iFVX.html"
            //urlOfiFVXPage = urlOfiFVXPage + "?launchLogo=" + launchLogo;
            //if (useGoogleTracker == "1")
            //   urlOfiFVXPage = urlOfiFVXPage + "&GAId=" + GoogleAccountId;
            //urlOfiFVXPage = urlOfiFVXPage + "&pn=" + startPageNumber;
            //urlOfiFVXPage = urlOfiFVXPage + "&launchPage=" + document.URL;

            urlOfiFVXPage = urlOfiFVXPage + "?&pn=" + startPageNumber;
            urlOfiFVXPage = urlOfiFVXPage + "&seq=" + sequence;
            urlOfiFVXPage = urlOfiFVXPage + "&locale=" + uiLanguage;
            urlOfiFVXPage = urlOfiFVXPage + "&archive=" + archivingserver;

            var urlOfiLaunchingPage = "HWDS2016_Holiday_Card_opf_files/flipviewerxpress-iPad.html";
            var urlOfiPhonePage = "HWDS2016_Holiday_Card_opf_files/flipviewerxpress-iPhone.html";
            var hasOPZX4iPad = false;
            var hasHTMT5Viewer = true;
            if (isiPad)
            {
                if (hasOPZX4iPad)
                    window.location = encodeURI(urlOfiLaunchingPage);
                else
                if (hasHTMT5Viewer)
                    window.location = encodeURI(urlOfiFVXPage);
                else
                    window.location = encodeURI(urlOfiLaunchingPage);
            }
            else
            if (isiPhone || isAndroid || isWindowsPhone || isMobile || forceUseHTML5)
            {
                if (hasHTMT5Viewer)
                    window.location = encodeURI(urlOfiFVXPage);
                else
                    window.location = encodeURI(urlOfiPhonePage);
            }

        }

        function openIFrame(URL, title) {
            var res;
            if(res= /[\?\&]type\=([^\&]*)($|\&)/ .exec(URL)){
                var type = decodeURIComponent(res[1]);
            }
            var tit;
            if(tit= /[\?\&]title\=([^\&]*)($|\&)/ .exec(URL)){
                var title = decodeURIComponent(tit[1]);
            }
            if (title == null || title == "") title == "";//{title = bookTitle;}

            if (type == "image") {
                $.colorbox({href:URL, initialWidth:50, initialHeight:30, maxWidth:"80%", maxHeight:"80%", scalePhotos:true, photo:true, title:title});
            }
            else
            if (type =="video") {
                var dstH = GetBrowserHeight() * 0.8;
                var dstW = GetBrowserWidth() * 0.8;
                var srcW = getParamFromRequest(URL, "width");
                var srcH = getParamFromRequest(URL, "height");
                if (srcW == "")
                    srcW = dstW;
                if (srcH == "")
                    srcH = dstH;
                //alert(URL + "\n" + srcW + "," + srcH);
                if ((srcW < dstW) && (srcH < dstH))
                {
                    dstW = srcW;
                    dstH = srcH;
                }
                else
                {
                    var zoomx = dstW/srcW;
                    var zoomy = dstH/srcH;
                    var zoom = zoomx;
                    if (zoomx > zoomy)
                        zoom = zoomy;
                    dstW = srcW * zoom;
                    dstH = srcH * zoom;
                }
                dstW = parseInt(dstW) + 30;
                dstH = parseInt(dstH) + 30;
                //alert(GetBrowserWidth() + "," + GetBrowserHeight() + "\n" + dstW + "," + dstH);

                $.colorbox({href:URL, initialWidth:50, initialHeight:30, iframe:true, innerWidth:dstW, innerHeight:dstH, title:title});
            }
            else
            if (type =="audio") {
                $.colorbox({href:URL, initialWidth:50, initialHeight:30, iframe:true, width:500, height:240, title:title});
            }
            else
                $.colorbox({href:URL, iframe:true, initialWidth:50, initialHeight:30, width:"80%", height:"80%", title:title});
        }
    </script>


    <style type="text/css">

        html, body, #wrapper {
            height:100%;
            margin: 0;
            padding: 0;
            border: none;
            text-align: center;
        }
        #wrapper {
            margin: 0 auto;
            text-align: left;
            vertical-align: middle;
            width: 100%;

        }
    </style>

    <!--***********************************************
    * From FVXcreator 2.5.0
    * 20 April 2011
    * mechanism of iFrame has been changed to colorbox
    ***********************************************-->
    <link media="screen" rel="stylesheet" href="FlipViewerXpressSystem/windowfiles/colorbox.css" />
    <script src="FlipViewerXpressSystem/windowfiles/jquery-1.4.4.min.js"></script>
    <script src="FlipViewerXpressSystem/windowfiles/jquery.colorbox.js"></script>

</head>

<body onload="checkbrowser(false)" bgcolor="#000000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" MARGINHEIGHT="0" MARGINWIDTH="0" scroll="no">

<script language="JavaScript" type="text/javascript">

    // Version check for the Flash Player that has the ability to start Player Product Install (6.0r65)
    var hasProductInstall = DetectFlashVer(6, 0, 65);

    // Version check based upon the values entered above in "Globals"
    var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);

    if ( !hasProductInstall || !hasReqestedVersion )
    {
        checkbrowser(true);
    }


    // Check to see if a player with Flash Product Install is available and the version does not meet the requirements for playback
    if ( hasProductInstall && !hasReqestedVersion ) {
        // MMdoctitle is the stored document.title value used by the installation process to close the window that started the process
        // This is necessary in order to close browser windows that are still utilizing the older version of the player after installation has completed
        // DO NOT MODIFY THE FOLLOWING FOUR LINES
        // Location visited after installation is complete if installation is required
        var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
        var MMredirectURL = window.location;
        document.title = document.title.slice(0, 47) + " - Flash Player Installation";
        var MMdoctitle = document.title;

        AC_FL_RunContent(
            "src", "FlipViewerXpressSystem/playerProductInstall.swf",
            "FlashVars", "MMredirectURL="+MMredirectURL+'&MMplayerType='+MMPlayerType+'&MMdoctitle='+MMdoctitle+"",
            "width", "550",
            "height", "300",
            "align", "middle",
            "id", "detectionExample",
            "quality", "high",
            "bgcolor", "#000000",
            "name", "detectionExample",
            "allowScriptAccess","always",
            "type", "application/x-shockwave-flash",
            "pluginspage", "http://www.adobe.com/go/getflashplayer"
        );
    } else if ( hasReqestedVersion ){

        if (AC_FL_RunContent == 0) {

            alert("This page requires AC_RunActiveContent.js.");

        } else {
            var openParms = new Object;
            openParms.swfUrl = urlOfMain;
            openParms.opfUrl = urlOfFlipBook;
            openParms.startPageNumber = startPageNumber;
            openParms.language = uiLanguage;
            openParms.languages = uiLanguages;
            openParms.pswd = pswd;
            openParms.subid = subid;
            openParms.groupid = "";
            openParms.searchKeyword = highlightTexts;
            openParms.width = "100%";
            openParms.height = "100%";
            openParms.poweredBy = false;
            openParms.logo = launchLogo;
            openParms.publishingwebsite = publishingwebsite;
            openParms.bgColor = bgColor;
            openParms.bgTexture = bgTexture;
            openParms.flatstructure	= flatstructure;
            openParms.additionalcontrol = urlOfAdditionalControl;
            openParms.infoservlet = infoservlet;
            openParms.widthOfFlip = widthOfFlip;

            loadMain2(openParms);
        }
    } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)){


        var alternateContent = ''
            + '<div align="center"><img src="FlipViewerXpressSystem/fvxinstallflash.jpg" width="524" height="324" border="0" usemap="#Map">'
            + '</div><p>'
            + '<map name="Map">'
            + '<area shape="rect" coords="306,48,457,71" href="http://www.adobe.com/go/getflash/" target="_blank">'
            + '</map>'
            + '';
        document.write(alternateContent);  // insert non-flash content


    }else {

        if (AC_FL_RunContent == 0) {

            alert("This page requires AC_RunActiveContent.js.");

        } else {
            var openParms = new Object;
            openParms.swfUrl = urlOfMain;
            openParms.opfUrl = urlOfFlipBook;
            openParms.startPageNumber = startPageNumber;
            openParms.language = uiLanguage;
            openParms.languages = uiLanguages;
            openParms.pswd = pswd;
            openParms.subid = subid;
            openParms.groupid = "";
            openParms.searchKeyword = highlightTexts;
            openParms.width = "100%";
            openParms.height = "100%";
            openParms.poweredBy = false;
            openParms.logo = launchLogo;
            openParms.publishingwebsite = publishingwebsite;
            openParms.bgColor = bgColor;
            openParms.bgTexture = bgTexture;
            openParms.flatstructure	= flatstructure;
            openParms.additionalcontrol = urlOfAdditionalControl;
            openParms.infoservlet = infoservlet;
            openParms.widthOfFlip = widthOfFlip;

            loadMain2(openParms);
        }
    }
</script>

<!--/td>
</tr>
</table>-->

<!--maximize dimension of windows-->
<!--script type="text/javascript" language="javascript">
newWindow = window;
newWindow.moveTo(1,1);
newWindow.resizeTo(screen.availWidth, screen.availHeight);
</script-->

<!--Google Analytics / ivwTAG tracking mechanism-->
<script language="javascript">
    if (useGoogleTracker == "1")
        initGoogleTrack(GoogleAccountId, "HWDS2016 Holiday Card");
</script>
<!--Google Analytics / ivwTAG-->

</body>
</html>
