$(document).on('submit','.database_operation_from',function(){
    const url = $(this).attr('data-url');
    const data = $(this).serialize();
    $.post(url,data,function(resp){
                let fb = JSON.parse(resp);
                if(fb.status=='true'){
                    alert(fb.message);
                    window.location.href = fb.reload;
                }else{
                    alert('Please Try Again');
                }
            })

    return false;
});
$(document).on("change",".manage_status",function(){
    const selector = $(this).attr("data-selector");
    const url = $(this).attr("data-url");
    let data = $('input[id="'+selector+'"]:checked').val();
    if(!data){
        data = 0;
    }
    $.post(url,{status:data},function(){
        alert("Status Successfully Changed");
    })
});
