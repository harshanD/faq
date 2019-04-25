@section('footer')
    <script src="{{asset('js')}}/jquery.min.js" ></script>
    <script src="{{asset('js')}}/bootstrap.min.js" ></script>

<script src="{{asset('js')}}/bootstrap3-wysihtml5.all.min.js" ></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
</body>
</html>
@endsection



