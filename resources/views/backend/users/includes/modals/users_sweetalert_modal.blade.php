<script>
    $(function(){
        $(document).on('click','#delete',function(e){
            e.preventDefault();
            var link = $(this).attr("href");


            Swal.fire({
                title: 'مطمينی ؟',
                text: "اطلاعات پاک شود ؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'خیر',
                confirmButtonText: 'بله، پاک شود'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link
                    Swal.fire(
                        'حذف شد!',
                        'اطلاعات شما با موفقیت پاک شد.',
                        'success',
                    )
                }
            })


        });

    });
</script>
