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