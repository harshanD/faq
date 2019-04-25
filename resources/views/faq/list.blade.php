@extends('content.header')


@section('content')
    <br>
    <br>
    <div class="float-right">
        <a href="/addNew" class="btn btn-info pull-right" role="button"><span
                    class="glyphicon glyphicon-plus-sign"></span> Add New</a>
    </div>

    <br>
    <br>
    <br>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>   {{ session()->get('message') }} </strong>
        </div>
    @endif
    <br>
    <div class="panel-group" id="accordion">
        @foreach($questionWithAnswers as $id=>$quesAnswer)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                           href="#collapse{{$id}}">{{$quesAnswer->question}}</a>
                        <div class="pull-right">
                            <a href="/delete/{{$quesAnswer->id}}"><span style="color:red" class="glyphicon glyphicon-remove"></span>  Delete</a>
                               <a href="/edit/{{$quesAnswer->id}}"><span
                                        style="color:green"  class="glyphicon glyphicon-edit"></span>  Edit</a>
                        </div>

                    </h4>

                </div>

                <div id="collapse{{$id}}" class="panel-collapse collapse out">
                    <div class="panel-body">

                        @foreach($quesAnswer->answers as $id=>$answer)
                            <?= $answer->answer?>
                        @endforeach

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@extends('content.footer')
