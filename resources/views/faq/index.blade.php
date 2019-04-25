@extends('content.header')


@section('content')
    <br>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>

    <form action="{{url('/saveQuestion')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Question</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="question" value="{{ old('question') }}" name="question"
                       placeholder="Question">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Answer</label>
            <div class="col-sm-10">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body pad">

                <textarea class="textarea" id="answer" value="{{ old('answer') }}" name="answer"
                          placeholder="Answer{{ old('answer') }}"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="button" name="back" class="btn btn-dark" onclick="goBack()"><span
                            class="glyphicon glyphicon-step-backward"></span> Back
                </button>
                <button type="submit" name="submit" class="btn btn-primary"><span
                            class="glyphicon glyphicon-floppy-save"></span> Save
                </button>
            </div>
        </div>
    </form>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

@extends('content.footer')
