<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Basic Demo 1.1.0
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title>Upload Files</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support and progress bar for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
</head>
<body>
<div class="container">
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="icon-plus icon-white"></i>
        <span>Select files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    <br/>
    <br/>
    <!-- The global progress bar -->
    <div id="progress" class="progress progress-success progress-striped">
        <div class="bar" style="width: 0%;"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="status"></div>
    <br/>
    <div class="well">
        <ul>
            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage with Google Chrome, Mozilla Firefox and Apple Safari.</li>
        </ul>
    </div>

    <div class="well">
        <ul id="files">
            <strong>Files already on the server:</strong>
            <?php
                $directory = 'php/files/';
                $files = array_diff(scandir($directory), ['..', '.', '.htaccess', '.gitignore']);

                if(empty($files)) {
                    echo "<li>There are currently no files in the upload directory.</li>";
                } else {
                    foreach ($files as $file) {
                        echo "<li><a href='$directory$file'>" . $file . "</a></li>";
                    }
                }
            ?>
        </ul>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    $('#fileupload').fileupload({
        url: '/uploads/php/',
        dataType: 'json',
        add: function (e, data) {
            $('#status').text('Uploading...');
            data.submit();
        },
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('#files').append('<li><a href="<?php echo $directory; ?>' + file.name + '">' + file.name + '</a></li>');
            });
            $('#status').text('Complete');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .bar').css('width', progress + '%');
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
</body> 
</html>
