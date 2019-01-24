@if(session('message'))
	<script>
        $.notify({
                icon: "now-ui-icons ui-1_check",
                message: '{{session('message')}}',
            },
            {
                type: '{{ session('type') }}',
                timer: 2000,
                placement: {
                    from: 'bottom',
                    align: 'right',
                },
            });
	</script>
@endif