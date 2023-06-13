$(document).ready(function(){
    
    var imgLink = [];
    const urlParams = new URLSearchParams(window.location.search);
    const code = urlParams.get('code');
    const redirect_uri = "http://localhost/Book_A_Slot/Book_A_Slot/src/main/user/upload.php"; // replace with your redirect_uri;
    const client_secret = ""; // replace with your client secret
    const scope = "https://www.googleapis.com/auth/drive";
    var access_token= "";
    var client_id = "";// replace it with your client id;
    

    $.ajax({
        type: 'POST',
        url: "https://www.googleapis.com/oauth2/v4/token",
        data: {code:code
            ,redirect_uri:redirect_uri,
            client_secret:client_secret,
        client_id:client_id,
        scope:scope,
        grant_type:"authorization_code"},
        dataType: "json",
        success: function(resultData) {
           localStorage.setItem("accessToken",resultData.access_token);
           localStorage.setItem("refreshToken",resultData.refreshToken);
           localStorage.setItem("expires_in",resultData.expires_in);
           window.history.pushState({}, document.title, "/Book_A_Slot/Book_A_Slot/src/main/user/" + "index.php");
        },
        error: function (error) {
            console.log(error);
        },
  });

    function stripQueryStringAndHashFromPath(url) {
        return url.split("?")[0].split("#")[0];
    }   

    var Upload = function (file) {
        this.file = file;
    };
    
    Upload.prototype.getType = function() {
        localStorage.setItem("type",this.file.type);
        return this.file.type;
    };
    Upload.prototype.getSize = function() {
        localStorage.setItem("size",this.file.size);
        return this.file.size;
    };
    Upload.prototype.getName = function() {
        return this.file.name;
    };
    Upload.prototype.doUpload = function () {
        var that = this;
        var formData = new FormData();
    
        // add assoc key values, this will be posts values
        formData.append("file", this.file, this.getName());
        formData.append("upload_file", true);
    
        $.ajax({
            type: "POST",
            beforeSend: function(request) {
                request.setRequestHeader("Authorization", "Bearer" + " " + localStorage.getItem("accessToken"));
                
            },
            url: "https://www.googleapis.com/upload/drive/v2/files",
            data:{
                uploadType:"media"
            },
            xhr: function () {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', that.progressHandling, false);
                }
                return myXhr;
            },
            success: function (data) {
                imgLink.push(data.alternateLink);
                console.log(data.alternateLink);
                show();
            },
            error: function (error) {
                console.log(error);
            },
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            timeout: 60000
        });
    };
    
    Upload.prototype.progressHandling = function (event) {
        var percent = 0;
        var position = event.loaded || event.position;
        var total = event.total;
        var progress_bar_id = "#progress-wrp";
        if (event.lengthComputable) {
            percent = Math.ceil(position / total * 100);
        }
        // update progressbars classes so it fits your code
        $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
        $(progress_bar_id + " .status").text(percent + "%");
    };

    $("#upload").on("click", function (e) {
        var file1 = $("#files1")[0].files[0];
        var file2 = $("#files2")[0].files[0];
        var file3 = $("#files3")[0].files[0];
        var file4 = $("#files4")[0].files[0];

        var upload1 = new Upload(file1);
        var upload2 = new Upload(file2);
        var upload3 = new Upload(file3);
        var upload4 = new Upload(file4);
        // maby check size or type here with upload.getSize() and upload.getType()
    
        // execute upload
        upload1.doUpload();
        upload2.doUpload();
        upload3.doUpload();
        upload4.doUpload();
    });

    function show()
    {
        if(imgLink.length==4)
        {
            $event_id = $('#event_id').val();
            $.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: {event_id_change:$event_id, imglink:imgLink},
                success: function(data){
                    console.log(data);
                },
                error: function() {
                    console.log(response.status);
                },
            })
            console.log(imgLink);

        }
        
    }
    



    
});