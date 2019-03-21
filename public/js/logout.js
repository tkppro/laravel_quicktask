function logout(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax(
    {
        url: '/logout',
        method: 'post',
        success: function (response)
        {
            location.reload();
        }

    });

}
