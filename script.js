$("#submit").click(function (e) { 

    e.preventDefault();
    var data=new FormData();
    data.append('ajax',true);

    var inp = document.getElementById('file');

    for (var i = 0; i < inp.files.length; i++) {
        data.append('File[]',inp.files[i]);
        
    }
    var request = new XMLHttpRequest();

    request.upload.addEventListener('progress',function(event){
        if (event.lengthComputable)
        {
            var percent=event.loaded / event.total;
            $('#uploadProgress').html(Math.round(percent*100) +'%');
        }
    })

    request.addEventListener('readystatechange',function(event){
        if (this.readyState==4)
        {
            if(this.status==200){
             
                var response=JSON.parse(this.responseText);
                //console.log(response)
                $("#upload").html('');
                html='';

                for (var i = 0; i < response.length; i++) {
                    html+='<div><a href="Files/'+response[i]+'" target="_blank">'+response[i]+'</a></div>';
                }
                $("#upload").append(html);
            }
            else{
                alert("Error is"+this.status);
            }
        }
    })

    request.upload.addEventListener('load',function(event){
        $('#uploadProgress').fadeOut();
        $('#uploadProgress').empty();
    })

    request.upload.addEventListener('error',function(event){
        alert('error');
    })

    request.open('POST','server.php');
    request.setRequestHeader('Cache-Control','no-cache');
    $('#uploadProgress').fadeIn();
    request.send(data);
});