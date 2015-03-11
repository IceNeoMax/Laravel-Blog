<!DOCTYPE html>
<html lang="en">
<h1 align="center">
    <p style="color: #ffffff">Create Post</p>
</h1>
<head>
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- include summernote css/js-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.1/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.1/summernote.min.js"></script>
    <script type="text/javascript">
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
            }
            return "";
        }
        $(document).ready(function () {
            setCookie("id","", 1);
            $('#summernote').summernote(
                {
//                    airMode: false,
                    height: 300,
//                    airPopover: [
//                        ['color', ['color']],
//                        ['font', ['bold', 'underline', 'clear']],
//                        ['para', ['ul', 'paragraph']],
//                        ['table', ['table']],
//                        ['insert', ['link', 'picture']]
//                    ],
                    onChange: function(content, $editable) {

                        //console.log('onChange:', contents, $editable);
                        /*
                            get content
                            get title
                            if(cookie('id') == null)
                                init ajax sender(content,title) to /post/draft
                                after server response, save _id
                            else
                                init ajax sender(_id,content,title) to /post/draft
                         */
//                        var id = getCookie("id");
//                        if(id=="")
//                        {
//                            var request = $.ajax({
//                                url: "draft",
//                                type: "POST",
//                                data: {
//                                    content: content
//                                }});
//                            request.success(function (html) {
//                                 console.log(html);
//                                 setCookie("id", html.id, 1);
//                                });
//                        }
//                        else
//                        {
//                            var request = $.ajax({
//                            url: "draft",
//                            type: "POST",
//                            data: {
//                                content: content,
//                                id: id
//                            }
//                        });
//                            request.success(function (html) {
//                                //console.log(html);
//                                //setCookie("id", html.id, 1);
//                            });
//                        }
                    },
                    onImageUpload: function(files,editor,$editable){
                           console.log('images upload ',files,editor,$editable);

                        //var url = location.hostname + "/meduza/public/resource/upload";
                        //alert(url);
//                        var request = $.ajax({
//                            url: url,
//                            type: "POST",
//                            data: {
//                                file: files
//                            }
//                    });
//                        request.success(function (html) {
//                            console.log(html);
//                            //setCookie("id", html.id, 1);
//                        });
                    }
            })
        });

    </script>
</head>
<body style="background-image: url('http://www.splitshire.com/wp-content/uploads/2014/02/SplitShire_blur10.jpg')">
<div class="container" style="background-color: #ffffff">
    <?php echo Form::open(array(
        'url' =>'post/store'
    ));?>
    <?php echo Form::label("title", "Title"); ?>
    <?php echo "<br>";
    echo Form::text('title', null, ['style' => "
    width:100%",'class'=>'form-control']);?>
<br>
<br>
<textarea id="summernote" name="content"></textarea>
<br>
<br>
<?php echo Form::label("tags", "Separate tags by commas"); ?>
<?php echo Form::text('tags', null, ['style' => "
    width:100%",'class'=>'form-control']);?>
<br>
<br>
<div style="text-align:center">
    <input class="btn btn-primary btn-lg" style="width: 300px; margin: 0 auto;" type="submit" name="publish" value="Publish">
    <input class="btn btn-primary btn-lg" style="width: 300px; margin: 0 auto;" type="submit" name="draft" value="Draft">
</div>
</div>
</body>
</html>
<script>

</script>